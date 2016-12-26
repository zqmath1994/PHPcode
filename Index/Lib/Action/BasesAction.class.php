<?php 
	class BasesAction extends CommonAction{

		function header(){

			$slide 	= M('slide');
			$config = M('webconfig');
			$menu 	= M('menu');
			$bclass = M('bclass');
			$sclass = M('sclass');
			$data['slide'] 	= $slide->where(array('pid'=>0))->select();		
			$data['config'] = $config->select();
			$data['menu'] 	= $menu->select();

			foreach($data['menu'] as $k=>$v){

				$data['menu'][$k]['bclass'] = $bclass->where(array('pid'=>$v['id']))->select();

				$i = 0;
				foreach ($data['menu'][$k]['bclass'] as $value) {
					
					$data['menu'][$k]['bclass'][$i]['sclass'] = $sclass->where(array('pid'=>$value['id']))->select();
					$i++;
				}
			}
			foreach($data['config'] as $v){
			
				$data['config'][$v['item']] = $v['content'];
			}
//			echo "<pre>";
//			print_r($data['menu'][1]['bclass'][0]);
			$data['config']['phone'] = explode(',',$data['config']['phone']);
			$data['config']['email'] = explode(',',$data['config']['email']);

			$this->assign('data',$data);
		}

		function verify(){
			import('ORG.Util.Image');
			ob_end_clean();
			Image::buildImageVerify();
		}
	}
 ?>