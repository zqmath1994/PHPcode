<?php
	// 使用公共配置文件
	$admin = array('SESSION_EXPIRE'=>'3600');
	$config =  require 'config.inc.php';
	return array_merge($admin,$config);
?>