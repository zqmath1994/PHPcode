<?php
class IndexAction extends CommonAction{

	function _empty(){
		header("HTTP/1.0 404 Not Found");
		$this->display('404/index');
	}

	function index(){

		R('Bases/header');
		$this->display('Index/indexs');
	}

	function indexs(){

		R('Bases/header');
		$show = M('show');
		
		$data = $show->select();

		$this->assign('datas',$data);
		$this->display('Index/index');
	}
}
?>