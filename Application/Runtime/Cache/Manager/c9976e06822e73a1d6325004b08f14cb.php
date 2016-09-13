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
		<a class="navbar-text" style="float:right">退出</a>
	</nav>
	<div class="row" style="margin:0px">
		<div class="col-md-2">
			<div class="panel panel-default" style="margin:15px 0px">
					<ul class="nav nav-pills nav-stacked" role="tablist" style="text-align:center;">
					<li role="presentation"><a href="#">轮播图管理</a></li>
					<li role="presentation"><a href="#">分类管理</a></li>
					<li role="presentation" style="background:#eee"><a href="#">稿件管理</a></li>
					<li role="presentation"><a href="#">文章管理</a></li>
					<li role="presentation"><a href="#">专辑管理</a></li>
					<li role="presentation"><a href="#">用户管理</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-10">
	<button type="button" class="btn btn-default" style="float:right;margin:15px 0px">新增</button>
	<table class="table table-hover" style="margin:0px">
		<tr>
			<th>ID号</th>
			<th>图片</th>
			<th>标题</th>
			<th>序号</th>
			<th>URL</th>
			<th>是否禁用</th>
			<th>操作</th>
		</tr>
		<tr>
			<td>1</td>
			<td>xuyuanfan.jpg</td>
			<td>这是一张图片</td>
			<td>第1张</td>
			<td>www.baidu.com</td>
			<td>是</td>
			<td>修改 删除</td>
		</tr>
		<tr>
			<td>2</td>
			<td>xuyuanfan.jpg</td>
			<td>这是一张图片</td>
			<td>第2张</td>
			<td>www.baidu.com</td>
			<td>是</td>
			<td>修改 删除</td>
		</tr>
		<tr>
			<td>3</td>
			<td>xuyuanfan.jpg</td>
			<td>这是一张图片</td>
			<td>第3张</td>
			<td>www.baidu.com</td>
			<td>是</td>
			<td>修改 删除</td>
		</tr>
		<tr>
			<td>4</td>
			<td>xuyuanfan.jpg</td>
			<td>这是一张图片</td>
			<td>第4张</td>
			<td>www.baidu.com</td>
			<td>是</td>
			<td>修改 删除</td>
		</tr>
	</table>
	<nav>
		<ul class="pagination">
			<li><a href="#">&laquo;</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">&raquo;</a></li>
		</ul>
	</nav>
</div>
	</div>
	<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
		<p class="navbar-text">版权所有Copyright 2016 by 远航科技</p>
	</nav>
</body>
</html>