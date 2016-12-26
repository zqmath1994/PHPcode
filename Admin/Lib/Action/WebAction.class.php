<?php 
	class WebAction extends CommonAction{

		function casel(){

			$company = M('company');
			$data	 = $company->where(array('id'=>array('not in','1,2,3')))->select();

			$this->assign('data',$data);
			$this->display();
		}

		function addcase(){

			$sclass = M('sclass');
			$data 	= $sclass->select();

			$this->assign('data',$data);
			$this->display();
		}

		function insecase(){

			$company = M('company');
			$slide = M('slide');
			$_POST['content'] = stripslashes(htmlspecialchars_decode($_POST['content']));
//			echo "<pre>";
			if(!empty($_FILES['pic']['name'])){
				
				$pic = $this->uploads();
				
				foreach($pic as $vo){
					
					if($vo['key'] == 'pic'){
						$_POST['pic'] = $vo['savename'];
					}
				}
			}
			$result = $company->add($_POST);
			if($result){
				$data = array();
				if(empty($pic)){
					$pic = $this->uploads();
				}
				$i=1;
				foreach($pic as $v){
					if(!empty($v['savename']) && $v['key'] != 'pic'){

						$data['image'] = $v['savename'];
						$data['title'] = $_POST['title'.$i];
						$data['url'] = $_POST['url'.$i];
						$data['pid']   = $result;
//						print_r($data);
						$slide->add($data);
					}	
					$i++;
				}
				
				$this->success('添加成功');
			}else{
				
				$this->error('添加失败');
			}
		}

		function updacase($id){

			$id = trim(intval($id));

			$company = M('company');
			$sclass	= M('sclass');
			$class = $sclass->select();
			$data = $company->where(array('id'=>$id))->find();

			$this->assign('sclass',$class);
			$this->assign('data',$data);
			$this->display();
		}

		function savecase($id){

			$id = trim(intval($id));

			$company = M('company');
			$_POST['content'] = stripslashes(htmlspecialchars_decode($_POST['content']));
			
			if(!empty($_FILES['pic']['name'])){
				
				$pic = $this->uploads();
				foreach($pic as $vo){
					
					if($vo['key'] == 'pic'){
						$_POST['pic'] = $vo['savename'];
					}else{
						$i = 1;
					}
				}
			}
		
			if(empty($pic)){
				for($n=1;$n<7;$n++){
					if(!empty($_FILES["pic$n"]['name']) && empty($pic)){
						$pic = $this->uploads();
					}
				}
			}

			if($i == 1 OR count($pic) > 1){
				$i = 1;
				$slide = M('slide');
				$slide->where(array('pid'=>$id))->delete();

				$data = array();
				foreach($pic as $v){
					if(!empty($v['savename']) && $v['key'] != 'pic'){
						
						$data['image'] = $v['savename'];
						$data['title'] = $_POST['title'.$i];
						$data['url'] = $_POST['url'.$i];
						$data['pid']   = $id;
						$slide->add($data);
					}
				}
			}
			
			if($company->where(array('id'=>$id))->save($_POST) OR $i == 1){
				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}
		}

		function delcase($id){

			$id = trim(intval($id));
			$company = M('company');

			if($company->where(array('id'=>$id))->delete()){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}
		}

		function menu(){

			$menu = M('menu');
			$data['menu'] = $menu->select();

			$this->assign('data',$data);
			$this->display();
		}

		function bclass(){

			$bclass = M('bclass');

			if(empty($_GET['id'])){

				$data = $bclass->select();
			}else{
				$data = $bclass->where(array('pid'=>$_GET['id']))->select();
			}

			$this->assign('data',$data);
			$this->display();
		}

		function sclass(){

			$sclass = M('sclass');

			if(empty($_GET['id'])){

				$data = $sclass->select();
			}else{
				$data = $sclass->where(array('pid'=>$_GET['id']))->select();
			}

			$this->assign('data',$data);
			$this->display();
		}

		function addm(){

			$this->display();
		}

		function insem(){

			$menu = M('Company');

			if($menu->add($_POST)){
				$this->success('添加成功');
			}else{
				$this->error('添加失败');
			}
		}

		function delm($id){

			$id = trim(intval($id));
			$menu = M('menu');

			if($menu->where(array('id'=>$id))->delete()){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}
		}

		function updam($id){

			$id = trim(intval($id));
			$menu = M('menu');

			$data = $menu->where(array('id'=>$id))->find();

			$this->assign('data',$data);
			$this->display();
		}

		function savem($id){

			$id = trim(intval($id));
			$menu = M('menu');

			if($menu->where(array('id'=>$id))->save($_POST)){
				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}
		}

		function addb(){

			$menu = M('menu');
			$data = $menu->select();

			$this->assign('data',$data);
			$this->display();
		}

		function inseb(){

			$bclass = M('bclass');

			$pic = $this->uploads();
			$_POST['image'] = $pic[0]['savename'];

			if($bclass->add($_POST)){
				$this->success('添加成功');
			}else{
				$this->error('添加失败');
			}
		}

		function delb($id){

			$id = trim(intval($id));
			$bclass = M('bclass');

			$img = $bclass->where(array('id'=>$id))->find();
			unlink($img['image']);

			if($bclass->where(array('id'=>$id))->delete()){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}
		}

		function updab($id){

			$id = trim(intval($id));
			$bclass = M('bclass');
			$menu 	= M('menu');

			$data = $bclass->where(array('id'=>$id))->find();
			$data['menu'] = $menu->select();

			$this->assign('data',$data);
			$this->display();
		}

		function saveb($id){

			$id = trim(intval($id));
			$bclass = M('bclass');

			if(!empty($_FILES['image']['name'])){
				$pic = $this->uploads();
				$_POST['image'] = $pic[0]['savename'];

				$img = $bclass->where(array('id'=>$id))->find();
				unlink('Public/images/'.$img['image']);
			}

			if($bclass->where(array('id'=>$id))->save($_POST)){
				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}
		}

		function adds(){

			$bclass = M('bclass');
			$data['bclass'] = $bclass->select();

			$this->assign('data',$data);
			$this->display();
		}

		function inses(){

			$sclass = M('sclass');

			if($sclass->add($_POST)){
				$this->success('添加成功');
			}else{
				$this->error('添加失败');
			}
		}

		function dels($id){

			$id = trim(intval($id));
			$sclass = M('sclass');

			if($sclass->where(array('id'=>$id))->delete()){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}
		}

		function updas($id){

			$id = trim(intval($id));
			$sclass = M('sclass');
			$bclass = M('bclass');

			$data = $sclass->where(array('id'=>$id))->find();
			$data['bclass'] = $bclass->select();

			$this->assign('data',$data);
			$this->display();
		}

		function saves($id){

			$id = trim(intval($id));
			$sclass = M('sclass');

			if($sclass->where(array('id'=>$id))->save($_POST)){
				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}
		}

		function company(){

			$company = M('company');
			$data = $company->where(array('pid'=>0))->select();
		
			$this->assign('data',$data);
			$this->display();
		}

		function updac($id){

			$id = trim(intval($id));
			$company = M('company');

			$data = $company->where(array('id'=>$id))->find();
			echo $data;
			$this->assign('data',$data);
			$this->display();
		}

		function savec($id){

			$id = trim(intval($id));

			$company = M('company');
			$_POST['content'] = stripslashes(htmlspecialchars_decode($_POST['content']));
	
			if(!empty($_FILES['pic']['name'])){
				
				$pic = $this->uploads();
				foreach($pic as $vo){
					
					if($vo['key'] == 'pic'){
						$_POST['pic'] = $vo['savename'];
					}else{
						$i = 1;
					}
				}
			}

			if(empty($pic)){
				for($n=1;$n<7;$n++){
					if(!empty($_FILES['pic'.$n]['name'])){
						$pic = $this->uploads();
					}
				}
			}

			if($i == 1 OR count($pic) > 1){
				$i = 1;
				$slide = M('slide');
				$slide->where(array('pid'=>$id))->delete();

				$data = array();
				foreach($pic as $v){
					if(!empty($v['savename']) && $v['key'] != 'pic'){
						
						$data['image'] = $v['savename'];
						$data['title'] = $_POST['title'.$i];
						$data['url'] = $_POST['url'.$i];
						$data['pid']   = $id;
						$slide->add($data);
					}
				}
			}
			
			if($company->where(array('id'=>$id))->save($_POST) OR $i == 1){
				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}
		}

		function olay(){

			$olay = M('olay');
			$data = $olay->select();
		
			$this->assign('data',$data);
			$this->display();
		}

		function addolay(){

			$this->display();
		}

		function inseolay(){

			$olay = M('olay');
			
			if(!empty($_FILES['image']['name'])){
				
				$pic = $this->uploads();
				$_POST['image'] = $pic[0]['savename'];
			}

			if($olay->add($_POST)){
				$this->success('添加成功');
			}else{
				$this->error('添加失败');
			}
		}

		function delolay($id){

			$id = trim(intval($id));
			$olay = M('olay');

			$data = $olay->where(array('id'=>$id))->find();
			unlink('__PUBLIC__/images/'.$data['image']);

			if($olay->where(array('id'=>$id))->delete()){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}

		}

		function updaolay($id){

			$id = trim(intval($id));
			$olay = M('olay');

			$data = $olay->where(array('id'=>$id))->find();

			$this->assign('data',$data);
			$this->display();
		}

		function saveolay($id){
			
			$id = trim(intval($id));
			$olay = M('olay');
			
			if(!empty($_FILES['image']['name'])){
				
				$data = $olay->where(array('id'=>$id))->find();
				unlink('__PUBLIC__/images/'.$data['image']);

				$pic = $this->uploads();
				$_POST['image'] = $pic[0]['savename'];
			}

			if($olay->where(array('id'=>$id))->save($_POST)){
				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}

		}

		function downlist(){

			$company = M('company');
			$data = $company->where(array('pid'=>999))->select();

			$this->assign('data',$data);
			$this->display();
		}

		function updadown($id){

			$id = trim(intval($id));
			$company = M('company');
			$data = $company->where(array('id'=>$id))->find();

			$this->assign('data',$data);
			$this->display();
		}

		function savedown($id){
		
			$id = trim(intval($id));
			$company = M('company');

			if(!empty($_FILES['pic']['name']) OR !empty($_FILES['content']['name'])){
					
				$pic = $this->uploadfiles();
				$num = count($pic);
				
				if(!empty($_FILES['pic']['name'])){
					$_POST['pic'] = $pic[0]['savename'];
				}

				if(!empty($_FILES['content']['name'])){
					if($num>1){
						$i = 1;
					}else{
						$i = 0; 
					}
					$_POST['content'] = $pic[$i]['savename'];
				}
			}

			if($company->where(array('id'=>$id))->save($_POST)){
				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}
		}

		function adddown(){

			$this->display();
		}

		function insedown(){

			$company = M('company');

			$pic = $this->uploadfiles();

			$_POST['pic'] = $pic[0]['savename'];
			$_POST['content'] = $pic[1]['savename'];
			$_POST['pid'] = 999;

			if($company->add($_POST)){
				$this->success('添加成功');
			}else{
				$this->error('添加失败');
			}
		}

		function deldown($id){

			$id = trim(intval($id));
			$company = M('company');

			if($company->where(array('id'=>$id))->delete()){
				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}
		}

		function show(){

			$show = M('show');
			$data = $show->select();

			$this->assign('data',$data);
			$this->display();
		}

		function updashow($id){

			$id = trim(intval($id));
			$show = M('show');
			if($_GET['im'] == 1){
				$field = 'id,image,url';
			}else{
				$field = 'id,title,url';
			}

			$data = $show->where(array('id'=>$id))->field($field)->find();

			$this->assign('data',$data);
			$this->display();
		}

		function saveshow($id){

			$id = trim(intval($id));
			$show = M('show');

			if(!empty($_FILES['image']['name'])){

				$pic = $this->uploads();
				$_POST['image'] = $pic[0]['savename'];
			}

			if($show->where(array('id'=>$id))->save($_POST)){
				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}
		}

		/**
		 * 函数名：uploads
		 * 功能：图片上传函数
		 * @return  array 上传后的文件详细信息
		 */
		function uploads(){

			import('ORG.Net.UploadFile');
			$upload = new UploadFile();
			$upload->maxSize  = 314572800;
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg','docx','pdf','rar','zip','pptx','xlsx','ppt','doc','xls');
			$upload->savePath =  './Public/images/';
			

			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				return $upload->getUploadFileInfo();
			}
		}

		function uploadfiles(){

			import('ORG.Net.UploadFile');
			$upload = new UploadFile();
			$upload->maxSize  = 314572800;
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg','docx','pdf','rar','zip','pptx','xlsx','ppt','doc','xls');
			$upload->savePath =  './Public/Uploads/';
			

			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				return $upload->getUploadFileInfo();
			}
		}

	}