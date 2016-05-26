<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>奖状生成器</title>
</head>
<body>
	<!-- 提交表单 -->
	<form action="." method="get">
		<input type="text" name="name" placeholder="请输入您女友的名字">
		<input type="submit" value="生成">
	</form>
	<img src="res.png" height="691" width="1000">
	<?php
	/*
		Discript: 基于PHP GD库制作的奖状生成器(素材来源于网络，如有侵权。请联系作者删除)
		Date: 2016-05-26
		Author: 诺墨 <normal@normalcoder.com>
		Copyright (c) 2006-2014 http://normalcoder.com All rights reserved.
	*/
	if ($_GET['name']) {
		// 获取添加名称
		$text = $_GET['name'];
		// 获取素材资源和对象
		$image = imagecreatefrompng('res.png');
		// 设置混色模式，保证透明度
		imagealphablending($image,true);
		// 设置字体颜色
		$red = imagecolorallocate($image,150,0,0);
		// 将文字叠加到图片上
		imagefttext($image,40,0,100,350,$red,'boqing.ttf',$text);
		// 设定输出文件名，并输出文件
		$filename = "jiangzhuang.png";
		Imagepng($image,$filename);
		// 销毁图片对象，在页面上显示出来
		imagedestroy($image);
		echo '<img src="jiangzhuang.png">';	
	}
	?>
</body>
</html>
