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
<link href="__PUBLIC__/css/style1.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/css/menu.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="__PUBLIC__/js/jquery-banner.min.js"></script>
<!--banner-->
<link href="__PUBLIC__/css/banner.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="__PUBLIC__/js/banner.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/modernizr.custom.28468.js"></script>
<noscript><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/nojs.css" /></noscript>
<!--qq-->
<script type="text/javascript" src="__PUBLIC__/js/fn.js"></script>

<div id="content">
	<!-- 顶部右侧快捷操作按钮 开始 -->
		<div id="content-header">
			<h1>首页案例管理</h1>
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
			<a href="__URL__/show" title="返回首页案例管理" class="tip-bottom"> 首页案例管理</a>
			<a href="#" class="current"> 首页案例列表</a>
		</div>
		<!-- 顶部面包屑导航 结束 -->
		<!-- 主体区域 -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<!-- 组件盒子 开始 -->
					<div class="widget-box">
						<!-- 组件标题区域 -->
						<div class="widget-title"><h5>首页案例列表</h5>
						</div>
    <div class="wrap">

	<div id="main">
		<div id="red">
			<ul>
				<li class="r1"><a href="__URL__/updashow/id/<?php echo ($data["0"]["id"]); ?>/im/2"><?php echo ($data["0"]["title"]); ?></a></li>
				<li class="r2"><a href="__URL__/updashow/id/<?php echo ($data["1"]["id"]); ?>/im/2"><?php echo ($data["1"]["title"]); ?></a></li>
				<li class="r1"><a href="__URL__/updashow/id/<?php echo ($data["2"]["id"]); ?>/im/2"><?php echo ($data["2"]["title"]); ?></a></li>
				<li class="r3"><a href="__URL__/updashow/id/<?php echo ($data["3"]["id"]); ?>/im/2"><?php echo ($data["3"]["title"]); ?></a></li>
				<li class="r1"><a href="__URL__/updashow/id/<?php echo ($data["4"]["id"]); ?>/im/2"><?php echo ($data["4"]["title"]); ?></a></li>
				<li class="r2"><a href="__URL__/updashow/id/<?php echo ($data["5"]["id"]); ?>/im/2"><?php echo ($data["5"]["title"]); ?></a></li>
				<li class="r1"><a href="__URL__/updashow/id/<?php echo ($data["6"]["id"]); ?>/im/2"><?php echo ($data["6"]["title"]); ?></a></li>
				<li class="r2"><a href="__URL__/updashow/id/<?php echo ($data["7"]["id"]); ?>/im/2"><?php echo ($data["7"]["title"]); ?></a></li>
				<li class="r3"><a href="__URL__/updashow/id/<?php echo ($data["8"]["id"]); ?>/im/2"><?php echo ($data["8"]["title"]); ?></a></li>
				<li class="r2"><a href="__URL__/updashow/id/<?php echo ($data["9"]["id"]); ?>/im/2"><?php echo ($data["9"]["title"]); ?></a></li>
				<li class="r1"><a href="__URL__/updashow/id/<?php echo ($data["10"]["id"]); ?>/im/2"><?php echo ($data["10"]["title"]); ?></a></li>
				<li class="r2"><a href="__URL__/updashow/id/<?php echo ($data["11"]["id"]); ?>/im/2"><?php echo ($data["11"]["title"]); ?></a></li>
			</ul>
		</div>
        <!--右侧图片-->
        <!--阴影效果 放在下面class里面-->
        <div class="red_pic change_p">
         <ul>
           <li><a href="__URL__/updashow/id/<?php echo ($data["48"]["id"]); ?>/im/1"><div class="red001"><img class="r001" src="__PUBLIC__/images/<?php echo ($data["48"]["image"]); ?>"  alt="" /></div></a></li>
           <li><a href="__URL__/updashow/id/<?php echo ($data["49"]["id"]); ?>/im/1"><div class="red002"><img class="r002" src="__PUBLIC__/images/<?php echo ($data["49"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="__URL__/updashow/id/<?php echo ($data["50"]["id"]); ?>/im/1"><div class="red003"><img class="r003" src="__PUBLIC__/images/<?php echo ($data["50"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="__URL__/updashow/id/<?php echo ($data["51"]["id"]); ?>/im/1"><div class="red004"><img class="r003" src="__PUBLIC__/images/<?php echo ($data["51"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="__URL__/updashow/id/<?php echo ($data["52"]["id"]); ?>/im/1"><div class="red001"><img class="r001" src="__PUBLIC__/images/<?php echo ($data["52"]["image"]); ?>"  alt="" /></div></a></li>
           <li><a href="__URL__/updashow/id/<?php echo ($data["53"]["id"]); ?>/im/1"><div class="red002"><img class="r002" src="__PUBLIC__/images/<?php echo ($data["53"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="__URL__/updashow/id/<?php echo ($data["54"]["id"]); ?>/im/1"><div class="red003"><img class="r003" src="__PUBLIC__/images/<?php echo ($data["54"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="__URL__/updashow/id/<?php echo ($data["55"]["id"]); ?>/im/1"><div class="red004"><img class="r003" src="__PUBLIC__/images/<?php echo ($data["55"]["image"]); ?>" alt="" /></div></a></li>
        </ul>   
        </div>
         <!--右侧图片-->
		<div class="clear"></div>
         <!--右侧图片-->
         <!--阴影效果 放在下面class里面-->
        <div class="yellow_pic change_p" style="float:left">
         <ul>
           <li><a href="__URL__/updashow/id/<?php echo ($data["56"]["id"]); ?>/im/1"><div class="yell001"><img class="y001" src="__PUBLIC__/images/<?php echo ($data["56"]["image"]); ?>" alt="" /></div></a></li>
           <li style="width:95px"><a href="__URL__/updashow/id/<?php echo ($data["57"]["id"]); ?>/im/1"><div class="yell002"><img class="y002" src="__PUBLIC__/images/<?php echo ($data["57"]["image"]); ?>" alt="" /></div></a>
           <a href="__URL__/updashow/id/<?php echo ($data["58"]["id"]); ?>/im/1"><div class="yell002"><img  class="y002"  src="__PUBLIC__/images/<?php echo ($data["58"]["image"]); ?>" alt="" /></div> </a></li>
           <li><a href="__URL__/updashow/id/<?php echo ($data["59"]["id"]); ?>/im/1"><div class="yell003"><img  class="y003"  src="__PUBLIC__/images/<?php echo ($data["59"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="__URL__/updashow/id/<?php echo ($data["60"]["id"]); ?>/im/1"><div class="yell004"><img  class="y004"  src="__PUBLIC__/images/<?php echo ($data["60"]["image"]); ?>" alt="" /></div></a></li>
           
        </ul>   
        </div>
		<div id="yellow">
			<ul>
				<li class="y3"><a href="__URL__/updashow/id/<?php echo ($data["12"]["id"]); ?>/im/2"><?php echo ($data["12"]["title"]); ?></a></li>
				<li class="y2"><a href="__URL__/updashow/id/<?php echo ($data["13"]["id"]); ?>/im/2"><?php echo ($data["13"]["title"]); ?></a></li>
				<li class="y3"><a href="__URL__/updashow/id/<?php echo ($data["14"]["id"]); ?>/im/2"><?php echo ($data["14"]["title"]); ?></a></li>
				<li class="y2"><a href="__URL__/updashow/id/<?php echo ($data["15"]["id"]); ?>/im/2"><?php echo ($data["15"]["title"]); ?></a></li>
				<li class="y3"><a href="__URL__/updashow/id/<?php echo ($data["16"]["id"]); ?>/im/2"><?php echo ($data["16"]["title"]); ?></a></li>
				<li class="y1"><a href="__URL__/updashow/id/<?php echo ($data["17"]["id"]); ?>/im/2"><?php echo ($data["17"]["title"]); ?></a></li>
				<li class="y1"><a href="__URL__/updashow/id/<?php echo ($data["18"]["id"]); ?>/im/2"><?php echo ($data["18"]["title"]); ?></a></li>
				<li class="y2"><a href="__URL__/updashow/id/<?php echo ($data["19"]["id"]); ?>/im/2"><?php echo ($data["19"]["title"]); ?></a></li>
				<li class="y3"><a href="__URL__/updashow/id/<?php echo ($data["20"]["id"]); ?>/im/2"><?php echo ($data["20"]["title"]); ?></a></li>
				<li class="y2"><a href="__URL__/updashow/id/<?php echo ($data["21"]["id"]); ?>/im/2"><?php echo ($data["21"]["title"]); ?></a></li>
				<li class="y1"><a href="__URL__/updashow/id/<?php echo ($data["22"]["id"]); ?>/im/2"><?php echo ($data["22"]["title"]); ?></a></li>
				<li class="y2"><a href="__URL__/updashow/id/<?php echo ($data["23"]["id"]); ?>/im/2"><?php echo ($data["23"]["title"]); ?></a></li>
			</ul>
		</div>
		<div class="clear"></div>
      
		<div id="blue">
			<ul>
				<li class="b3"><a href="__URL__/updashow/id/<?php echo ($data["24"]["id"]); ?>/im/2"><?php echo ($data["24"]["title"]); ?></a></li>
				<li class="b2"><a href="__URL__/updashow/id/<?php echo ($data["25"]["id"]); ?>/im/2"><?php echo ($data["25"]["title"]); ?></a></li>
				<li class="b3"><a href="__URL__/updashow/id/<?php echo ($data["26"]["id"]); ?>/im/2"><?php echo ($data["26"]["title"]); ?></a></li>
				<li class="b2"><a href="__URL__/updashow/id/<?php echo ($data["27"]["id"]); ?>/im/2"><?php echo ($data["27"]["title"]); ?></a></li>
				<li class="b1"><a href="__URL__/updashow/id/<?php echo ($data["28"]["id"]); ?>/im/2"><?php echo ($data["28"]["title"]); ?></a></li>
				<li class="b2"><a href="__URL__/updashow/id/<?php echo ($data["29"]["id"]); ?>/im/2"><?php echo ($data["29"]["title"]); ?></a></li>
				<li class="b1"><a href="__URL__/updashow/id/<?php echo ($data["30"]["id"]); ?>/im/2"><?php echo ($data["30"]["title"]); ?></a></li>
				<li class="b2"><a href="__URL__/updashow/id/<?php echo ($data["31"]["id"]); ?>/im/2"><?php echo ($data["31"]["title"]); ?></a></li>
				<li class="b3"><a href="__URL__/updashow/id/<?php echo ($data["32"]["id"]); ?>/im/2"><?php echo ($data["32"]["title"]); ?></a></li>
				<li class="b3"><a href="__URL__/updashow/id/<?php echo ($data["33"]["id"]); ?>/im/2"><?php echo ($data["33"]["title"]); ?></a></li>
				<li class="b1"><a href="__URL__/updashow/id/<?php echo ($data["34"]["id"]); ?>/im/2"><?php echo ($data["34"]["title"]); ?></a></li>
				<li class="b2"><a href="__URL__/updashow/id/<?php echo ($data["35"]["id"]); ?>/im/2"><?php echo ($data["35"]["title"]); ?></a></li>
			</ul>
		</div>
          <!--右侧图片-->
        <div class="blue_pic change_p">
         <ul>
           <li><a href="__URL__/updashow/id/<?php echo ($data["61"]["id"]); ?>/im/1"><div class="blue001"><img class="b001" src="__PUBLIC__/images/<?php echo ($data["61"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="__URL__/updashow/id/<?php echo ($data["62"]["id"]); ?>/im/1"><div class="blue002"><img class="b002" src="__PUBLIC__/images/<?php echo ($data["62"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="__URL__/updashow/id/<?php echo ($data["63"]["id"]); ?>/im/1"><div class="blue003"><img class="b003" src="__PUBLIC__/images/<?php echo ($data["63"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="__URL__/updashow/id/<?php echo ($data["64"]["id"]); ?>/im/1"><div class="blue001"><img class="b001" src="__PUBLIC__/images/<?php echo ($data["64"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="__URL__/updashow/id/<?php echo ($data["65"]["id"]); ?>/im/1"><div class="blue002"><img class="b002" src="__PUBLIC__/images/<?php echo ($data["65"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="__URL__/updashow/id/<?php echo ($data["66"]["id"]); ?>/im/1"><div class="blue003"><img class="b003" src="__PUBLIC__/images/<?php echo ($data["66"]["image"]); ?>" alt="" /></div></a></li>
        </ul>   
        </div>
         <!--右侧图片-->
		<div class="clear"></div>
          <!--右侧图片-->
        <div class="green_pic change_p">
         <ul>
			<li><a href="__URL__/updashow/id/<?php echo ($data["67"]["id"]); ?>/im/1"><div class="green001"><img class="g001" src="__PUBLIC__/images/<?php echo ($data["67"]["image"]); ?>" alt="" /></div></a></li>
			<li style="width:330px;"><a href="__URL__/updashow/id/<?php echo ($data["68"]["id"]); ?>/im/1"><div class="green002"><img class="g002" src="__PUBLIC__/images/<?php echo ($data["68"]["image"]); ?>" alt="" /></div></a>
			<a href="__URL__/updashow/id/<?php echo ($data["69"]["id"]); ?>/im/1"><div class="green003"><img class="g003" src="__PUBLIC__/images/<?php echo ($data["69"]["image"]); ?>" alt="" /></div></a>
			<a href="__URL__/updashow/id/<?php echo ($data["70"]["id"]); ?>/im/1"> <div class="green003"><img class="g003" src="__PUBLIC__/images/<?php echo ($data["70"]["image"]); ?>" alt="" /></div></a>
			<a href="__URL__/updashow/id/<?php echo ($data["71"]["id"]); ?>/im/1"> <div class="green002"><img class="g002" src="__PUBLIC__/images/<?php echo ($data["71"]["image"]); ?>" alt="" /></div></a>
           </li>
           <li><a href="__URL__/updashow/id/<?php echo ($data["72"]["id"]); ?>/im/1"><div class="green004"><img class="g004" src="__PUBLIC__/images/<?php echo ($data["72"]["image"]); ?>" alt="" /></div></a></li>
        </ul>   
        </div>
         <!--右侧图片-->
		<div id="green">
			<ul>
				<li class="g1"><a href="__URL__/updashow/id/<?php echo ($data["36"]["id"]); ?>/im/2"><?php echo ($data["36"]["title"]); ?></a></li>
				<li class="g2"><a href="__URL__/updashow/id/<?php echo ($data["37"]["id"]); ?>/im/2"><?php echo ($data["37"]["title"]); ?></a></li>
				<li class="g3"><a href="__URL__/updashow/id/<?php echo ($data["38"]["id"]); ?>/im/2"><?php echo ($data["38"]["title"]); ?></a></li>
				<li class="g3"><a href="__URL__/updashow/id/<?php echo ($data["39"]["id"]); ?>/im/2"><?php echo ($data["39"]["title"]); ?></a></li>
				<li class="g1"><a href="__URL__/updashow/id/<?php echo ($data["40"]["id"]); ?>/im/2"><?php echo ($data["40"]["title"]); ?></a></li>
				<li class="g2"><a href="__URL__/updashow/id/<?php echo ($data["41"]["id"]); ?>/im/2"><?php echo ($data["41"]["title"]); ?></a></li>
				<li class="g2"><a href="__URL__/updashow/id/<?php echo ($data["42"]["id"]); ?>/im/2"><?php echo ($data["42"]["title"]); ?></a></li>
				<li class="g3"><a href="__URL__/updashow/id/<?php echo ($data["43"]["id"]); ?>/im/2"><?php echo ($data["43"]["title"]); ?></a></li>
				<li class="g1"><a href="__URL__/updashow/id/<?php echo ($data["44"]["id"]); ?>/im/2"><?php echo ($data["44"]["title"]); ?></a></li>
				<li class="g1"><a href="__URL__/updashow/id/<?php echo ($data["45"]["id"]); ?>/im/2"><?php echo ($data["45"]["title"]); ?></a></li>
				<li class="g2"><a href="__URL__/updashow/id/<?php echo ($data["46"]["id"]); ?>/im/2"><?php echo ($data["46"]["title"]); ?></a></li>
				<li class="g3"><a href="__URL__/updashow/id/<?php echo ($data["47"]["id"]); ?>/im/2"><?php echo ($data["47"]["title"]); ?></a></li>
			</ul>
		</div>
	</div>
</div>
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