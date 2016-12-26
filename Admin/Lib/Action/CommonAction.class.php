<?php
class CommonAction extends Action{
 	function _initialize(){
 		header("Content-Type: text/html; charset=UTF-8");
    	if(session('admin') != 1){
    		//$this->redirect(APP_NAME . '/Login/index','',1,'用户尚未登陆,请登陆!');
    		return;
    	}
 	}
}
?>