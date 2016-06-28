<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class InformationController extends Controller {
	
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
	public $accountMenuUrl;
	public $accountMenuText;
	
	public $nickname;
	
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
		// $this->Article = D('ArticleView');
		$this->User = M('User');
		// $this->Special = M('Special');
		
		// if($_GET['p']) {
			// $this->pageNum = $_GET['p'];
		// } else {
			// $this->pageNum = 1;
		// }
		// if($_GET['category']) {
			// $this->artCategory = $_GET['category'];
		// } else {
			// $this->artCategory = 0;
		// }
		$this->navigation = array('menu-default','menu-default','menu-default','menu-default','menu-default');
	}
	
    public function index(){
		$this->init();

		//准备菜单栏数据
		//dump($this->navigation);
		if(cookie('PHPSESSID') and session('id') and cookie('PHPSESSID') == session('id')) {
			$this->headimage = C('__ROOT__') . 'Public/resource/headportrait/' .session('headimage');
			$this->accountMenuText[0] = '我要投稿';
			$this->accountMenuText[1] = '我的收藏';
			$this->accountMenuText[2] = '我的投稿';
			$this->accountMenuText[3] = '个人信息';
			$this->accountMenuText[4] = '退 出';
			$this->accountMenuUrl[0] = '';
			$this->accountMenuUrl[1] = '';
			$this->accountMenuUrl[2] = '';
			$this->accountMenuUrl[3] = U('Information/index');
			$this->accountMenuUrl[4] = U('Account/logout');
		} else {
			$this->headimage = C('__ROOT__') . 'Public/picture/' .'login.jpg';
			$this->accountMenuText[0] = '登 陆';
			$this->accountMenuText[1] = '注 册';
			$this->accountMenuUrl[0] = U('Account/index', array('operation'=>0));
			$this->accountMenuUrl[1] = U('Account/index', array('operation'=>1));
		}
		$this->assign('navigation',$this->navigation);
		$this->assign('headimage',$this->headimage);
		$this->assign('accountMenuText',$this->accountMenuText);
		$this->assign('accountMenuUrl',$this->accountMenuUrl);
		
		//准备个人信息数据
		$condition['id'] = array('eq',session('userId'));
		$userData = $this->User->where($condition)->find();
		if($userData) {
			$this->nickname = $userData['nickname'];
		} else {
			$this->redirect('Account/index', array('operation'=>0));
		}
		$this->assign('nickname',$this->nickname);
		// $specialData = $this->Special->limit(5)->select();
		// for ($index=0; $index<=4; $index++) {
			// $this->specialImages[$index] = C('__ROOT__') . 'Public/' . $specialData[$index]['coverimage'];
			// $this->specialMaintitles[$index] = $specialData[$index]['maintitle'];
			// $this->specialSubheads[$index] = $specialData[$index]['subhead'];
			// $this->specialHrefs[$index] = U('Content/index', array('type'=>'articles','specialId'=>$specialData[$index]['id']));
		// }
		// $this->assign('specialImages',$this->specialImages);
		// $this->assign('specialMaintitles',$this->specialMaintitles);
		// $this->assign('specialSubheads',$this->specialSubheads);
		// $this->assign('specialHrefs',$this->specialHrefs);
		
		// //准备文章列表数据
		// if ($this->artCategory != 0) {
			// $condition['type1'] = array('eq',$this->artCategory);
		// }
		// $articleData = $this->Article->where($condition)->page($this->pageNum .',10')->select();
		// $articleCount = count($articleData);
		// for ($index=0; $index<$articleCount; $index++) {
			// $this->articleCoverImage[$index] = C('__ROOT__') . 'Public/resource/minimalimage/' . $articleData[$index]['coverimage'] . '.jpg';
			// switch ($articleData[$index]['type1'])
			// {
			// case 1:
				// $this->articleClassification[$index] = '技术开发';
				// break;
			// case 2:
				// $this->articleClassification[$index] = '产品设计';
				// break;
			// case 3:
				// $this->articleClassification[$index] = '金融经济';
				// break;
			// default:
				// $this->articleClassification[$index] = '其他';
				// break;
			// }
			// $this->articleHref[$index] = U('Content/index', array('type'=>'article','articleId'=>$articleData[$index]['article_id']));
			// $this->articleMaintitle[$index] = $articleData[$index]['maintitle'];
			// $this->articleIntroduction[$index] = $articleData[$index]['article_introduction'];
			// $this->articleReadnum[$index] = $articleData[$index]['readnum'];
			// $this->articleNickname[$index] = $articleData[$index]['nickname'];
		// }

		// $this->assign('articleCoverImage',$this->articleCoverImage);
		// $this->assign('articleClassification',$this->articleClassification);
		// $this->assign('articleHref',$this->articleHref);
		// $this->assign('articleMaintitle',$this->articleMaintitle);
		// $this->assign('articleIntroduction',$this->articleIntroduction);
		// $this->assign('articleReadnum',$this->articleReadnum);
		// $this->assign('articleNickname',$this->articleNickname);
		
		// //准备分页数据
		// $articleCount = $this->Article->where($condition)->count();
		// $Page = new \Think\Page($articleCount,10);
		// foreach($condition as $key=>$val) {
			// $Page->parameter[$key] = urlencode($val);
		// }
		// $this->pageShow = $Page->show();
		// $this->assign('pageShow',$this->pageShow);
		// //dump($Page);

		// //准备专家数据
		// $expertData = $this->User->limit(5)->select();
		// for ($index=0; $index<=4; $index++) {
			// $this->expertImage[$index] = C('__ROOT__') . 'Public/resource/headportrait/' . $expertData[$index]['headimage'];	
			// $this->expertNickname[$index] = $expertData[$index]['nickname'];
			// $this->expertJobs[$index] = $expertData[$index]['jods'];
			// $this->expertIntroduction[$index] = $expertData[$index]['introduction'];			
		// }
		// $this->assign('expertImage',$this->expertImage);
		// $this->assign('expertNickname',$this->expertNickname);
		// $this->assign('expertJobs',$this->expertJobs);
		// $this->assign('expertIntroduction',$this->expertIntroduction);

        $this->display();
	}
	
	public function update(){
		// $User = M("User"); // 实例化User对象
		// $User->create($_POST);
		// $condition['id'] = array('eq',session('userId'));
		// $User->where($condition)->save();
		// $error = $User->getError();
		// $this->ajaxReturn($error);
		
		$User = D("User");
		if (!$User->create()){
				$error = $User->getError();
				$this->ajaxReturn($error);
		}else{
			$condition['id'] = array('eq',session('userId'));
			$result = $User->where($condition)->save();
			if($result){ 
				$this->ajaxReturn('更新异常！');
			} else {
				$this->ajaxReturn('更新成功！');
			}
		}
	}
}