<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>404</title>
	<link rel="stylesheet" href="__PUBLIC__/css/404.css" />
	<script>
	window.onload = function(){
		var url = "http://www.longmamedia.com";
		setTimeout(function(){
			window.location = url;
		},3000);
		document.getElementById("close4").onclick=function(){
			window.location = url;
		}
	}
	</script>
</head>
<body>

	<div class="modal-backdrop"></div>
	<div class="modal fixed_0" id="error404" style="display: block;">
		<a class="close" id="close4"  >&nbsp;</a>
		    <a class="logo_fixed" href="index.html"><img src="__PUBLIC__/images/fixedlogo.png" style="height:50px;" /></a>
		    <div class="name_gs">错误提示</div>
		    <div class="fixed_con404">
			    <p>十分抱歉，您要查看的网页当前已过期，或已被更名或删除！</p>
			    <p>转到<a href="http://www.longmamedia.com/"> http://www.longmamedia.com/</a> 主页。</p>
			    <p style="margin-bottom:50px;">单击后退按钮，尝试其他链接。</p>
			    <p>By <a href="http://www.longmamedia.com/">http://www.longmamedia.com/</a></p>
		    
		    </div>
	</div>
</body>
</html>