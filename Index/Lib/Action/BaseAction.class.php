<?php 
	class BaseAction extends CommonAction{

		function _empty(){
			header("HTTP/1.0 404 Not Found");
			$this->display('404/index');
		}

		function checkVerify(){
			if(strlen($_POST['content']) < 5){
				$this->ajaxReturn('','内容长度不能小于5个字符',0);
			}
			if(strlen($_POST['company']) == 0){
				$this->ajaxReturn('','公司名称不能为空!',0);
			}
			if(strlen($_POST['name']) == 0){
				$this->ajaxReturn('','姓名不能为空!',0);
			}
			if(strlen($_POST['telphone']) == 0 && strlen($_POST['phone']) == 0 && strlen($_POST['email'])== 0 && strlen($_POST['qq']) == 0){
				$this->ajaxReturn('','联系方式至少填一项!',0);
			}
			if($_SESSION['verify'] != md5($_POST['code'])){
				$this->ajaxReturn('','验证码错误',0);
			}
			$this->ajaxReturn('','',1);
		}
		function addmessage(){
			if(!IS_POST)$this->error('页面不存在!');
//			print_r($_POST);
			$content = '来自'.$_POST['company'].'的'.$_POST['name'].':<br />'.$_POST['content'].'<br />我的联系方式：手机：'.$_POST['telphone'].'电话：'.$_POST['phone'].'邮箱：'.$_POST['email'].'QQ:'.$_POST['qq'];

			$message = M('message');

			import('ORG.Email');                           // 导入email类
			$mail = new Email();                           // 实例化email类
			$data['mailto']	 = '863581290@qq.com';         // 收件人
			$data['subject'] = '网站留言信息';             // 邮件标题
			$data['body']	 =  $content;		// 邮件正文内容   
			
			if(!isset($_COOKIE["usetime"])){
				setcookie("usetime", "a", time()+3600*24);
			}else{
				if($_COOKIE["usetime"]>"aa"){ 
					$this->error('您今天已经留言三次了！');
					die();
				}else{
				setcookie("usetime", "a".$_COOKIE["usetime"], time()+3600*24);
				}
			}
			$mail->send($data);
			


			if($message->add($_POST)){
				$this->jumpUrl = $_POST['url'];
				unset($_SESSION['verify']);
				$this->display('success/index');
			}else{
				$this->error('留言失败');
				unset($_SESSION['verify']);
			}
		}
	}
 ?>