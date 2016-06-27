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
					<li><a href="<?php echo U('Information/index','category=4');?>" class="<?php echo ($navigation[4]); ?>">其他</a></li>
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
		<link type="text/css" href="/luoji/Public/css/information.css" rel="stylesheet"/>
<script type="text/javascript" src="/luoji/Public/javascript/information.js"></script>

<div id="total-frame">
	<div id="right-frame">
		<div id="right-title">
			<a>个人信息</a>
			<input type="button" value="更新"/>
		</div>
		<div id="right-content">
			<table id="content-table"> 
				<tr>
					<td class="form-td1">
						<a class="form-label">用户名：</a>
					</td>
					<td class="form-td2">
						<input class="form-input1" type="text"/>
					</td>
					<td class="form-td3">
						<a class="form-tip">仅支持字母和数字</a>
					</td>
				</tr>
				<tr>
					<td class="form-td1">
						<a class="form-label">昵称：</a>
					</td>
					<td>
						<input class="form-input1" type="text"/>
					</td>
					<td>
						<a class="form-tip">不超10字</a>
					</td>
				</tr>
				<tr>
					<td class="form-td1">
						<a class="form-label">密码：</a>
					</td>
					<td>
						<input class="form-input2" type="text" placeholder="新密码"/>
						<input class="form-input2" type="text" placeholder="确认密码"/>
					</td>
					<td>
						<a class="form-tip">字母、数字和符号混搭更加安全</a>
					</td>
				</tr>
				<tr>
					<td rowspan="2" class="form-td1">
						<a class="form-label">头像：</a>
					</td>
					<td rowspan="2">
						<img class="form-image" src="/luoji/Public/resource/headportrait/headimage.jpg"/>
					</td>
					<td>
						<input type="file" class="form-button" value="添加"/>
					</td>
				</tr>
				<tr>
					<td>
						<input type="button" class="form-button" value="删除文件"/>
					</td>
				</tr>
				<tr>
					<td class="form-td1">
						<a class="form-label">岗位：</a>
					</td>
					<td>
						<input class="form-input1" type="text"/>
					</td>
					<td>
						<a class="form-tip">不超10字</a>
					</td>
				</tr>
				<tr>
					<td class="form-td1">
						<a class="form-label">单位：</a>
					</td>
					<td>
						<input class="form-input1" type="text"/>
					</td>
					<td>
						<a class="form-tip">不超20字</a>
					</td>
				</tr>
				<tr>
					<td class="form-td1">
						<a class="form-label">介绍：</a>
					</td>
					<td>
						<textarea rows="6" cols="52"></textarea>
					</td>
					<td>
						<a class="form-tip">一句话介绍下自己，不超250字</a>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div id="left-frame">
		<table id="top-table"> 
			<tr>
				<td>
					<img id="headimage" src="/luoji/Public/resource/headportrait/headimage.jpg"/>
				</td> 
			</tr>
			<tr>
				<td>
					<a id="username">远航之帆</a>
				</td> 
			</tr> 
		</table>
		<table id="bottom-table"> 
			<tr>
				<td class="column-select">
					<a>我要投稿<a/>
				</td> 
			</tr>
			<tr>
				<td class="column-default">
					<a>我的投稿</a>
				</td> 
			</tr>
			<tr>
				<td class="column-default">
					<a>我的收藏<a/>
				</td> 
			</tr>
			<tr>
				<td class="column-default">
					<a>个人信息</a>
				</td> 
			</tr> 
		</table> 
	</div>
</div>
	</div>
	<div class="page-footer">
	</div>
</body>
</html>