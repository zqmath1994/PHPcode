<?php
	class CommonAction extends Action{
		function _empty(){
			header("Location: /404.html");
		}
	}
?>