<?php 
	class DownAction extends CommonAction{

		function _empty(){
			header("HTTP/1.0 404 Not Found");
			$this->display('404/index');
		}


		function index(){

			$company = M('company'); 
			import('ORG.Util.Page');// 导入分页类
			$count	= $company->where(array('pid'=>999))->count();// 查询满足要求的总记录数
			$Page	= new Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
			$data['company'] = $company->where(array('pid'=>999))->limit($Page->firstRow.','.$Page->listRows)->select();
			
			$num = $count/6;


			$Page->setConfig('prev',"<<");
			$Page->setConfig('next','>>');
			$Page->setConfig('theme','<li>%upPage%</li> %linkPage% <li>%downPage%</li>');
			$show = $Page->show();  // 分页显示输出
			
			
			$this->assign('datas',$data);
			$this->page = $show;// 赋值分页输出

			R('Bases/header');
			$this->display();
		}

		function a(){
			$this->display();
		}
	}
 ?>