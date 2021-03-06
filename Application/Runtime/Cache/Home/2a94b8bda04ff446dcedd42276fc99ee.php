<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo ($title); ?> | 逻辑</title>

	<link type="text/css" href="/luoji/Public/css/layout/frame.css" rel="stylesheet"/>
	<link type="text/css" href="/luoji/Public/css/layout/header.css" rel="stylesheet"/>
	<link type="text/css" href="/luoji/Public/css/layout/footer.css" rel="stylesheet"/>
	<script type="text/javascript" src="/luoji/Public/javascript/jquery-1.12.4.js"></script>
</head>

<body>
	<div class="page-header">
		<div class="pr header">
			<a class="pr logo"><img src="/luoji/Public/picture/logo-white.png"/></a>
			<div class="nav">
				<ul>
					<?php if(is_array($mainCategory)): foreach($mainCategory as $key=>$item): ?><li><a href="<?php echo ($item['href']); ?>"><?php echo ($item['name']); ?></a>
							<?php if($item['sub']|count != 0): ?><ul>
									<?php if(is_array($item['sub'])): foreach($item['sub'] as $key=>$subItem): ?><li><a href="<?php echo ($subCategory[$subItem]['href']); ?>"><?php echo ($subCategory[$subItem]['name']); ?></a></li><?php endforeach; endif; ?>
								</ul><?php endif; ?>
						</li><?php endforeach; endif; ?>
				</ul>
			</div>
			<div class="login">
				<img src="<?php echo ($headimage); ?>"/>
				<ul>
					<?php if(is_array($accountMenuText)): foreach($accountMenuText as $index=>$item): ?><li><a href="<?php echo ($accountMenuUrl[$index]); ?>"><?php echo ($accountMenuText[$index]); ?></a></li><?php endforeach; endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="page-body">
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
			<?php $__FOR_START_14145__=0;$__FOR_END_14145__=8;for($carouselIndex=$__FOR_START_14145__;$carouselIndex < $__FOR_END_14145__;$carouselIndex+=1){ if($carouselImages[$carouselIndex] != NULL): ?><a href="<?php echo ($carouselHrefs[$carouselIndex]); ?>"><img src="<?php echo ($carouselImages[$carouselIndex]); ?>" title="<?php echo ($carouselTitles[$carouselIndex]); ?>"/></a><?php endif; } ?>
		</div>
		<a id="banner-tit"></a>
		<table id="banner-but"><tr><td>
			<ul>
				<?php $__FOR_START_1254__=0;$__FOR_END_1254__=8;for($carouselIndex=$__FOR_START_1254__;$carouselIndex < $__FOR_END_1254__;$carouselIndex+=1){ if($carouselImages[$carouselIndex] != NULL): if($carouselIndex == 0): ?><li alt="<?php echo ($carouselIndexs[$carouselIndex]); ?>" class="on"></li>
							<?php else: ?>
							<li alt="<?php echo ($carouselIndexs[$carouselIndex]); ?>"></li><?php endif; endif; } ?>
			</ul>
		</td></tr></table>
	</div>
</div>

<!-- 专辑栏 -->
<div class="pr special">
	<table class="fr special-more" title="2" onclick="changeALot(this)">
		<tr><td><a id="special-more">换<br/>一<br/>批</a></td></tr>
	</table>
	<ul id="specials">
		<?php $__FOR_START_23079__=0;$__FOR_END_23079__=5;for($specialIndex=$__FOR_START_23079__;$specialIndex < $__FOR_END_23079__;$specialIndex+=1){ if($specialImages[$specialIndex] != NULL): ?><li>
					<img src="<?php echo ($specialImages[$specialIndex]); ?>"/>
					<div class="pa special-title">
						<h2><a class="pa main-title" href="<?php echo ($specialHrefs[$specialIndex]); ?>" target="_blank"><nobr><?php echo ($specialMaintitles[$specialIndex]); ?></nobr></a></h2>
						<h3><a class="pa minor-title" href="<?php echo ($specialHrefs[$specialIndex]); ?>" target="_blank"><nobr><?php echo ($specialSubheads[$specialIndex]); ?></nobr></a></h3>
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
			<?php $__FOR_START_29908__=0;$__FOR_END_29908__=10;for($articleIndex=$__FOR_START_29908__;$articleIndex < $__FOR_END_29908__;$articleIndex+=1){ if($articleCoverImage[$articleIndex] != NULL): ?><li class="article">
						<img src="<?php echo ($articleCoverImage[$articleIndex]); ?>"/>
						<ul>
							<li class="article-l1">
								<a class="fl classify1"><?php echo ($articleClassification[$articleIndex]); ?></a>
								<div class="fl classify2"></div>
								<div class="fr <?php echo ($articleCollect[$articleIndex]); ?>" id="<?php echo ($articleId[$articleIndex]); ?>" onclick="collect(this)"></div>
							</li>
							<li class="article-l2">
								<h2><a href="<?php echo ($articleHref[$articleIndex]); ?>" target="_blank" class="pr title"><nobr><?php echo ($articleMaintitle[$articleIndex]); ?></nobr></a></h2>
								<h3><a href="<?php echo ($articleHref[$articleIndex]); ?>" target="_blank" class="pr overview">&nbsp;&nbsp;<?php echo ($articleIntroduction[$articleIndex]); ?></a></h3>
							</li>
							<li class="article-l3">
								<a>阅读：<?php echo ($articleReadnum[$articleIndex]); ?></a>
								<a href="<?php echo ($expertHref[$articleIndex]); ?>" target="_blank">作者：<?php echo ($articleNickname[$articleIndex]); ?></a>
							</li>
						</ul>
					</li><?php endif; } ?>
		</ul>
		<div class="pages">
			<?php echo ($pageShow); ?>
		</div>
	</div>
</div>

	</div>
	<div class="page-footer">
		<table class="footer">
			<tr>
				<td class="td1"><img src="/luoji/Public/picture/logo-color.png"/></td>
				<td class="td2">
					<p class="p1">没有什么逻辑是一张图看不懂的，如果有，那就两张</p>
					<br/>
					<p class="p2">逻辑（www.luoji.com）是中国最大、最活跃的，以互联网界为范围，以逻辑为核心，以图片为载体的学习平台。在互联网业内得到了广泛关注和高度好评。平台目前拥有300万忠实粉丝。只要有清晰的逻辑图，就没有学不懂的逻辑。</p>
				</td>
				<td class="td3"><div class="vertical-line"></div></td>
				<td class="td4">
					<p>商务合作：</p>
					<p>电话：13539917795</p>
					<p>QQ：752952009</p>
					<p>E-mail：xuyuanfan77@outlook.com</p>
					<br/>
					<p>版权所有Copyright 2016 by 远航科技</p>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>