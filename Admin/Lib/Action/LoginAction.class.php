<?php 
	class LoginAction extends Action{

		function index(){

			$this->display();
		}

		function login(){

			$user = M('user');
			
			$result = $user->where(array('username'=>$_POST['username'],'userpwd'=>md5($_POST['userpwd'])))->find();
			if(!empty($result)){
				session_start();
				session('admin',1);
				$this->success('登陆成功','__APP__/Index/index');
			}else{
				
				$this->error('登录失败');
			}
		}
		public function logout(){
			session(null);
			session('[destroy]');
			$this->display('Login/index');
		}
	}
	