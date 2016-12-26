<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
<meta charset="utf-8"><title>Index</title>
<meta name="keywords" content="品牌设计,品牌策划,LOGO设计,标志设计,商标设计,画册设计,VI设计,包装设计,UI设计,商业空间设计,空间导视系统,音视频制作,广告宣传品设计,媒体营销,辽宁设计公司" />
<meta name="description" content="龙马视艺广告传媒有限责任公司成立于2008年，是一家从事视觉效果设计和大众媒体传播与实施的高科技品牌工作室。公司业务涵盖标志LOGO+VI，商业空间设计、会展，空间导视系统设计开发，WEB+APP  UI设计研发，产品包装设计，公关类广告设计应用，地产类三维数字展示，企业宣传片，专业音频制作，TVC制作， 企事业单位综合服务，媒体广告植入与发布。" />
<meta name="description" content="<?php echo ($data["config"]["description"]); ?>">
<meta name="keywords" content="<?php echo ($data["config"]["keywords"]); ?>">
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/css/menu.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="__PUBLIC__/js/jquery-banner.min.js"></script>
<!--banner-->
<link href="__PUBLIC__/css/banner.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="__PUBLIC__/js/banner.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/fn.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/modernizr.custom.28468.js"></script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/nojs.css" />
<!--qq-->
<script type="text/javascript" src="__PUBLIC__/js/fn.js"></script>
<!--回顶部-->
</head>
<body oncontextmenu="return true" ondragstart="return false" onselectstart="return false">
<div class="top-wrap"></div>
<div class="wrap mb20" style="min-height:900px;">
	<div id="header">
		<div id="logo"><a href="__APP__/Index/indexs"><img src="__PUBLIC__/images/<?php echo ($data["config"]["logo"]); ?>" alt="logo"></a></div>
		<div style="width:820px;float:left">
		<div class="navBar">
		<ul class="nav clearfix">
		<?php if(is_array($data["menu"])): foreach($data["menu"] as $key=>$v): if($v["id"] == 5): ?><li class="m">
			<h3><a target="_blank" data-toggle="modal" onclick="window.location.href='__APP__/Down/index/'"><?php echo ($v["title"]); ?></a></h3>
			</li>
			<?php else: ?>
			<li class="m" onClick="dis_show()">
			<h3><a target="_blank" data-toggle="modal" href="#<?php echo ($v["path"]); ?>"><?php echo ($v["title"]); ?></a></h3>
			</li><?php endif; endforeach; endif; ?>
			<li class="m" onClick="dis_show()">
			<h3><a target="_blank" data-toggle="modal" href="#lianxi">联系我们</a></h3>
			</li>
			<li class="m last_m"  >
			<h3><a target="_blank" onClick="dis_show()" data-toggle="modal" href="#liuyan">留 言</a></h3>
			</li>
			<!--<li class="block" style="left:261px;"></li>-->
		</ul>
		</div>
		</div>
	</div>

    <!--banner-->
		<div class="b_cont" onmouseover="b_cont()" onmouseout="b_cont2()">

	<div id="scroll_jdt">
	<?php if(is_array($data["slide"])): foreach($data["slide"] as $key=>$v): ?><div class="ct_p_05">
			<a href="<?php echo ($v["url"]); ?>"><img width="1000" height="300" alt="" src="__PUBLIC__/images/<?php echo ($v["image"]); ?>">
            <span class="ct_txt">
            
           <div class="intr_m"><p><?php echo ($v["title"]); ?></p></div>
           <div class="view_m">
               <div class="view_bt">VIEW MORE</div>
           </div>
           </span></a>
		</div><?php endforeach; endif; ?>
	</div>
	
	<div class="scrDotList_wrap">
		<span class="scrDotList" id="slide_dot">
			<span></span>
		</span>
	</div>

	<a href="javascript:void(0)" id="scroll_left" class="scrArrAbsLeft"></a>
	<a href="javascript:void(0)" id="scroll_right" class="scrArrAbsRight"></a>

</div>	
<script type="text/javascript">
(function(){
	var focusScroll_01 = new ScrollPic();
	focusScroll_01.scrollContId   = "scroll_jdt"; //内容容器ID
	focusScroll_01.dotListId = "slide_dot";
	focusScroll_01.dotClassName = "";
	focusScroll_01.dotOnClassName = "on";
	focusScroll_01.listType       = "";//列表类型(number:数字，其它为空)
	focusScroll_01.listEvent      = "onmouseover"; //切换事件
	focusScroll_01.frameWidth     = 1000;//显示框宽度
	focusScroll_01.pageWidth      =1000; //翻页宽度
	focusScroll_01.upright        = false; //垂直滚动
	focusScroll_01.speed          = 10; //移动速度(单位毫秒，越小越快)
	focusScroll_01.space          = 60; //每次移动像素(单位px，越大越快)
	focusScroll_01.autoPlay       = true; //自动播放
	focusScroll_01.autoPlayTime   = 5; //自动播放间隔时间(秒)
	focusScroll_01.circularly     = true;
	focusScroll_01.initialize(); //初始化
	document.getElementById('scroll_left').onmousedown = function(){
		focusScroll_01.pre();
		return false;
	}
	document.getElementById('scroll_right').onmousedown = function(){
		focusScroll_01.next();
		return false;
	}
})()
   function b_cont(){
	   document.getElementById('scroll_left').style.display = "block";
	   document.getElementById('scroll_right').style.display = "block";
	   }
   function b_cont2(){
	   document.getElementById('scroll_left').style.display = "none";
	   document.getElementById('scroll_right').style.display = "none";
	   }
</script>
    <!--banner-->

    <div class="wrap">

	<div id="main">
		<div id="red">
			<ul>
				<li class="r1"><a href="http://<?php echo ($datas["0"]["url"]); ?>"><?php echo ($datas["0"]["title"]); ?></a></li>
				<li class="r2"><a href="http://<?php echo ($datas["1"]["url"]); ?>"><?php echo ($datas["1"]["title"]); ?></a></li>
				<li class="r1"><a href="http://<?php echo ($datas["2"]["url"]); ?>"><?php echo ($datas["2"]["title"]); ?></a></li>
				<li class="r3"><a href="http://<?php echo ($datas["3"]["url"]); ?>"><?php echo ($datas["3"]["title"]); ?></a></li>
				<li class="r1"><a href="http://<?php echo ($datas["4"]["url"]); ?>"><?php echo ($datas["4"]["title"]); ?></a></li>
				<li class="r2"><a href="http://<?php echo ($datas["5"]["url"]); ?>"><?php echo ($datas["5"]["title"]); ?></a></li>
				<li class="r1"><a href="http://<?php echo ($datas["6"]["url"]); ?>"><?php echo ($datas["6"]["title"]); ?></a></li>
				<li class="r2"><a href="http://<?php echo ($datas["7"]["url"]); ?>"><?php echo ($datas["7"]["title"]); ?></a></li>
				<li class="r3"><a href="http://<?php echo ($datas["8"]["url"]); ?>"><?php echo ($datas["8"]["title"]); ?></a></li>
				<li class="r2"><a href="http://<?php echo ($datas["9"]["url"]); ?>"><?php echo ($datas["9"]["title"]); ?></a></li>
				<li class="r1"><a href="http://<?php echo ($datas["10"]["url"]); ?>"><?php echo ($datas["10"]["title"]); ?></a></li>
				<li class="r2"><a href="http://<?php echo ($datas["11"]["url"]); ?>"><?php echo ($datas["11"]["title"]); ?></a></li>
			</ul>
		</div>
        <!--右侧图片-->
        <!--阴影效果 放在下面class里面-->
        <div class="red_pic change_p">
         <ul>
           <li><a href="http://<?php echo ($datas["48"]["url"]); ?>"><div class="red001"><img class="r001" src="__PUBLIC__/images/<?php echo ($datas["48"]["image"]); ?>"  alt="" /></div></a></li>
           <li><a href="http://<?php echo ($datas["49"]["url"]); ?>"><div class="red002"><img class="r002" src="__PUBLIC__/images/<?php echo ($datas["49"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="http://<?php echo ($datas["50"]["url"]); ?>"><div class="red003"><img class="r003" src="__PUBLIC__/images/<?php echo ($datas["50"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="http://<?php echo ($datas["51"]["url"]); ?>"><div class="red004"><img class="r003" src="__PUBLIC__/images/<?php echo ($datas["51"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="http://<?php echo ($datas["52"]["url"]); ?>"><div class="red001"><img class="r001" src="__PUBLIC__/images/<?php echo ($datas["52"]["image"]); ?>"  alt="" /></div></a></li>
           <li><a href="http://<?php echo ($datas["53"]["url"]); ?>"><div class="red002"><img class="r002" src="__PUBLIC__/images/<?php echo ($datas["53"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="http://<?php echo ($datas["54"]["url"]); ?>"><div class="red003"><img class="r003" src="__PUBLIC__/images/<?php echo ($datas["54"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="http://<?php echo ($datas["55"]["url"]); ?>"><div class="red004"><img class="r003" src="__PUBLIC__/images/<?php echo ($datas["55"]["image"]); ?>" alt="" /></div></a></li>
        </ul>   
        </div>
         <!--右侧图片-->
		<div class="clear"></div>
         <!--右侧图片-->
         <!--阴影效果 放在下面class里面-->
        <div class="yellow_pic change_p" style="float:left">
         <ul>
           <li><a href="http://<?php echo ($datas["56"]["url"]); ?>"><div class="yell001"><img class="y001" src="__PUBLIC__/images/<?php echo ($datas["56"]["image"]); ?>" alt="" /></div></a></li>
           <li style="width:95px"><a href="http://<?php echo ($datas["57"]["url"]); ?>"><div class="yell002"><img class="y002" src="__PUBLIC__/images/<?php echo ($datas["57"]["image"]); ?>" alt="" /></div></a>
           <a href="http://<?php echo ($datas["58"]["url"]); ?>"><div class="yell002"><img  class="y002"  src="__PUBLIC__/images/<?php echo ($datas["58"]["image"]); ?>" alt="" /></div> </a></li>
           <li><a href="http://<?php echo ($datas["59"]["url"]); ?>"><div class="yell003"><img  class="y003"  src="__PUBLIC__/images/<?php echo ($datas["59"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="http://<?php echo ($datas["60"]["url"]); ?>"><div class="yell004"><img  class="y004"  src="__PUBLIC__/images/<?php echo ($datas["60"]["image"]); ?>" alt="" /></div></a></li>
           
        </ul>   
        </div>
		<div id="yellow">
			<ul>
				<li class="y3"><a href="http://<?php echo ($datas["12"]["url"]); ?>"><?php echo ($datas["12"]["title"]); ?></a></li>
				<li class="y2"><a href="http://<?php echo ($datas["13"]["url"]); ?>"><?php echo ($datas["13"]["title"]); ?></a></li>
				<li class="y3"><a href="http://<?php echo ($datas["14"]["url"]); ?>"><?php echo ($datas["14"]["title"]); ?></a></li>
				<li class="y2"><a href="http://<?php echo ($datas["15"]["url"]); ?>"><?php echo ($datas["15"]["title"]); ?></a></li>
				<li class="y3"><a href="http://<?php echo ($datas["16"]["url"]); ?>"><?php echo ($datas["16"]["title"]); ?></a></li>
				<li class="y1"><a href="http://<?php echo ($datas["17"]["url"]); ?>"><?php echo ($datas["17"]["title"]); ?></a></li>
				<li class="y1"><a href="http://<?php echo ($datas["18"]["url"]); ?>"><?php echo ($datas["18"]["title"]); ?></a></li>
				<li class="y2"><a href="http://<?php echo ($datas["19"]["url"]); ?>"><?php echo ($datas["19"]["title"]); ?></a></li>
				<li class="y3"><a href="http://<?php echo ($datas["20"]["url"]); ?>"><?php echo ($datas["20"]["title"]); ?></a></li>
				<li class="y2"><a href="http://<?php echo ($datas["21"]["url"]); ?>"><?php echo ($datas["21"]["title"]); ?></a></li>
				<li class="y1"><a href="http://<?php echo ($datas["22"]["url"]); ?>"><?php echo ($datas["22"]["title"]); ?></a></li>
				<li class="y2"><a href="http://<?php echo ($datas["23"]["url"]); ?>"><?php echo ($datas["23"]["title"]); ?></a></li>
			</ul>
		</div>
		<div class="clear"></div>
      
		<div id="blue">
			<ul>
				<li class="b3"><a href="http://<?php echo ($datas["24"]["url"]); ?>"><?php echo ($datas["24"]["title"]); ?></a></li>
				<li class="b2"><a href="http://<?php echo ($datas["25"]["url"]); ?>"><?php echo ($datas["25"]["title"]); ?></a></li>
				<li class="b3"><a href="http://<?php echo ($datas["26"]["url"]); ?>"><?php echo ($datas["26"]["title"]); ?></a></li>
				<li class="b2"><a href="http://<?php echo ($datas["27"]["url"]); ?>"><?php echo ($datas["27"]["title"]); ?></a></li>
				<li class="b1"><a href="http://<?php echo ($datas["28"]["url"]); ?>"><?php echo ($datas["28"]["title"]); ?></a></li>
				<li class="b2"><a href="http://<?php echo ($datas["29"]["url"]); ?>"><?php echo ($datas["29"]["title"]); ?></a></li>
				<li class="b1"><a href="http://<?php echo ($datas["30"]["url"]); ?>"><?php echo ($datas["30"]["title"]); ?></a></li>
				<li class="b2"><a href="http://<?php echo ($datas["31"]["url"]); ?>"><?php echo ($datas["31"]["title"]); ?></a></li>
				<li class="b3"><a href="http://<?php echo ($datas["32"]["url"]); ?>"><?php echo ($datas["32"]["title"]); ?></a></li>
				<li class="b3"><a href="http://<?php echo ($datas["33"]["url"]); ?>"><?php echo ($datas["33"]["title"]); ?></a></li>
				<li class="b1"><a href="http://<?php echo ($datas["34"]["url"]); ?>"><?php echo ($datas["34"]["title"]); ?></a></li>
				<li class="b2"><a href="http://<?php echo ($datas["35"]["url"]); ?>"><?php echo ($datas["35"]["title"]); ?></a></li>
			</ul>
		</div>
          <!--右侧图片-->
        <div class="blue_pic change_p">
         <ul>
           <li><a href="http://<?php echo ($datas["61"]["url"]); ?>"><div class="blue001"><img class="b001" src="__PUBLIC__/images/<?php echo ($datas["61"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="http://<?php echo ($datas["62"]["url"]); ?>"><div class="blue002"><img class="b002" src="__PUBLIC__/images/<?php echo ($datas["62"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="http://<?php echo ($datas["63"]["url"]); ?>"><div class="blue003"><img class="b003" src="__PUBLIC__/images/<?php echo ($datas["63"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="http://<?php echo ($datas["64"]["url"]); ?>"><div class="blue001"><img class="b001" src="__PUBLIC__/images/<?php echo ($datas["64"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="http://<?php echo ($datas["65"]["url"]); ?>"><div class="blue002"><img class="b002" src="__PUBLIC__/images/<?php echo ($datas["65"]["image"]); ?>" alt="" /></div></a></li>
           <li><a href="http://<?php echo ($datas["66"]["url"]); ?>"><div class="blue003"><img class="b003" src="__PUBLIC__/images/<?php echo ($datas["66"]["image"]); ?>" alt="" /></div></a></li>
        </ul>   
        </div>
         <!--右侧图片-->
		<div class="clear"></div>
          <!--右侧图片-->
        <div class="green_pic change_p">
         <ul>
			<li><a href="http://<?php echo ($datas["67"]["url"]); ?>"><div class="green001"><img class="g001" src="__PUBLIC__/images/<?php echo ($datas["67"]["image"]); ?>" alt="" /></div></a></li>
			<li style="width:330px;"><a href="http://<?php echo ($datas["68"]["url"]); ?>"><div class="green002"><img class="g002" src="__PUBLIC__/images/<?php echo ($datas["68"]["image"]); ?>" alt="" /></div></a>
			<a href="http://<?php echo ($datas["69"]["url"]); ?>"><div class="green003"><img class="g003" src="__PUBLIC__/images/<?php echo ($datas["69"]["image"]); ?>" alt="" /></div></a>
			<a href="http://<?php echo ($datas["70"]["url"]); ?>"> <div class="green003"><img class="g003" src="__PUBLIC__/images/<?php echo ($datas["70"]["image"]); ?>" alt="" /></div></a>
			<a href="http://<?php echo ($datas["71"]["url"]); ?>"> <div class="green002"><img class="g002" src="__PUBLIC__/images/<?php echo ($datas["71"]["image"]); ?>" alt="" /></div></a>
           </li>
           <li><a href="http://<?php echo ($datas["72"]["url"]); ?>"><div class="green004"><img class="g004" src="__PUBLIC__/images/<?php echo ($datas["72"]["image"]); ?>" alt="" /></div></a></li>
        </ul>   
        </div>
         <!--右侧图片-->
		<div id="green">
			<ul>
				<li class="g1"><a href="http://<?php echo ($datas["36"]["url"]); ?>"><?php echo ($datas["36"]["title"]); ?></a></li>
				<li class="g2"><a href="http://<?php echo ($datas["37"]["url"]); ?>"><?php echo ($datas["37"]["title"]); ?></a></li>
				<li class="g3"><a href="http://<?php echo ($datas["38"]["url"]); ?>"><?php echo ($datas["38"]["title"]); ?></a></li>
				<li class="g3"><a href="http://<?php echo ($datas["39"]["url"]); ?>"><?php echo ($datas["39"]["title"]); ?></a></li>
				<li class="g1"><a href="http://<?php echo ($datas["40"]["url"]); ?>"><?php echo ($datas["40"]["title"]); ?></a></li>
				<li class="g2"><a href="http://<?php echo ($datas["41"]["url"]); ?>"><?php echo ($datas["41"]["title"]); ?></a></li>
				<li class="g2"><a href="http://<?php echo ($datas["42"]["url"]); ?>"><?php echo ($datas["42"]["title"]); ?></a></li>
				<li class="g3"><a href="http://<?php echo ($datas["43"]["url"]); ?>"><?php echo ($datas["43"]["title"]); ?></a></li>
				<li class="g1"><a href="http://<?php echo ($datas["44"]["url"]); ?>"><?php echo ($datas["44"]["title"]); ?></a></li>
				<li class="g1"><a href="http://<?php echo ($datas["45"]["url"]); ?>"><?php echo ($datas["45"]["title"]); ?></a></li>
				<li class="g2"><a href="http://<?php echo ($datas["46"]["url"]); ?>"><?php echo ($datas["46"]["title"]); ?></a></li>
				<li class="g3"><a href="http://<?php echo ($datas["47"]["url"]); ?>"><?php echo ($datas["47"]["title"]); ?></a></li>
			</ul>
		</div>
	</div>
</div>
</div>

<div class="clear"></div>

<div id="footer" style="clear:both">
	<div class="wrap fooer-wrap">
	<p><?php echo ($data["config"]["copyright"]); ?>
	</p>
		<div id="renzheng">
			<img style="height:35px;" src="__PUBLIC__/images/b1.png" alt="">
			<img style="height:35px;" src="__PUBLIC__/images/b2.png" alt="">
			<img style="height:35px;" src="__PUBLIC__/images/b3.png" alt="">
		</div>
	</div>
</div>
<!--代表top-wrap的结束-->

<!--aside-->
<!-- asid start -->
<script type="text/javascript">
 function dis_show(){<!-- alert('1111');-->

	 document.getElementById('screen').style.display="block";
	 }
	 function dis_show1(){
	 document.getElementById('screen').style.display="none";
	 
	 }
 function dis_show2(){
document.getElementById('close1').style.background="url(__PUBLIC__/images/close_1.png)";
document.getElementById('close2').style.background="url(__PUBLIC__/images/close_1.png)";
document.getElementById('close3').style.background="url(__PUBLIC__/images/close_1.png)";
document.getElementById('close4').style.background="url(__PUBLIC__/images/close_1.png)";
document.getElementById('close5').style.background="url(__PUBLIC__/images/close_1.png)";
document.getElementById('close6').style.background="url(__PUBLIC__/images/close_1.png)";
document.getElementById('close7').style.background="url(__PUBLIC__/images/close_1.png)";
 }
  function dis_show3(){
document.getElementById('close1').style.background="url(__PUBLIC__/images/close_h.png)";
document.getElementById('close2').style.background="url(__PUBLIC__/images/close_h.png)";
document.getElementById('close3').style.background="url(__PUBLIC__/images/close_h.png)";
document.getElementById('close4').style.background="url(__PUBLIC__/images/close_h.png)";
document.getElementById('close5').style.background="url(__PUBLIC__/images/close_h.png)";
document.getElementById('close6').style.background="url(__PUBLIC__/images/close_h.png)";
document.getElementById('close7').style.background="url(__PUBLIC__/images/close_h.png)";
 }
$(function(){
	if($(document).scrollTop() == 0) { 
		$('#adid_icon_top').css('display', 'none');
	}
$(window).scroll(function(){  //只要窗口滚动,就触发下面代码 

var scrollt = document.documentElement.scrollTop + document.body.scrollTop; //获取滚动后的高度 

if( scrollt >10 ){  //判断滚动后高度超过200px,就显示  

$("#adid_icon_top").fadeIn(400); //淡出     

}else{      

$("#adid_icon_top").stop().fadeOut(400); //如果返回或者没有超过,就淡入.必须加上stop()停止之前动画,否则会出现闪动   

}

});

$("#adid_icon_top").click(function(){ //当点击标签的时候,使用animate在200毫秒的时间内,滚到顶部

$("html,body").animate({scrollTop:"0px"},400);

});

});
	  function show_m(){
		  document.getElementById('mess_m').style.display="block";
		  if( document.getElementById('mess_m').style.display="none"){
	 document.getElementById('mess_m').style.display="block";}
	 else{document.getElementById('mess_m').style.display="none";}
	 }
	 	  function show_m2(){
		  document.getElementById('mess_m').style.display="none";
		  
	 }
	   function show_m2(){
	 document.getElementById('mess_m').style.display="none";
	 }
function show_w2(){
	 document.getElementById('mess_m').style.display="none";
	 }	
 function show_s(){
	 document.getElementById('sina_s').style.display="block";
	 }
function show_s2(){
	 document.getElementById('sina_s').style.display="none";
	 }
	  function show_w(){
	 document.getElementById('weixin_w').style.display="block";
	 }
function show_w2(){
	 document.getElementById('weixin_w').style.display="none";
	 }	 
</script>

<!--<div id="mess_m"></div>-->
<!--QQ-->
<script type="text/javascript" language="javascript">
function qqkf(){
	   document.getElementById("mess").style.zIndex=1000;
		document.getElementById("mess").style.backgroundImage="url(__PUBLIC__/images/kefu_p.png)";}
		
function qqkf1(){
	     document.getElementById("mess").style.zIndex=1000;
		document.getElementById("mess").style.backgroundImage="url(__PUBLIC__/images/kefu.png)";}
function bdshare(){
		document.getElementByClass("bdshare-slide-button").style.backgroundImage="url(__PUBLIC__/images/share_p.png)";}
          
function bdshare(){
		document.getElementByClass("bdshare-slide-button").style.backgroundImage="url(__PUBLIC__/images/share.png)";}
         	         
	 </script>
<div id="box">
	<span class="mess" id="mess" onMouseOver="qqkf()"  onMouseOut="qqkf1()"></span>
	<ul class='qq'>
		<li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=915495588&site=qq&menu=yes"><img src="__PUBLIC__/images/qq1.jpg" /></a></li>
		<li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=925495588&site=qq&menu=yes"><img src="__PUBLIC__/images/qq2.jpg" /></a></li>
		<li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=935495588&site=qq&menu=yes"><img src="__PUBLIC__/images/qq3.jpg" /></a></li>
  </ul>
	
</div>
<!--回顶部-->
<div class="asid_share" id="asid_share">
<div class="aside_position">
<div class="asid_share_box relative">
		<a href="javascript:scroll(0,0)"  id="adid_icon_top" ></a></div>
	
    <!--sina-->
    <div class="asid_share_box1 relative">
		<a href="javascript:void(0)"  class="adid_icon_s" onClick="show_s()" onMouseOut="show_s2()" ></a>
		
		<div class="asid_sha_layer" id="sina_s" >
			<p class="sweep_img"><img src="__PUBLIC__/images/sina_p.png" width="220"></p>
			
		</div>
	</div>
    <!--sina-->
	<div class="asid_share_box2 relative">
		<a href="javascript:void(0)"  class="adid_icon_w" onClick="show_w()" onMouseOut="show_w2()"></a>
		<div class="asid_sha_layer" id="weixin_w" >
			<p class="sweep_img"><img src="__PUBLIC__/images/weixin_p.png" width="220"></p>
			
		</div>
	</div>

	
    <div class="asid_share_box3 relative">
		<a href="__APP__/Index/indexs"  class="adid_icon_f"></a>
		
	</div>
	
</div>
</div>
<!--遮罩层-->
<div class="screen" id="screen"></div>

<?php $n = 1;?>
<?php if(is_array($data["menu"])): foreach($data["menu"] as $key=>$vo): $numb = count($vo['bclass'])?>
<?php if($numb < 3): ?><div class="modal fixed_0" id="<?php echo ($vo["path"]); ?>" >
	<a class="close"  id="close<?php echo ($n); ?>"   onClick="dis_show1()" onMouseDown="dis_show2()" onMouseOut="dis_show3()" data-dismiss="modal">&nbsp;</a>
	<a class="logo_fixed" href="__APP__/Index/indexs"><img src="__PUBLIC__/images/fixedlogo.png" style="height:50px;" /></a>
	<div class="name_gs"><?php echo ($vo["title"]); ?></div>
	<?php $i = 1;?>
	<?php if(is_array($vo["bclass"])): foreach($vo["bclass"] as $key=>$v): $num = count($v['sclass']);?>
		<span class="tit<?php echo ($i); ?>" <?php if($num == 0): ?>style="margin-top:65px;"<?php endif; ?> <?php if(($vo['id'] == 2) OR ($vo['id'] == 3)): ?>style="text-align:left;"<?php endif; ?>>
			<a href="<?php if($v['id'] == 1): ?>__APP__/Company/index/id/1<?php endif; ?>
			<?php if($v['id'] == 2): ?>__APP__/Company/index/id/2<?php endif; ?>
			<?php if(($v['id'] == 11)): ?>__APP__/Company/index/id/3<?php endif; ?>
			<?php if(($v['id'] == 12)): ?>__APP__/Company/index/id/4<?php endif; ?>
			<?php if($v['id'] == 3): ?>__APP__/Design/apply<?php endif; ?>
			<?php if($v['id'] == 4): ?>__APP__/Design/video<?php endif; ?>
			<?php if($v['id'] == 5): ?>__APP__/Design/media<?php endif; ?>
			<?php if($v['id'] == 6): ?>__APP__/Design/multiple<?php endif; ?>" 
			<?php if($i == 2): ?>style="margin-left:-20px;"<?php endif; ?>>
			<?php echo ($v["title"]); ?></a>
		</span><?php $i++; endforeach; endif; ?>
	<div class="fixed_con2">
	<ul>
	<?php if(is_array($vo["bclass"])): foreach($vo["bclass"] as $key=>$va): if(empty($$va['image'])): ?><!--			<?php echo ($va['id']); echo ($va['image']); ?><br>-->
 			<li class="fixed_con22">
 				<img src="__PUBLIC__/images/<?php echo ($va["image"]); ?>" />
 			</li><?php endif; ?>
		<li class="fixed_con23">
		<?php if(is_array($va["sclass"])): $i = 0; $__LIST__ = $va["sclass"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vas): $mod = ($i % 2 );++$i; if(($mod) == "0"): ?><dt><a href="__APP__/Design/index/id/<?php echo ($vas['id']); ?>"><?php echo ($vas["title"]); ?></a>/
			  	<?php else: ?>
			  		<a href="__APP__/Design/index/id/<?php echo ($vas['id']); ?>"><?php echo ($vas["title"]); ?></a></dt><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</li><?php endforeach; endif; ?>
    </ul>
    </div>
</div>
<?php $n++;?>
<?php else: ?>
	<div class="modal fixed_0" id="<?php echo ($vo["path"]); ?>">
		<a class="close" id="close4"   onClick="dis_show1()" onMouseDown="dis_show2()" onMouseOut="dis_show3()" data-dismiss="modal">&nbsp;</a>
	    <a class="logo_fixed" href="index.html"><img src="__PUBLIC__/images/fixedlogo.png" style="height:50px;" /></a>
	    <div class="name_gs"><?php echo ($vo["title"]); ?></div>
	    <div class="fixed_con1">
	    <ul>
	         <li class="fixed_con11"><img src="__PUBLIC__/images/<?php echo ($vo["bclass"]["0"]["image"]); ?>"  /></li>
	        <li class="fixed_con12">
		          <dt><a href="__APP__/Design/index/id/25"><?php echo ($vo["bclass"]["0"]["title"]); ?></a></dt>
		           <dt><a href="__APP__/Design/index/id/26"><?php echo ($vo["bclass"]["1"]["title"]); ?></a></dt>
		    
	        </li>
	        <li class="fixed_con11" style="margin-left:20px;"><img src="__PUBLIC__/images/<?php echo ($vo["bclass"]["2"]["image"]); ?>" /></li>
	       <li class="fixed_con12">
		         <dt><a href="__APP__/Design/index/id/27"><?php echo ($vo["bclass"]["2"]["title"]); ?></a></dt>
		         <dt><a href="__APP__/Design/index/id/28"><?php echo ($vo["bclass"]["3"]["title"]); ?></a></dt>
	      </li>
	       </ul>
	    </div>
	</div><?php endif; endforeach; endif; ?>
<div class="modal fixed_1" id="lianxi" style="font-family:'微软雅黑';">
	<a class="close"  id="close6"   onClick="dis_show1()" onMouseDown="dis_show2()" onMouseOut="dis_show3()" data-dismiss="modal">&nbsp;</a>
    <a class="logo_fixed" href="index.html"><img src="__PUBLIC__/images/fixedlogo.png" style="height:50px;" /></a>
    <div class="name_gs"><?php echo ($data["menu"]["6"]["title"]); ?></div>
    <div class="fixed_con3">
       <ul>
         <li class="fixed_con33" style="width:245px;"><?php echo ($data["config"]["address"]); ?></li>
        <!-- <li class="fixed_con34">(416) 3234-171-818 (业务)</li> -->
       <?php if(is_array($data["config"]["phone"])): foreach($data["config"]["phone"] as $key=>$row): ?><li class="fixed_con34" style="padding-top:5px"><?php echo ($row); ?></li><?php endforeach; endif; ?>
       <!-- <li class="fixed_con34" style="margin-top:0px">(416) 3234-171-817 (人事)</li> -->
       </ul>
  </div>
  
       <div class="fixed_con_r">
        <ul>
         <li class="fixed_con35" style="margin-top:25px;"><?php echo ($data["config"]["telphone"]); ?></li>
        <li class="fixed_con36"><?php echo ($data["config"]["QQ"]); ?></li>    
 	<?php if(is_array($data["config"]["email"])): foreach($data["config"]["email"] as $key=>$vo): ?><li class="fixed_con34" style="margin-top:0px"><?php echo ($vo); ?></li><?php endforeach; endif; ?>
       </ul>
       </div>
  <div class="tips_01"></div>
  <div class="tips_02"></div>
  <div class="tips_03"></div>
  <div class="tips_04"></div>
  <div class="tips_05"></div>
</div>
<div class="modal fixed_0" id="liuyan">
	<a class="close" id="close7"    onClick="dis_show1()" onMouseDown="dis_show2()" onMouseOut="dis_show3()" data-dismiss="modal">&nbsp;</a>
    <a class="logo_fixed" href="index.html"><img src="__PUBLIC__/images/fixedlogo.png" style="height:50px;" /></a>
    <div class="name_gs">留言</div>
    <div class="fixed_con4">
       <table width="100%" border="0">
  <form action="__APP__/Base/addmessage" method="post" onsubmit="return checkMessage(this);">
  <tr>
    <td class="ly_1">&nbsp;公司:</td>
    <td class="ly_2">&nbsp;<input name="company" class="inp" type="text"></td>
    <td class="ly_1">&nbsp;电话:</td>
    <td class="ly_2">&nbsp;<input name="phone" class="inp" type="text"><input type="hidden" name="url" value="__SELF__"/></td>
  </tr>
  <tr>
    <td class="ly_1">&nbsp;职位:</td>
    <td  class="ly_2">&nbsp;<input name="office" class="inp" type="text"></td>
    <td class="ly_1">&nbsp;手机:</td>
    <td  class="ly_2">&nbsp;<input name="telphone"  class="inp" type="text"></td>
  </tr>
  <tr>
    <td class="ly_1">&nbsp;姓名:</td>
    <td  class="ly_2">&nbsp;<input name="name"  class="inp" type="text"></td>
    <td class="ly_1">&nbsp;QQ: </td>
    <td  class="ly_2">&nbsp;<input name="qq" class="inp"  type="text"></td>
  </tr>
  <tr>
    <td class="ly_1">&nbsp;需求:</td>
    <td  class="ly_2">&nbsp;<input name="demand"  class="inp" type="text"></td>
    <td class="ly_1">&nbsp;邮箱:</td>
    <td class="ly_2">&nbsp;<input name="email"   class="inp"type="text"></td>
  </tr>
  <tr>
   <!--控制高度的--> 
   <td colspan="4" style="padding-top:5px; height:25px; font-size:18px;color:#999;">&nbsp;留言：</td>
  </tr>
  <tr>
   <td colspan="4"><textarea class="textinp" name="content" ></textarea></td>
  </tr>
  <tr style="padding-top:5px;">
    <td style="font-size:18px;color:#999; padding-top: 12px; width:110px" colspan="2">&nbsp;验证：&nbsp;<input style="margin-top:-3px;"  class="inp_c"  name="verify" type="text">&nbsp;<img src="__APP__/Bases/verify" id="verify" onclick="this.src='__APP__/Bases/verify/'+Math.random()" /><span style="display:none;font-size:12px;color:#cc0000" id="codeError"> &nbsp;验证码错误222</span></td>
    <td colspan="2">&nbsp;<input style="top:220px;" name="" class="bttn1" type="submit" value="提交"> <input style="top:220px;" name="" class="bttn2" type="reset" value="重填"></td>
     </form>
  </tr>
</table>

       </div>
  </div>
    <!--8错误-->
  
<div class="modal fixed_0" id="error404">
	<a class="close" id="close4"   onClick="dis_show1()" onMouseDown="dis_show2()" onMouseOut="dis_show3()" data-dismiss="modal">&nbsp;</a>
    <a class="logo_fixed" href="index.html"><img src="__PUBLIC__/images/fixedlogo.png" style="height:50px;" /></a>
    <div class="name_gs">错误提示</div>
    <div class="fixed_con404">
    <p>十分抱歉，您要查看的网页当前已过期，或已被更名或删除！</p>
    <p>转到<a href="http://www.longmamedia.com/"> http://www.longmamedia.com/</a> 主页。</p>
    <p style="margin-bottom:50px;">单击后退按钮，尝试其他链接。</p>
    <p>By <a href="http://www.longmamedia.com/">http://www.longmamedia.com/</a></p>
    
    </div>
</div>
<!--错误-->
 <!-- <div style="position:absolute; top:10px; left:0; height:30px; width:40px; lin-height:40px; background:#ccc; color:#fff"><a target="_blank"  data-toggle="modal" href="#error404">404</a></div> -->

<!--<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>-->
<script type="text/javascript" src="__PUBLIC__/js/modal.js"></script>
<script type="text/javascript">
$(document).ready(function(){
   $("a.forgot").click(function(){
		$("#gongsijianjie").modal("hide");
		$("#meitifabu").modal({show:!0})
	});
	
	$("#shejiyingyong").modal("hide");
	$("#meitifabu").modal("hide");
	$("#gongsijianjie").modal("hide");
	$("#xinwenzixun").modal("hide");
	$("#rencaizhaoping").modal("hide");
	$("#lianxiwomen").modal("hide");
	$("#liuyan").modal("hide");
	
});
</script>

<div class="box_partake">
	<a class="btn_retracting" href="javascript:void(0);" id="J_btn_retracting"></a>
	<div class="bdshare_t bds_tools_32 get-codes-bdshare" id="bdshare">
		<a title="分享到QQ空间" onclick="javascript:_hmt.push(['_trackPageview', '/share/qzone/']);" href="javascript:void(0);" class="bds_qzone"></a>
		<a title="分享到新浪微博" onclick="javascript:_hmt.push(['_trackPageview', '/share/tsina/']);" href="javascript:void(0);" class="bds_tsina"></a>
		<a title="分享到腾讯微博" onclick="javascript:_hmt.push(['_trackPageview', '/share/tqq/']);" href="javascript:void(0);" class="bds_tqq"></a>
		<a title="分享到人人网" onclick="javascript:_hmt.push(['_trackPageview', '/share/renren/']);" href="javascript:void(0);" class="bds_renren"></a>
		<span onclick="javascript:_hmt.push(['_trackPageview', '/share/more/']);" href="javascript:void(0);" class="bds_more"></span>
	</div>
</div>

<div style="clear:left"></div>

<?php echo ($data["config"]["count"]); ?>

<!-- 
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"4","bdPos":"right","bdTop":"130"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
 -->

<div class="_share_baidu" id="_share_baidu">
	<a href="javascript:;" class="_btn" id="_btn"></a>
	<div class="bdsharebuttonbox" id="_bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="popup_more" data-cmd="more"></a></div>
	<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
	
</div>
<script>
	$(function(){
		var isIE = navigator.userAgent.indexOf("Firefox")==-1?true:false;
		if(isIE){
			;
		}
		var oBox = document.getElementById('_share_baidu');
		var oBtn = document.getElementById('_btn');
		var oShare = document.getElementById('_bdsharebuttonbox');
		var bBtn = true;
		oBtn.onclick = function(){
			if( bBtn ) {
				$(this).addClass('_btn_hover');
				oShare.style.left = '50px';
				$(oBox).animate({'width':256});
			}else{				
				$(this).removeClass('_btn_hover');				
				
				$(oBox).animate({'width':50},function(){
					oShare.style.left = '52px';
				});
			}
			bBtn = !bBtn;
		}
		
	});
	function checkMessage(obj){
		var checkData = {};
		checkData.code = $(":text[name=verify]").val();
		checkData.company = $(":text[name=company]").val();
		checkData.name = $(":text[name=name]").val();
		checkData.telphone = $(":text[name=telphone]").val();
		checkData.phone = $(":text[name=phone]").val();
		checkData.qq = $(":text[name=qq]").val();
		checkData.email = $(":text[name=email]").val();
		checkData.content = $("textarea[name=content]").val();
		var status = true;
		 $.ajax({
			type:"POST",
			async:false,
			url:"__APP__/Base/checkVerify",
			data:checkData,
			success:function(data){
				if(data.status != 1){
					$("#verify").click();
					$("#codeError").text(data.info);
					$("#codeError").css("display","block");
					//alert(data);
					status =  false;
				}
			}
		});
		return status;
	}
</script>


</body>
</html>