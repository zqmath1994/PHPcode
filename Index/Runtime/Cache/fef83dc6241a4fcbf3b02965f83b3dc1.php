<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>提示</title>
	<link rel="stylesheet" href="__PUBLIC__/css/404.css" />

	<script>
	window.onload = function(){
		var url = "<?php echo ($jumpUrl); ?>";
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
		    <div class="name_gs">提示</div>
		    <div class="fixed_success"></div>
	</div>
</body>
</html>