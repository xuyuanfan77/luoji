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
		<link type="text/css" href="/luoji/Public/css/information.css" rel="stylesheet"/>
<script type="text/javascript" src="/luoji/Public/javascript/information.js"></script>

<div id="total-frame">
	<div id="right-frame">
		<div id="right-title">
			<a>个人信息</a>
			<input type="button" value="修改" id="updatebutton" onclick="updateSubmitForm()"/>
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
											
											<img id="image" src="<?php echo ($headimage); ?>" style="visibility:hidden"/>
											<img id="imageBg" src="<?php echo ($headimage); ?>"/>
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
				<td class="column-select">
					<a href="<?php echo U('Information/index');?>">个人信息</a>
				</td> 
			</tr> 
		</table> 
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