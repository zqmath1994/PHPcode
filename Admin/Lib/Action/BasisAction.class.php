<?php 

	class BasisAction extends CommonAction{


		/**
		 * 函数名：listm
		 * 功能：留言查询
		 * @return array 将查询到的数值传给模板
		 */
		function listm(){

			$message = M('message');
			$data = $message->select(); // 查询用户留言

			$this->assign('data',$data);
			$this->display();
		}


		/**
		 * 函数名：del
		 * 功能：删除友链
		 * @param  int $id 要删除的友链
		 * @return bool     返回是否删除成功
		 */
		function del($id){

			if(!empty($id)){

				$id = intval($id);
				$message = M('message');

				if($message->where(array('id'=>$id))->delete()){
					$this->success('删除成功！');
				}else{
					$this->error('删除失败！');
				}
			}
		}

		/**
		 * 函数名：cop
		 * 功能：版权信息修改
		 */
		function cop(){
			
			$config = M('webconfig');
			$data = $config->where(array('item'=>'copyright'))->find();

			$this->assign('data',$data);
			$this->display();
		}

		/**
		 * 函数名：ucop
		 * 功能：修改版权信息
		 */
		function ucop(){

			$config = M('webconfig');

			if($config->where(array('item'=>'copyright'))->save($_POST)){

				$this->success('修改成功');
			}else{

				$this->error('修改失败');
			}
		}
		
		/**
		 * 函数名：guide
		 * 功能：版权信息修改
		 */
		function guide(){
			
			$config = M('webconfig');
			$data = $config->where(array('item'=>'prompt'))->find();

			$this->assign('data',$data);
			$this->display();
		}

		/**
		 * 函数名：uguide
		 * 功能：修改版权信息
		 */
		function uguide(){

			$config = M('webconfig');

			if($config->where(array('item'=>'prompt'))->save($_POST)){

				$this->success('修改成功');
			}else{

				$this->error('修改失败');
			}
		}

		function slide(){

			$slide = M('slide');
			$data = $slide->where(array('pid'=>0))->select();

			$this->assign('data',$data);
			$this->display();
		}

		function uslide($id){

			$id = trim(intval($id));

			$slide = M('slide');
			$data = $slide->where(array('id'=>"$id"))->find();

			$this->assign('data',$data);
			$this->display();
		}

		function ssli($id){

			$id = trim(intval($id));

			$slide = M('slide');
			$data = $slide->where(array('id'=>"$id"))->find();


			if(!empty($_FILES['image']['name'])){
				
				unlink('Public/images/'.$data['image']);
				
				$pic = $this->uploads();
				$_POST['image'] = $pic[0]['savename'];
			}

			if($slide->where(array('id'=>"$id"))->save($_POST)){

				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}
		}

		function delsli($id){

			$id = trim(intval($id));

			$slide = M('slide');
			if($slide->where(array('id'=>"$id"))->delete()){

				$this->success('删除成功');
			}else{
				$this->error('删除失败');
			}
		}

		function add(){

			$this->display();
		}

		function adds(){

			$slide = M('slide');
			$data = $slide->find();

				
			$pic = $this->uploads();
			$_POST['image'] = $pic[0]['savename'];


			if($slide->add($_POST)){

				$this->success('添加成功');
			}else{
				$this->error('添加失败');
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
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');
			$upload->savePath =  './Public/images/';
			

			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				return $upload->getUploadFileInfo();
			}
		}
	}