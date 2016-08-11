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
		<link type="text/css" href="/luoji/Public/css/user.css" rel="stylesheet"/>

<div id="total-frame" class="clearfix">
	<div id="right-frame">
		<?php echo W('Special/index');?>
		<div class="segmentation"></div>
		<?php echo W('Article/index');?>
		<div class="segmentation"></div>
		<?php echo W('Experts/index');?>
		<div class="segmentation"></div>
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
					<td><h1 id="experts-nickname"><?php echo ($user['nickname']); ?></h1><a id="experts-jobs"><?php echo ($user['jobs']); ?></a><!--a id="experts-rank">少尉</a--></td>
				</tr>
				<tr>
					<td><a id="experts-company"><?php echo ($user['company']); ?></a></td>
				</tr>
				<tr>
					<td><a id="experts-introduction"><?php echo ($user['introduction']); ?></a></td>
				</tr>
			</table>

		</div>
		
		<?php $__FOR_START_20824__=0;$__FOR_END_20824__=8;for($articleIndex=$__FOR_START_20824__;$articleIndex < $__FOR_END_20824__;$articleIndex+=1){ if($articleCoverImage[$articleIndex] != NULL): ?><div class="left-article">
					<table>
						<tr>
							<td rowspan="4"><img class="coverimage" src="<?php echo ($articleCoverImage[$articleIndex]); ?>"/></td>
							<td class="line1"><div class="classify1"><?php echo ($articleClassification[$articleIndex]); ?></div><a class="classify2"></a></td>
						</tr>
						<tr>
							<td class="line2"><h2 class="title" href="<?php echo ($articleHref[$articleIndex]); ?>" target="_blank" ><nobr><?php echo ($articleMaintitle[$articleIndex]); ?></nobr></h2></td>
						</tr>
						<tr>
							<td class="line3"><h3><div class="introduction"><?php echo ($articleIntroduction[$articleIndex]); ?></div></h3></td>
						</tr>
						<tr>
							<td class="line4"><a class="readnum">阅读：<?php echo ($articleReadnum[$articleIndex]); ?></a><a class="author">作者：<?php echo ($user['nickname']); ?></a></td>
						</tr>
					</table>
				</div><?php endif; } ?>

		<div class="page">
			<?php echo ($pageShow); ?>
		</div>
	</div>
</div>
	</div>
	<div class="page-footer">
	</div>
</body>
</html>