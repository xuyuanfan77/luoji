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
					<li><a href="<?php echo U('User/index','category=4');?>" class="<?php echo ($navigation[4]); ?>">其他</a></li>
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
		<link type="text/css" href="/luoji/Public/css/contribute.css" rel="stylesheet"/>
<link type="text/css" href="/luoji/Public/css/wangEditor.css" rel="stylesheet">
<script type="text/javascript" src="/luoji/Public/javascript/contribute.js"></script>

<div id="total-frame">
	<div id="right-frame">
		<div id="right-title">
			<a>我要投稿</a>
			<input type="button" value="预览" id="previewbutton" onclick="previewForm()"/>
			<input type="button" value="投稿" id="contributebutton" onclick="submitForm()"/>
		</div>
		<div id="right-content">
			<form id="information" enctype="multipart/form-data" method="post">
				<table id="content-table"> 
					<tr>
						<td class="form-td1">
							<a class="form-label">主标题：</a>
						</td>
						<td class="form-td2">
							<input class="form-input" type="text" name="maintitle"/>
						</td>
						<td>
							<a class="form-tip">不超25字</a>
						</td>
					</tr>
					<tr>
						<td class="form-td1">
							<a class="form-label">副标题：</a>
						</td>
						<td>
							<input class="form-input" type="text" name="subhead"/>
						</td>
						<td>
							<a class="form-tip">不超30字</a>
						</td>
					</tr>
					<tr>
						<td class="form-td1">
							<a class="form-label">分类：</a>
						</td>
						<td>
							<select class="form-select" name="type1">
								<option value="1">技术开发</option>
								<option value="2">产品设计</option>
								<option value="3">商业经济</option>
								<option value="4">其他</option>
							</select>
						</td>
						<td>
							<a class="form-tip">对应的文章分类更易被推荐</a>
						</td>
					</tr>
					<tr>
						<td class="form-td1">
							<a class="form-label">简介：</a>
						</td>
						<td class="form-td3">
							<textarea id="form-textarea1" style="height:250px;" name="introduction"></textarea>
							<script type="text/javascript" src="/luoji/Public/javascript/wangEditor.min.js"></script>
							<script type="text/javascript">
								var editor = new wangEditor('form-textarea1');
								editor.config.zindex = 201;
								editor.config.menus = [
									'bold',
									'underline',
									'italic',
									'strikethrough',
									'forecolor',
									'bgcolor',
									'quote',
									'unorderlist',
									'orderlist',
									'alignleft',
									'aligncenter',
									'alignright',
									'table',
									'eraser',
								];
								editor.config.menuFixed = false;
								editor.create();
							</script>
						</td>
						<td>
							<a class="form-tip">无格式文本不超1000字</a>
						</td>
					</tr>
					<tr>
						<td class="form-td1">
							<a class="form-label">逻辑图：</a>
						</td>
						<td class="form-td2">
							<input class="form-fileinput" type="file" name="mainimage"/>
						</td>
						<td>
							<div class="form-tip">内容丰富，逻辑清晰的图片更容易通过审核</div>
						</td>
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
					<a id="username"><?php echo ($nickname); ?></a>
				</td> 
			</tr> 
		</table>
		<table id="bottom-table"> 
			<tr>
				<td class="column-select">
					<a href="<?php echo U('Contribute/index');?>">我要投稿<a/>
				</td> 
			</tr>
			<tr>
				<td class="column-default">
					<a href="<?php echo U('Manuscript/index');?>">我的投稿</a>
				</td> 
			</tr>
			<tr>
				<td class="column-default">
					<a href="<?php echo U('Collect/index');?>">我的收藏<a/>
				</td> 
			</tr>
			<tr>
				<td class="column-default">
					<a href="<?php echo U('Information/index');?>">个人信息</a>
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