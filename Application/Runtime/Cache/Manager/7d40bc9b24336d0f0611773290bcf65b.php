<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>逻辑运营管理后台</title>

	<link type="text/css" href="/luoji/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link type="text/css" href="/luoji/Public/css/manager/layout.css" rel="stylesheet"/>
	<script type="text/javascript" src="/luoji/Public/javascript/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="/luoji/Public/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>	
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand">逻辑运营管理后台</a>
		</div>
		<a class="navbar-text" style="float:right;display:<?php echo ($logoutDispaly); ?>" href="<?php echo U('Account/logout');?>">退出</a>
	</nav>
	<div class="row" style="margin:0px">
		<div class="col-md-2" style="display:<?php echo ($navbarDispaly); ?>">
			<div class="panel panel-default" style="margin:15px 0px">
				<ul class="nav nav-pills nav-stacked" role="tablist" style="text-align:center;">
					<li role="presentation" style="background:#eee"><a href="<?php echo U('Carousel/index');?>">轮播图管理</a></li>
					<li role="presentation"><a href="#">分类管理</a></li>
					<li role="presentation"><a href="#">稿件管理</a></li>
					<li role="presentation"><a href="#">文章管理</a></li>
					<li role="presentation"><a href="#">专辑管理</a></li>
					<li role="presentation"><a href="#">用户管理</a></li>
				</ul>
			</div>
		</div>
		<script>
function submitForm() {
	var information = document.getElementById("information");
	information.submit()
}
</script>

<div class="col-md-10">
	<button type="button" class="btn btn-default" onclick="submitForm()" style="float:right;margin:15px 0px">保存</button>
	<div class="panel panel-default" style="margin:60px 0px">
		<div class="panel-body">
			<form id="information" enctype="multipart/form-data" action="<?php echo U('Carouselform/save');?>" method="post" role="form">
				<div class="form-group">
					<label>ID号：</label>
					<input type="text" class="form-control" name="id" placeholder="ID号(自动生成)" value="<?php echo ($carouselData['id']); ?>" readonly>
				</div>
				<div class="form-group">
					<label>图片：</label>
					<input type="file" name="image">
				</div>
				<div class="form-group">
					<label>标题：</label>
					<input type="text" class="form-control" name="title" value="<?php echo ($carouselData['title']); ?>" placeholder="标题">
				</div>
				<div class="form-group">
					<label>序号：</label>
					<input type="text" class="form-control" name="ordernum" value="<?php echo ($carouselData['ordernum']); ?>" placeholder="序号">
				</div>
				<div class="form-group">
					<label>URL：</label>
					<input type="text" class="form-control" name="url" value="<?php echo ($carouselData['url']); ?>" placeholder="URL">
				</div>
				<div class="form-group">
					<label>是否显示：</label>
					<select class="form-control" name="show">
						<?php if(($carouselData['show'] == 'yes')): ?><option value="yes" selected="selected">是</option>
						<?php else: ?>
							<option value="yes">是</option><?php endif; ?>
						<?php if(($carouselData['show'] == 'no')): ?><option value="no" selected="selected">否</option>
						<?php else: ?>
							<option value="no">否</option><?php endif; ?>
					</select>
				</div>
			</form>
		</div>
	</div>
</div>
	</div>
	<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
		<p class="navbar-text">版权所有Copyright 2016 by 远航科技</p>
	</nav>
</body>
</html>