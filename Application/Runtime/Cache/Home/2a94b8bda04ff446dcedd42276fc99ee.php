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
		<link type="text/css" href="/luoji/Public/css/index.css" rel="stylesheet"/>
<script type="text/javascript" src="/luoji/Public/javascript/index.js"></script>

<!-- 通知栏 -->
<div class="pr notification">
	<div class="fr channel">
		<div class="pr channel-tit">交流频道</div>
		<table class="pr channel-con">
			<tr>
				<td>HTML交流群：</td>
				<td>548588839</td>
			</tr>
			<tr>
				<td>JS交流群：</td>
				<td>548588839</td>
			</tr>
			<tr>
				<td>PHP交流群：</td>
				<td>548588839</td>
			</tr>
			<tr>
				<td>MySQL交流群：</td>
				<td>548588839</td>
			</tr>
			<tr>
				<td>产品交流群：</td>
				<td>548588839</td>
			</tr>
		</table>
	</div>
	<div class="pr" id="banner">
		<div id="banner-pic">
			<?php $__FOR_START_10649__=0;$__FOR_END_10649__=8;for($carouselIndex=$__FOR_START_10649__;$carouselIndex < $__FOR_END_10649__;$carouselIndex+=1){ if($carouselImages[$carouselIndex] != NULL): ?><a href="<?php echo ($carouselHrefs[$carouselIndex]); ?>"><img src="<?php echo ($carouselImages[$carouselIndex]); ?>" title="<?php echo ($carouselTitles[$carouselIndex]); ?>"/></a><?php endif; } ?>
		</div>
		<a id="banner-tit"></a>
		<table id="banner-but"><tr><td>
			<ul>
				<?php $__FOR_START_1118__=0;$__FOR_END_1118__=8;for($carouselIndex=$__FOR_START_1118__;$carouselIndex < $__FOR_END_1118__;$carouselIndex+=1){ if($carouselImages[$carouselIndex] != NULL): if($carouselIndex == 0): ?><li alt="<?php echo ($carouselIndexs[$carouselIndex]); ?>" class="on"></li>
							<?php else: ?>
							<li alt="<?php echo ($carouselIndexs[$carouselIndex]); ?>"></li><?php endif; endif; } ?>
			</ul>
		</td></tr></table>
	</div>
</div>

<!-- 专辑栏 -->
<div class="pr special">
	<a class="fr special-more" id="special-more" alt="1" onclick="changeALot(this)">
		<br/><br/><br/>换<br/>一<br/>批<br/><br/><br/>
	</a>
	<ul id="specials">
		<?php $__FOR_START_12351__=0;$__FOR_END_12351__=5;for($specialIndex=$__FOR_START_12351__;$specialIndex < $__FOR_END_12351__;$specialIndex+=1){ if($specialImages[$specialIndex] != NULL): ?><li>
					<img src="<?php echo ($specialImages[$specialIndex]); ?>"/>
					<div class="pa special-title">
						<a class="pa main-title" href="<?php echo ($specialHrefs[$specialIndex]); ?>" target="_blank"><nobr><?php echo ($specialMaintitles[$specialIndex]); ?></nobr></a>
						<a class="pa minor-title" href="<?php echo ($specialHrefs[$specialIndex]); ?>" target="_blank"><nobr><?php echo ($specialSubheads[$specialIndex]); ?></nobr></a>
					</div>
				</li><?php endif; } ?>
	</ul>
</div>

<!-- 内容栏 -->
<div class="pr content clearfix">
	<!-- 其他栏 -->
	<div class="fr others">
		<?php echo W('Special/index');?>
		<div class="segmentation"></div>
		<?php echo W('Article/index');?>
		<div class="segmentation"></div>
		<?php echo W('Experts/index');?>
	</div>
	
	<!-- 文章栏 -->
	<div class="pr articles">
		<ul>
			<?php $__FOR_START_27916__=0;$__FOR_END_27916__=10;for($articleIndex=$__FOR_START_27916__;$articleIndex < $__FOR_END_27916__;$articleIndex+=1){ if($articleCoverImage[$articleIndex] != NULL): ?><li class="article">
						<img src="<?php echo ($articleCoverImage[$articleIndex]); ?>"/>
						<ul>
							<li class="article-l1">
								<a class="fl classify1"><?php echo ($articleClassification[$articleIndex]); ?></a>
								<div class="fl classify2"></div>
								<div class="fr <?php echo ($articleCollect[$articleIndex]); ?>" id="<?php echo ($articleId[$articleIndex]); ?>" onclick="collect(this)"></div>
							</li>
							<li class="article-l2">
								<a href="<?php echo ($articleHref[$articleIndex]); ?>" target="_blank" class="pr title"><nobr><?php echo ($articleMaintitle[$articleIndex]); ?></nobr></a>
								<a href="<?php echo ($articleHref[$articleIndex]); ?>" target="_blank" class="pr overview">&nbsp;&nbsp;<?php echo ($articleIntroduction[$articleIndex]); ?></a>
							</li>
							<li class="article-l3">
								<a>阅读：<?php echo ($articleReadnum[$articleIndex]); ?></a>
								<a href="<?php echo ($expertHref[$articleIndex]); ?>" target="_blank">作者：<?php echo ($articleNickname[$articleIndex]); ?></a>
							</li>
						</ul>
					</li><?php endif; } ?>
		</ul>
		<div class="pages">
			<ul>
				<?php echo ($pageShow); ?>
			</ul>
		</div>
	</div>
</div>

	</div>
	<div class="page-footer">
	</div>
</body>
</html>