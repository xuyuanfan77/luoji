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
		<link type="text/css" href="/luoji/Public/css/information.css" rel="stylesheet"/>
<script type="text/javascript" src="/luoji/Public/javascript/information.js"></script>
<script type="text/javascript" src="/luoji/Public/javascript/ajaxfileupload.js"></script>

<div id="total-frame">
	<div id="right-frame">
		<div id="right-title">
			<a>个人信息</a>
			<input type="button" value="修改" id="updatebutton" onclick="updateSubmitForm()"/>
			<input type="hidden" id="updateUrl" value="<?php echo U('Information/update');?>"/>
		</div>
		<div id="right-content">
			<form action="<?php echo U('Information/update');?>" id="information" enctype="multipart/form-data" method="post" >
				<table id="content-table">
					<tr>
						<td class="form-td1"><a class="form-label">昵称：</a></td>
						<td class="form-td2"><input class="form-input1" id="nickname" name="nickname" type="text" value="<?php echo ($nickname); ?>" disabled="true"/></td>
						<td><a class="form-td3">1-20位字符，支持字母、数字和中文</a></td>
					</tr>
					<tr>
						<td class="form-td1"><a class="form-label">头像：</a></td>
						<td class="form-td2">
							<table>
								<tr>
									<td rowspan="2">
										<div id="imagePreview">
											<img id="image" src="<?php echo ($headimage); ?>"/>
										</div>
									</td>
									<td>
										<input type="file" id="imageInput" name="headimage" onchange="inputImageFile()" disabled="true"/>
									</td>
								</tr>
								<tr>
									<td><input type="button" id="imageDelete" onclick="deleteImageFile()" value="删除文件" disabled="true"/></td>
								</tr>
							</table>
						</td>
						<td><a class="form-td3">尺寸90X90最佳</a></td>
					</tr>
					<tr>
						<td class="form-td1"><a class="form-label">密码：</a></td>
						<td class="form-td2">
							<input class="form-input2" id="password"  name="password" type="password" placeholder="新密码" disabled="true"/>
							<input class="form-input2" id="repassword"  name="repassword" type="password" placeholder="确认密码" disabled="true"/>
						</td>
						<td><a class="form-td3">字母、数字和符号混搭更加安全</a></td>
					</tr>
					<tr>
						<td class="form-td1"><a class="form-label">邮箱：</a></td>
						<td class="form-td2"><input class="form-input1" id="email" name="email" type="text" value="<?php echo ($email); ?>" disabled="true"/></td>
						<td><a class="form-td3">请输入正确的邮箱格式</a></td>
					</tr>
					<tr>
						<td class="form-td1"><a class="form-label">岗位：</a></td>
						<td class="form-td2"><input class="form-input1" id="jobs" name="jobs" type="text" value="<?php echo ($jobs); ?>" disabled="true"/></td>
						<td><a class="form-td3">不超10字</a></td>
					</tr>
					<tr>
						<td class="form-td1"><a class="form-label">单位：</a></td>
						<td class="form-td2"><input class="form-input1" id="company" name="company" type="text" value="<?php echo ($company); ?>" disabled="true"/></td>
						<td><a class="form-td3">不超20字</a></td>
					</tr>
					<tr>
						<td class="form-td1"><a class="form-label">介绍：</a></td>
						<td class="form-td2"><textarea class="form-textarea" id="introduction" name="introduction" disabled="true"><?php echo ($introduction); ?></textarea></td>
						<td><a class="form-td3">一句话介绍下自己，不超250字</a></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<div id="left-frame">
		<table id="top-table"> 
			<tr>
				<td>
					<img id="headimage" src="<?php echo ($headimage); ?>"/>
				</td> 
			</tr>
			<tr>
				<td>
					<a id="mynickname"><?php echo ($nickname); ?></a>
				</td> 
			</tr> 
		</table>
		<table id="bottom-table"> 
			<tr>
				<td class="column-default">
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
				<td class="column-select">
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