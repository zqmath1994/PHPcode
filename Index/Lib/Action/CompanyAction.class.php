<?php 
	class CompanyAction extends CommonAction{

		function _empty(){
			header("HTTP/1.0 404 Not Found");
			$this->display('404/index');
		}


		function index($id){

			$id = trim(intval($id));
			$company = M('company');
			$olay	 = M('olay');

			$data = $company->where(array('id'=>$id))->find();
			$slide = M('slide');
			$data['slide'] = $slide->where(array('pid'=>"$id"))->select();
			
			$data['wenzi'] = $olay->where(array('method'=>1))->select();
			$data['tupian'] = $olay->where(array('method'=>2))->select();
			
			$this->assign('datas',$data);
			R('Bases/header');
			$this->display();
		}
	}
 ?>