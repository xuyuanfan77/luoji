<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html;charset=utf-8");
class ContentController extends Controller {
	
	//模型
	private $ArticleView;
	private $User;
	private $IncludeView;
	
	//输入参数
	private $type;
	private $specialId;
	private $articleId;
	private $artListIndex;
	
	//输出参数
	public $navigation;
	public $headimage;
	public $accountMenuUrl;
	public $accountMenuText;
	
	public $artListDisplay;
	public $artListTitle;
	public $artListHref;
	public $artListStyle;
	
	public $articleImage;
	public $articleMaintitle;
	public $articleSubhead;
	public $articleIntroduction;

	public $expertImage;
	public $expertNickname;
	public $expertJobs;
	public $expertCompany;
	public $expertIntroduction;
	
	//常用参数
	private $articleIndex;
	
	protected function init(){
		$this->ArticleView = D('ArticleView');
		$this->User = M('User');
		$this->IncludeView = D('IncludeView');
		
		$this->type = $_GET['type'];
		$this->specialId = $_GET['specialId'];
		if($_GET['articleId']) {
			$this->articleId = $_GET['articleId'];
		} else {
			$condition['special_id'] = array('eq',$this->specialId);
			$specialData = $this->IncludeView->where($condition)->select();
			$condition = NULL;
			$this->articleId = $specialData[0]['article_id'];
		}
		if($_GET['artListIndex']) {
			$this->artListIndex = $_GET['artListIndex'];
		} else {
			$this->artListIndex = 0;
		}
		$this->navigation = array('menu-default','menu-default','menu-default','menu-default','menu-default');
		$this->articleIndex = array('一、', '二、', '三、', '四、', '五、', '六、', '七、', '八、', '九、', '十、', '十一、', '十二、', '十三、', '十四、', '十五、');
	}
	
    public function index(){
		$this->init();
		
		//准备菜单栏数据
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
			$this->accountMenuUrl[3] = '';
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
		
		if($this->type == 'article') {
			$this->artListDisplay = 'hide';
			$this->assign('artListDisplay',$this->artListDisplay);
			//dump($userData);
			
		} elseif($this->type == 'articles') {
			$this->artListDisplay = 'show';
			$this->assign('artListDisplay',$this->artListDisplay);
			
			$condition['special_id'] = array('eq',$this->specialId);
			$specialData = $this->IncludeView->where($condition)->select();
			$condition = NULL;
			$articleCount = count($specialData);
			
			for ($index=0; $index<$articleCount; $index++) {
				$this->artListTitle[$index] = $this->articleIndex[$index] . mb_substr($specialData[$index]['article_maintitle'],0,13,'utf-8') . '…';
				$this->artListHref[$index] = U('Content/index', array('type'=>'articles','specialId'=>$this->specialId,'articleId'=>$specialData[$index]['article_id'],'artListIndex'=>$index));
				if($index == $this->artListIndex) {
					$this->artListStyle[$index] = 'list-select';
				} else {
					$this->artListStyle[$index] = 'list-default';
				}
			}
			$this->assign('artListTitle',$this->artListTitle);
			$this->assign('artListHref',$this->artListHref);
			$this->assign('artListStyle',$this->artListStyle);
			//dump($userData);
		}
		//dump($this->articleId);
		$condition['article_id'] = array('eq',$this->articleId);
		$articleData = $this->ArticleView->where($condition)->find();
		$condition = NULL;
		//dump($articleData);
		$this->articleMaintitle = $articleData['maintitle'];
		$this->articleSubhead = $articleData['subhead'];
		$this->articleIntroduction = $articleData['article_introduction'];
		$this->articleImage = C('__ROOT__') . 'Public/resource/largerimage/' . $articleData['mainimage'] . '.jpg';
		$this->expertImage = C('__ROOT__') . 'Public/resource/headportrait/' . $articleData['headimage'];
		$this->expertNickname = $articleData['nickname'];
		$this->expertJobs = $articleData['jobs'];
		$this->expertCompany = $articleData['company'];
		$this->expertIntroduction = $articleData['user_introduction'];

		$this->assign('articleMaintitle',$this->articleMaintitle);
		$this->assign('articleSubhead',$this->articleSubhead);
		$this->assign('articleIntroduction',$this->articleIntroduction);
		$this->assign('articleImage',$this->articleImage);
		$this->assign('expertImage',$this->expertImage);
		$this->assign('expertNickname',$this->expertNickname);
		$this->assign('expertJobs',$this->expertJobs);
		$this->assign('expertCompany',$this->expertCompany);
		$this->assign('expertIntroduction',$this->expertIntroduction);
		
		$this->display();
	}
}