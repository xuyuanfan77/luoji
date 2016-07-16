<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>逻辑</title>

	<link type="text/css" href="/luoji/Public/css/layout/frame.css" rel="stylesheet"/>
	<link type="text/css" href="/luoji/Public/css/layout/header.css" rel="stylesheet"/>
	<link type="text/css" href="/luoji/Public/css/layout/footer.css" rel="stylesheet"/>
	<script type="text/javascript" src="/luoji/Public/javascript/layout/header.js"></script>
	<script type="text/javascript" src="/luoji/Public/javascript/jquery-1.12.4.js"></script>
</head>


<body>
	<div class="page-header">
		<div class="header">
			<div class="logo">
				<img src="/luoji/Public/picture/logo-white.png"/>
			</div>
			<div class="menu">
				<ul>
					<li><a href="<?php echo U('Index/index','category=0');?>" class="<?php echo ($navigation[0]); ?>">首页</a></li>
					<li><a href="<?php echo U('Index/index','category=1');?>" class="<?php echo ($navigation[1]); ?>">技术</a></li>
					<li><a href="<?php echo U('Index/index','category=2');?>" class="<?php echo ($navigation[2]); ?>">产品</a></li>
					<li><a href="<?php echo U('Index/index','category=3');?>" class="<?php echo ($navigation[3]); ?>">经济</a></li>
					<li><a href="<?php echo U('Index/index','category=4');?>" class="<?php echo ($navigation[4]); ?>">其他</a></li>
				</ul>
			</div>
			<div class="login" id="login-image" onmouseover="showLoginMenu();" onmouseout="hideLoginMenu();">
				<img src="<?php echo ($headimage); ?>"/>
				<div class="login-menu" id="login-menu">	
					<ul>
						<?php if(is_array($accountMenuText)): foreach($accountMenuText as $index=>$item): ?><li><a href="<?php echo ($accountMenuUrl[$index]); ?>"><?php echo ($accountMenuText[$index]); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="page-body">
		<!--div class="test">
		</div-->
		<link type="text/css" href="/luoji/Public/css/user.css" rel="stylesheet"/>

<div id="total-frame" class="clearfix">
	<div id="right-frame">
		<?php echo W('Special/index');?>
		<div class="segmentation"></div>
		<?php echo W('Article/index');?>
		<div class="segmentation"></div>
		<?php echo W('Experts/index');?>
	</div>
	<div id="left-frame">
		<div id="left-title">
			<table id="achievement">
				<tr>
					<td><a class="achievement-text">作品</a></td>
					<td rowspan="2"> <div id="achievement-segmentation"></div></td>
					<td><a class="achievement-text">阅读量</a></td>
				</tr>
				<tr>
					<td><a class="achievement-text"><?php echo ($articleCount); ?></a></td>
					<td><a class="achievement-text"><?php echo ($articleTotalReadnum); ?></a></td>
				</tr>
			</table>
			
			<table>
				<tr>
					<td rowspan="3"><img id="experts-headimage" src="<?php echo ($user['headimage']); ?>"/></td>
					<td><a id="experts-nickname"><?php echo ($user['nickname']); ?></a><a id="experts-jobs"><?php echo ($user['jobs']); ?></a><!--a id="experts-rank">少尉</a--></td>
				</tr>
				<!--tr>
					<td><a id="experts-jobs"><?php echo ($user['jobs']); ?></a></td>
				</tr-->
				<tr>
					<td><a id="experts-company"><?php echo ($user['company']); ?></a></td>
				</tr>
				<tr>
					<td><a id="experts-introduction"><?php echo ($user['introduction']); ?></a></td>
				</tr>
			</table>

		</div>
		
		<?php $__FOR_START_5398__=0;$__FOR_END_5398__=8;for($articleIndex=$__FOR_START_5398__;$articleIndex < $__FOR_END_5398__;$articleIndex+=1){ if($articleCoverImage[$articleIndex] != NULL): ?><div class="left-article">
					<table>
						<tr>
							<td rowspan="4"><img class="article-coverimage" src="<?php echo ($articleCoverImage[$articleIndex]); ?>"/></td>
							<td class="article-firstline"><div class="article-classify1"><?php echo ($articleClassification[$articleIndex]); ?></div><a class="article-classify2"></a></td>
						</tr>
						<tr>
							<td class="article-secondline"><a class="article-title" href="<?php echo ($articleHref[$articleIndex]); ?>" target="_blank" ><nobr><?php echo ($articleMaintitle[$articleIndex]); ?></nobr></a></td>
						</tr>
						<tr>
							<td class="article-thirdline"><div class="article-introduction"><?php echo ($articleIntroduction[$articleIndex]); ?></div></td>
						</tr>
						<tr>
							<td class="article-forthline"><a class="article-readnum">阅读：<?php echo ($articleReadnum[$articleIndex]); ?></a><a class="article-author">作者：<?php echo ($user['nickname']); ?></a></td>
						</tr>
					</table>
				</div><?php endif; } ?>

		<div id="page">
			<?php echo ($pageShow); ?>
		</div>
	</div>
</div>
	</div>
	<div class="page-footer">
	</div>
</body>
</html>