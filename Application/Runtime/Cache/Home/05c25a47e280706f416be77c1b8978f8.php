<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>逻辑</title>

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
		<link type="text/css" href="/luoji/Public/css/article.css" rel="stylesheet"/>
<script type="text/javascript" src="/luoji/Public/javascript/article.js"></script>

<div class="article clearfix">
	<!-- 右边栏 -->
	<div class="right-frame">
	
		<!-- 作者栏 -->
		<table class="article-author">
			<tr><td>
				<table>
					<tr>
						<td rowspan="2"><img class="author-image" src="<?php echo ($expertImage); ?>"/></td>
						<td><a href="<?php echo ($expertHref); ?>" target="_blank" class="author-name"><?php echo ($expertNickname); ?></a></td>
					</tr>
					<tr>
						<td><a class="author-rank">少尉</a></td>
					</tr>
				</table>
			</td></tr>
			<tr><td><hr class="line"/></td></tr>
			<tr><td>
				<a class="author-jobs"><?php echo ($expertJobs); ?></a>
				<a class="author-company"><?php echo ($expertCompany); ?></a>
			</td></tr>
			<tr><td><hr class="line"/></td></tr>
			<tr><td>
				<div class="author-introduct"><?php echo ($expertIntroduction); ?></div>
			</td></tr>
		</table>
		<div class="segmentation"></div>
		<?php echo W('Special/index');?>
		<div class="segmentation"></div>
		<?php echo W('Article/index');?>
		<div class="segmentation"></div>
	</div>
	
	<!-- 左边栏 -->
	<div class="left-frame">
	
		<!-- 标题栏 -->
		<div class="article-title">
			<h1><?php echo ($articleMaintitle); ?></h1>
			<h2><?php echo ($articleSubhead); ?></h2>
		</div>
		
		<!-- 概述栏 -->
		<div class="article-text">
			<h3><?php echo ($articleIntroduction); ?></h3>
		</div>
		
		<!-- 图片栏 -->
		<div class="article-image">
			<?php if($articleImage != NULL): ?><img src="<?php echo ($articleImage); ?>"/><?php endif; ?>
		</div>
		
		<!-- 分享栏 -->
		<div class="article-share">
			<a class="weixin" href="#"><img src="/luoji/Public/picture/weixin.png"/>分享到微信</a>
			<a class="weibo" href="#"><img src="/luoji/Public/picture/weibo.png"/>分享到微博</a>
			<a class="qq" href="#"><img src="/luoji/Public/picture/qq.png"/>分享到QQ</a>
		</div>
	</div>
	
	
</div>

	</div>
	<div class="page-footer">
	</div>
</body>
</html>