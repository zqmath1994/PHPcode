<?php 
	class DesignAction extends CommonAction{

		function _empty(){
			header("HTTP/1.0 404 Not Found");
			$this->display('404/index');
		}

		function index($id){
			$id = trim(intval($id));
			$sclass = M('sclass'); 
			$company = M('company'); 
			import('ORG.Util.Page');// 导入分页类
			$count	= $company->where(array('pid'=>$id))->count();// 查询满足要求的总记录数
			$Page	= new Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
			
			$data['company'] = $company->where(array('pid'=>$id))->limit($Page->firstRow.','.$Page->listRows)->select();
			
			$num = $count/6;

//			$Page->setConfig('theme','<li><a href="__URL__/index/id/'.$id.'/p/1"><<</a></li> %linkPage% <li><a href="__URL__/index/id/'.$id.'/p/'.$num.'">>></a></li>');
			$Page->setConfig('prev',"<<");
			$Page->setConfig('next','>>');
			$Page->setConfig('theme','<li>%upPage%</li> %linkPage% <li>%downPage%</li>');
			
			$show	= $Page->show();// 分页显示输出
			foreach($data['company'] as $key=>$value){
				$res = $sclass->where('id='.$id)->find();
				$data['company'][$key]['objectname'] = $res['title']; 
			}
			$this->assign('datas',$data);
			$this->assign('page',$show);// 赋值分页输出

			R('Bases/header');
			$this->display();
		}

		function apply(){

			$company = M('company');
			$sclass = M('sclass'); 
			$ids = $sclass->where(array('pid'=>3))->field('id,title')->select();
			foreach($ids as $v){
				$id .= $v['id'].',';
			}

			$id = rtrim($id,',');
			
			import('ORG.Util.Page');// 导入分页类
			$count	= $company->where(array('pid'=>array('in',"$id")))->count();// 查询满足要求的总记录数
			$Page	= new Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
			
			$data['company'] = $company->where(array('pid'=>array('in',"$id")))->order('level desc,id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
			
			$num = $count/6;

//			$Page->setConfig('theme','<li><a href="__URL__/index/id/'.$id.'/p/1"><<</a></li> %linkPage% <li><a href="__URL__/index/id/'.$id.'/p/'.$num.'">>></a></li>');
			$Page->setConfig('prev',"<<");
			$Page->setConfig('next','>>');
			$Page->setConfig('theme','<li>%upPage%</li> %linkPage% <li>%downPage%</li>');
			$show	= $Page->show();// 分页显示输出
			foreach($data['company'] as $key=>$value){
				$res = $sclass->where('id='.$value['pid'])->order('level desc') ->find();
				$data['company'][$key]['objectname'] = $res['title']; 
			}
			$this->assign('datas',$data);
			$this->assign('page',$show);// 赋值分页输出
			
			//dump($data);
			R('Bases/header');
			$this->display('Design/index');
		}

		function video(){

			$company = M('company');
			$sclass = M('sclass'); 
			$ids = $sclass->where(array('pid'=>4))->field('id')->select();
			foreach($ids as $v){
				$id .= $v['id'].',';
			}

			$id = rtrim($id,',');
			
			import('ORG.Util.Page');// 导入分页类
			$count	= $company->where(array('pid'=>array('in',"$id")))->count();// 查询满足要求的总记录数
			$Page	= new Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
			
			$data['company'] = $company->where(array('pid'=>array('in',"$id")))->limit($Page->firstRow.','.$Page->listRows)->select();
			
			$num = $count/6;

//			$Page->setConfig('theme','<li><a href="__URL__/index/id/'.$id.'/p/1"><<</a></li> %linkPage% <li><a href="__URL__/index/id/'.$id.'/p/'.$num.'">>></a></li>');
			$Page->setConfig('prev',"<<");
			$Page->setConfig('next','>>');
			$Page->setConfig('theme','<li>%upPage%</li> %linkPage% <li>%downPage%</li>');
			$show	= $Page->show();// 分页显示输出
			foreach($data['company'] as $key=>$value){
				$res = $sclass->where('id='.$value['pid'])->find();
				$data['company'][$key]['objectname'] = $res['title']; 
			}
			$this->assign('datas',$data);
			$this->assign('page',$show);// 赋值分页输出
			
			R('Bases/header');
			$this->display('Design/index');
		}

		function media(){

			$company = M('company');
			$sclass = M('sclass'); 
			$ids = $sclass->where(array('pid'=>5))->field('id')->select();
			foreach($ids as $v){
				$id .= $v['id'].',';
			}

			$id = rtrim($id,',');
			
			import('ORG.Util.Page');// 导入分页类
			$count	= $company->where(array('pid'=>array('in',"$id")))->count();// 查询满足要求的总记录数
			$Page	= new Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
			
			$data['company'] = $company->where(array('pid'=>array('in',"$id")))->limit($Page->firstRow.','.$Page->listRows)->select();
			
			$num = $count/6;

//			$Page->setConfig('theme','<li><a href="__URL__/index/id/'.$id.'/p/1"><<</a></li> %linkPage% <li><a href="__URL__/index/id/'.$id.'/p/'.$num.'">>></a></li>');
			$Page->setConfig('prev',"<<");
			$Page->setConfig('next','>>');
			$Page->setConfig('theme','<li>%upPage%</li> %linkPage% <li>%downPage%</li>');
			$show	= $Page->show();// 分页显示输出
			foreach($data['company'] as $key=>$value){
				$res = $sclass->where('id='.$value['pid'])->find();
				$data['company'][$key]['objectname'] = $res['title']; 
			}
//			echo "<pre>";
//			print_r($data);
			$this->assign('datas',$data);
			$this->assign('page',$show);// 赋值分页输出

			R('Bases/header');
			$this->display('Design/index');
		}

		function multiple(){

			$company = M('company');
			$sclass = M('sclass'); 
			$ids = $sclass->where(array('pid'=>6))->field('id')->select();
			foreach($ids as $v){
				$id .= $v['id'].',';
			}

			$id = rtrim($id,',');
			
			import('ORG.Util.Page');// 导入分页类
			$count	= $company->where(array('pid'=>array('in',"$id")))->count();// 查询满足要求的总记录数
			$Page	= new Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
			
			$data['company'] = $company->where(array('pid'=>array('in',"$id")))->limit($Page->firstRow.','.$Page->listRows)->select();
			
			$num = $count/6;

//			$Page->setConfig('theme','<li><a href="__URL__/index/id/'.$id.'/p/1"><<</a></li> %linkPage% <li><a href="__URL__/index/id/'.$id.'/p/'.$num.'">>></a></li>');
			$Page->setConfig('prev',"<<");
			$Page->setConfig('next','>>');
			$Page->setConfig('theme','<li>%upPage%</li> %linkPage% <li>%downPage%</li>');
			$show	= $Page->show();// 分页显示输出
			foreach($data['company'] as $key=>$value){
				$res = $sclass->where('id='.$value['pid'])->find();
				$data['company'][$key]['objectname'] = $res['title']; 
			}
			$this->assign('datas',$data);
			$this->assign('page',$show);// 赋值分页输出

			R('Bases/header');
			$this->display('Design/index');
		}
	}
 ?>