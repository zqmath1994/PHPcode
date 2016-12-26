<?php if (!defined('THINK_PATH')) exit();?><!-- 包含顶部 -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Unicorn Admin</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="__PUBLIC__/admin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="__PUBLIC__/admin/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="__PUBLIC__/admin/css/uniform.css" />
        <link rel="stylesheet" href="__PUBLIC__/admin/css/select2.css" />  	
		<link rel="stylesheet" href="__PUBLIC__/admin/css/unicorn.main.css" />
		<link rel="stylesheet" href="__PUBLIC__/admin/css/unicorn.grey.css" class="skin-color" />
                        <script src="__PUBLIC__/admin/js/jquery.min.js"></script>
                        <script src="__PUBLIC__/admin/js/bootstrap.min.js"></script>
    </head>
	<body>
		<div id="header">
			<h1><a href="./dashboard.html">Unicorn Admin</a></h1>		
		</div>
		<!-- 顶部右侧 个人信息区域 开始 -->
		<div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav btn-group">
                <li class="btn btn-inverse">
                	<a title="" href="#"><i class="icon icon-user"></i> <span class="text">个人资料</span></a></li>
                <li class="btn btn-inverse dropdown" id="menu-messages">
                	<a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle">
                    	<i class="icon icon-envelope"></i> 
                        <span class="text">消息</span> 
                        <span class="label label-important">5</span> 
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="sAdd" title="" href="#">新消息</a></li>
                        <li><a class="sInbox" title="" href="#">收件箱</a></li>
                        <li><a class="sOutbox" title="" href="#">发件箱</a></li>
                        <li><a class="sTrash" title="" href="#">垃圾箱</a></li>
                    </ul>
                </li>
                <li class="btn btn-inverse">
                	<a title="" href="#"><i class="icon icon-cog"></i> <span class="text">偏好设置</span></a>
                </li>
                <li class="btn btn-inverse">
                    <a title="" href="__APP__"><i class="icon icon-eye-open"></i> <span class="text">查看店铺</span></a>
                </li>
                <li class="btn btn-inverse">
                	<a title="" href="__APP__/Login/logout"><i class="icon icon-share-alt"></i> <span class="text">退出</span></a>
                </li>
            </ul>
        </div>
        <!-- 顶部右侧 个人信息区域 结束 -->
        <!-- 侧边 菜单栏 开始 -->
        <div id="sidebar">
            <a href="#" class="visible-phone"><i class="icon icon-home"></i> 控制面板</a>
            <ul>
                <li class="submenu" id="home">
                    <a href="#"><i class="icon icon-home"></i> <span>网站信息</span></a>
                    <ul>
                        <li><a href="__APP__/Web/menu">导航管理</a></li>
                        <li><a href="__APP__/Web/bclass">分类管理</a></li>
                        <li><a href="__APP__/Web/sclass">子类管理</a></li>
                        <li><a href="__APP__/Web/company">公司信息</a></li>
                        <li><a href="__APP__/Web/casel">案例信息</a></li>
                        <li><a href="__APP__/Web/olay">推荐案例</a></li>
                        <li><a href="__APP__/Web/downlist">下载管理</a></li>
                    </ul>
                </li>
                <li id="config"><a href="__APP__/Config/listsConfig"><i class="icon icon-cog"></i> <span>网站设置</span></a></li>
                    <!-- 基本信息、自定义导航、系统公告 ... -->
                 <li class="submenu" id="user">
                    <a href="#"><i class="icon icon-user"></i> <span>基础信息</span></a>
                    <ul>
                        <li><a href="__APP__/Basis/guide">引导页信息</a></li>
                        <li><a href="__APP__/Basis/slide">首页幻灯片</a></li>
                        <li><a href="__APP__/Web/show">首页案例标题</a></li>
                        <li><a href="__APP__/Basis/cop">版权信息</a></li>
                        <li><a href="__APP__/Basis/listm">留言信息</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- 侧边 菜单栏 结束 -->

<div id="content">
	<!-- 顶部右侧快捷操作按钮 开始 -->
		<div id="content-header">
			<h1>下载管理</h1>
			<div class="btn-group">
				<a class="btn btn-large tip-bottom" title="订单管理"><i class="icon-file"></i></a>
				<a class="btn btn-large tip-bottom" title="用户管理"><i class="icon-user"></i></a>
				<a class="btn btn-large tip-bottom" title="评论管理"><i class="icon-comment"></i><span class="label label-important">5</span></a>
				<a class="btn btn-large tip-bottom" title="购物车管理"><i class="icon-shopping-cart"></i></a>
			</div>
		</div>
        <!-- 顶部右侧快捷操作按钮 结束 -->
        <!-- 顶部面包屑导航 开始 -->
		<div id="breadcrumb">
			<a href="__APP__" title="返回首页" class="tip-bottom"><i class="icon-home"></i> 首页</a>
			<a href="__URL__/downlist" title="返回下载管理" class="tip-bottom"> 下载管理</a>
			<a href="#" class="current"> 下载列表</a>
		</div>
		<!-- 顶部面包屑导航 结束 -->
		<!-- 主体区域 -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<!-- 组件盒子 开始 -->
					<div class="widget-box">
						<!-- 组件标题区域 -->
						<div class="widget-title"><h5>下载管理列表</h5><h5><a href="__URL__/adddown">增加</a></h5>
						</div>
						<!-- 组件内容区域 -->
						<div class="widget-content nopadding">
							<table class="table table-bordered data-table">
								<!-- 表头字段区域 -->
								<thead>
									<tr >
										<th>ID</th>
										<th style="font-size:11px">标题</th>
										<th>二级标题</th>
										<th>概述</th>
										<th>操作</th>
									</tr>
								</thead>
								<!-- 表格主体数据区域 -->
								<tbody>
								<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
										<td><?php echo ($v["id"]); ?></td>
										<td><?php echo ($v["title"]); ?></td>
										<td><?php echo ($v["lowertitle"]); ?></td>
										<td><?php echo ($v["outline"]); ?></td>
										<td class="taskOptions">
									    	<a href="__URL__/updadown/id/<?php echo ($v["id"]); ?>" class="tip-top" data-original-title="编辑"><i class="icon-pencil"></i></a>
									    	<a href="__URL__/deldown/id/<?php echo ($v["id"]); ?>" class="tip-top" data-original-title="删除"><i class="icon-remove"></i></a>
										</td>
									</tr><?php endforeach; endif; ?>
								</tbody>
							</table>  
						</div>
					</div>
					<!-- 组件盒子 结束 -->
				</div>
			</div>

<!-- 包含底部 -->
			
            <!-- 页面底部版权 -->
			<div class="row-fluid">
				<div id="footer" class="span12">
					Copyright &copy; 2014 <span class="label label-important">四重奏项目组</span> All Rights Reserved. 
				</div>
			</div>
		</div>
	</div>


	<!-- 加载相关JS文件 -->
    <script src="__PUBLIC__/admin/js/excanvas.min.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.ui.custom.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.uniform.js"></script>
    <script src="__PUBLIC__/admin/js/select2.min.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.dataTables.min.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.flot.min.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.flot.resize.min.js"></script>
    <script src="__PUBLIC__/admin/js/jquery.peity.min.js"></script>
    <script src="__PUBLIC__/admin/js/unicorn.js"></script>
    <script src="__PUBLIC__/admin/js/unicorn.tables.js"></script>
    <script src="__PUBLIC__/admin/js/unicorn.dashboard.js"></script>

    <script>
        // 侧边菜单栏，高亮当前模块 样式设置
    
        // 去除之前的样式
        $("li[class='active']").removeClass("active");
        // 高亮当前样式
        $("li[id='<?php echo (strtolower(MODULE_NAME)); ?>']").addClass("active");
    </script>

</body>
</html>