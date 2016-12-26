<?php
	// 使用公共配置文件
	$config = array(
		'SMTP_SERVER' =>'smtp.qq.com', //邮件服务器
	    'SMTP_PORT' =>25, //邮件服务器端口
	    'SMTP_USER_EMAIL' =>'774984889@qq.com', //SMTP服务器的用户邮箱(一般发件人也得用这个邮箱)
	    'SMTP_USER'=>'774984889@qq.com', //SMTP服务器账户名
	    'SMTP_PWD'=>'Tomjaywolf@126', //SMTP服务器账户密码
	    'SMTP_MAIL_TYPE'=>'HTML', //发送邮件类型:HTML,TXT(注意都是大写)
	    'SMTP_TIME_OUT'=>30, //超时时间
	    'SMTP_AUTH'=>true, //邮箱验证(一般都要开启)s
	);
//	$config = array();
	$db = require 'config.inc.php';
	return array_merge($db,$config);
?>