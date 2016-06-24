<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class IndexController extends Controller {
	
	//模型
	private $Article;
	private $User;
	private $Special;
	
	//输入参数
	private $pageNum;
	private $artCategory;
	
	//输出参数
	public $navigation;
	public $headimage;
	
	public $specialImages;
	public $specialMaintitles;
	public $specialSubheads;
	public $specialHrefs;
	
	public $articleCoverImage;
	public $articleClassification;
	public $articleHref;
	public $articleMaintitle;
	public $articleIntroduction;
	public $articleReadnum;
	public $articleNickname;
	
	public $pageShow;
	
	public $expertImage;
	public $expertNickname;
	public $expertJobs;
	public $expertIntroduction;
	
	protected function init(){
		$this->Article = D('ArticleView');
		$this->User = M('User');
		$this->Special = M('Special');
		
		if($_GET['p']) {
			$this->pageNum = $_GET['p'];
		} else {
			$this->pageNum = 1;
		}
		if($_GET['category']) {
			$this->artCategory = $_GET['category'];
		} else {
			$this->artCategory = 0;
		}
		$this->navigation = array('menu-default','menu-default','menu-default','menu-default','menu-default');
	}
	
    public function index(){
		$this->init();

		//准备菜单栏数据
		$this->navigation[$this->artCategory] = 'menu-select';
		//dump($this->navigation);
		if(cookie('PHPSESSID') and session('id') and cookie('PHPSESSID') == session('id')) {
			$this->headimage = C('__ROOT__') . 'Public/resource/headportrait/' .session('headimage');
		} else {
			$this->headimage = C('__ROOT__') . 'Public/resource/headportrait/' .'login.jpg';
		}
		$this->assign('navigation',$this->navigation);
		$this->assign('headimage',$this->headimage);
		
		//准备专辑数据
		$specialData = $this->Special->limit(5)->select();
		for ($index=0; $index<=4; $index++) {
			$this->specialImages[$index] = C('__ROOT__') . 'Public/' . $specialData[$index]['coverimage'];
			$this->specialMaintitles[$index] = $specialData[$index]['maintitle'];
			$this->specialSubheads[$index] = $specialData[$index]['subhead'];
			$this->specialHrefs[$index] = U('Content/index', array('type'=>'articles','specialId'=>$specialData[$index]['id']));
		}
		$this->assign('specialImages',$this->specialImages);
		$this->assign('specialMaintitles',$this->specialMaintitles);
		$this->assign('specialSubheads',$this->specialSubheads);
		$this->assign('specialHrefs',$this->specialHrefs);
		
		//准备文章列表数据
		if ($this->artCategory != 0) {
			$condition['type1'] = array('eq',$this->artCategory);
		}
		$articleData = $this->Article->where($condition)->page($this->pageNum .',10')->select();
		$articleCount = count($articleData);
		for ($index=0; $index<$articleCount; $index++) {
			$this->articleCoverImage[$index] = C('__ROOT__') . 'Public/resource/minimalimage/' . $articleData[$index]['coverimage'] . '.jpg';
			switch ($articleData[$index]['type1'])
			{
			case 1:
				$this->articleClassification[$index] = '技术开发';
				break;
			case 2:
				$this->articleClassification[$index] = '产品设计';
				break;
			case 3:
				$this->articleClassification[$index] = '金融经济';
				break;
			default:
				$this->articleClassification[$index] = '其他';
				break;
			}
			$this->articleHref[$index] = U('Content/index', array('type'=>'article','articleId'=>$articleData[$index]['article_id']));
			$this->articleMaintitle[$index] = $articleData[$index]['maintitle'];
			$this->articleIntroduction[$index] = $articleData[$index]['article_introduction'];
			$this->articleReadnum[$index] = $articleData[$index]['readnum'];
			$this->articleNickname[$index] = $articleData[$index]['nickname'];
		}

		$this->assign('articleCoverImage',$this->articleCoverImage);
		$this->assign('articleClassification',$this->articleClassification);
		$this->assign('articleHref',$this->articleHref);
		$this->assign('articleMaintitle',$this->articleMaintitle);
		$this->assign('articleIntroduction',$this->articleIntroduction);
		$this->assign('articleReadnum',$this->articleReadnum);
		$this->assign('articleNickname',$this->articleNickname);
		
		//准备分页数据
		$articleCount = $this->Article->where($condition)->count();
		$Page = new \Think\Page($articleCount,10);
		foreach($condition as $key=>$val) {
			$Page->parameter[$key] = urlencode($val);
		}
		$this->pageShow = $Page->show();
		$this->assign('pageShow',$this->pageShow);
		//dump($Page);

		//准备专家数据
		$expertData = $this->User->limit(5)->select();
		for ($index=0; $index<=4; $index++) {
			$this->expertImage[$index] = C('__ROOT__') . 'Public/resource/headportrait/' . $expertData[$index]['headimage'];	
			$this->expertNickname[$index] = $expertData[$index]['nickname'];
			$this->expertJobs[$index] = $expertData[$index]['jods'];
			$this->expertIntroduction[$index] = $expertData[$index]['introduction'];			
		}
		$this->assign('expertImage',$this->expertImage);
		$this->assign('expertNickname',$this->expertNickname);
		$this->assign('expertJobs',$this->expertJobs);
		$this->assign('expertIntroduction',$this->expertIntroduction);
		
		//test
		//$value = session('id');
		//dump($value);

        $this->display();
	}
}