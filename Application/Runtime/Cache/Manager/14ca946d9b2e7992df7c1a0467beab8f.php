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
					<li role="presentation" style="background:<?php echo ($navbarColor[0]); ?>"><a href="<?php echo U('Carousel/index');?>">轮播图管理</a></li>
					<li role="presentation" style="background:<?php echo ($navbarColor[1]); ?>"><a href="<?php echo U('Category/index');?>">分类管理</a></li>
					<li role="presentation" style="background:<?php echo ($navbarColor[2]); ?>"><a href="#">稿件管理</a></li>
					<li role="presentation" style="background:<?php echo ($navbarColor[3]); ?>"><a href="#">文章管理</a></li>
					<li role="presentation" style="background:<?php echo ($navbarColor[4]); ?>"><a href="#">专辑管理</a></li>
					<li role="presentation" style="background:<?php echo ($navbarColor[5]); ?>"><a href="#">用户管理</a></li>
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
			<form id="information" action="<?php echo U('Categoryform/save');?>" method="post" role="form">
				<div class="form-group">
					<label>ID号：</label>
					<input type="text" class="form-control" name="id" value="<?php echo ($categoryData['id']); ?>" placeholder="ID号" readonly>
				</div>
				<div class="form-group">
					<label>名称：</label>
					<input type="text" class="form-control" name="name" value="<?php echo ($categoryData['name']); ?>" placeholder="标题">
				</div>
				<div class="form-group">
					<label>序号：</label>
					<input type="text" class="form-control" name="index" value="<?php echo ($categoryData['index']); ?>" placeholder="序号">
				</div>
				<div class="form-group">
					<label>级别：</label>
					<input type="text" class="form-control" name="level" value="<?php echo ($categoryData['level']); ?>" placeholder="URL">
				</div>
				<div class="form-group">
					<label>父菜单：</label>
					<select class="form-control" name="parent">
						<option value="0">无</option>
						<?php if(is_array($categoryAllData)): $k = 0; $__LIST__ = $categoryAllData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$categoryEach): $mod = ($k % 2 );++$k; if(($categoryData['parent'] == $categoryEach['id'])): ?><option value="<?php echo ($categoryEach["id"]); ?>" selected="selected"><?php echo ($categoryEach["name"]); ?></option>
							<?php else: ?>
								<option value="<?php echo ($categoryEach["id"]); ?>"><?php echo ($categoryEach["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
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