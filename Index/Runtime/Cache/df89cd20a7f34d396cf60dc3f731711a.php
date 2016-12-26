<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset="utf-8">
<title>detail</title>
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/css/menu.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/fn.js"></script>
<!--qq-->
<script type="text/javascript" src="__PUBLIC__/js/fn.js"></script>
<noscript><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/nojs.css" /></noscript>

<!--banner-->
<link href="__PUBLIC__/css/banner.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="__PUBLIC__/js/banner.js"></script>
</head>

<body oncontextmenu="return true" ondragstart="return false" onselectstart="return false">
<div class="top-wrap">
<div id="top"></div></div>

<div class="wrap" style="min-height:900px;">
	<div id="header" style="margin-top:-5px;">
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
	<div class="intr1"><?php echo ($datas["title"]); ?></div>
 <!--banner-->
			<div class="b_cont" onmouseover="b_cont()" onmouseout="b_cont2()">

	<div id="scroll_jdt">
		<?php if(is_array($datas["slide"])): foreach($datas["slide"] as $key=>$v): ?><div class="ct_p_05">
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
      <div class="wrap_left">
      <div class="bshare-custom">



<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
    <a class="bds_qzone"></a>
    <a class="bds_tsina"></a>
    <a class="bds_tqq"></a>
    <a class="bds_renren"></a>
    <span class="bds_more"></span>
	<a class="shareCount" href="#" title="累计分享9次"></a>
</div>

<script type="text/javascript" id="bdshare_js" data="type=&mini=1" ></script> 
<script type="text/javascript" id="bdshell_js"></script> 
<script type="text/javascript">
	document.getElementById('bdshell_js').src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
	  
	  <!--<a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span>--></div><!--<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>-->
      <h2><?php echo ($datas["lowertitle"]); ?></h2>
      <div class="hr"></div>
     <!-- <hr  align="center" width="770" color="#ccc" size="1px" />-->
<!--      <p style="padding-bottom:30px">美国AMSTED 是一家成立于1962年的公司，主要提供多元化工业制成品的生产型企业，产品主要应用于铁路，运输，建筑和楼宇等领域。为了更好的适应中国市场，加快本土化进程，AMSTED 找到先知，希望借助先知的品牌整合平台优势为塑造崭新的本土化形象。先知深入挖掘AMSTED的品牌天赋优势，为其量身打造了以”安施德“概念为核心的形象传播系统。</p>  
      <h3> <font>概念创新：</font>安施天下 德播万里</h3>
     <h3><font>价值主张：</font>员工安心 客户放心</h3>
     <h3><font>品牌符码：</font>重塑庄重与信任</h3>  
     <ul style="text-align:center">
         <li><img src="__PUBLIC__/images/new1.jpg" /></li>
          <li><img src="__PUBLIC__/images/new2.jpg" /></li>
           <li><img src="__PUBLIC__/images/new3.jpg" /></li>
            <li><img src="__PUBLIC__/images/new4.jpg" /></li>
      </ul> -->
      <?php echo ($datas["content"]); ?>
       </div>
      <div class="wrap_right">
       <div class="wrap_right_1">更多相关推荐</div>
       <ul class="text_r1">
       	<?php if(is_array($datas["wenzi"])): foreach($datas["wenzi"] as $key=>$v): ?><li><a href="<?php echo ($v["url"]); ?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
       </ul>
        <ul class="text_r2">
        <?php if(is_array($datas["tupian"])): foreach($datas["tupian"] as $key=>$v): ?><li><a href="<?php echo ($v["url"]); ?>"><img src="__PUBLIC__/images/<?php echo ($v["image"]); ?>" /></a></li><?php endforeach; endif; ?>
       </ul>
      </div>
    </div>
<!--回到顶部-->
<div class="clear"></div>

</div>
<div class="clear"></div>
<div id="footer">
	<div class="wrap fooer-wrap">
	<p>
	<?php echo ($data["config"]["copyright"]); ?>
	</p>
	<div id="renzheng">
		<img style="height:35px;" src="__PUBLIC__/images/b1.png" alt="">
		<img style="height:35px;" src="__PUBLIC__/images/b2.png" alt="">
		<img style="height:35px;" src="__PUBLIC__/images/b3.png" alt="">
	</div>
</div>
</div>
<!--侧边，弹出-->
<!--aside-->
<!-- asid start -->
<script type="text/javascript">
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
		document.getElementById("mess").style.backgroundImage="url(__PUBLIC__/images/kefu_p.png)";}
function qqkf1(){
		document.getElementById("mess").style.backgroundImage="url(__PUBLIC__/images/kefu.png)";}
function bdshare(){
		document.getElementByClass("bdshare-slide-button").style.backgroundImage="url(__PUBLIC__/images/share_p.png)";}
          
function bdshare(){
		document.getElementByClass("bdshare-slide-button").style.backgroundImage="url(__PUBLIC__/images/share.png)";}
         	         
	 </script>
<div id="box">
	<span class="mess" id="mess" onMouseOver="qqkf()"  onMouseOut="qqkf1()"></span>
	<ul class='qq'>
		<li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=147430218&site=qq&menu=yes"><img src="__PUBLIC__/images/qq1.jpg" /></a></li>
		<li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=147430218&site=qq&menu=yes"><img src="__PUBLIC__/images/qq2.jpg" /></a></li>
		<li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=147430218&site=qq&menu=yes"><img src="__PUBLIC__/images/qq3.jpg" /></a></li>
		
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
<?php if($numb < 3): ?><div class="modal fixed_0" id="<?php echo ($vo["path"]); ?>">
	<a class="close"  id="close<?php echo ($n); ?>"   onClick="dis_show1()" onMouseDown="dis_show2()" onMouseOut="dis_show3()" data-dismiss="modal">&nbsp;</a>
	<a class="logo_fixed" href="index.html"><img src="__PUBLIC__/images/fixedlogo.png" style="height:50px;" /></a>
	<div class="name_gs"><?php echo ($vo["title"]); ?></div>
	<?php $i = 1;?>
	<?php if(is_array($vo["bclass"])): foreach($vo["bclass"] as $key=>$v): $num = count($v['sclass']);?>
		<span class="tit<?php echo ($i); ?>" <?php if($num == 0): ?>style="margin-top:65px;"<?php endif; if(($vo['id'] == 2) OR ($vo['id'] == 3)): ?>style="text-align:left;"<?php endif; ?>>
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
    <?php if(is_array($vo["bclass"])): foreach($vo["bclass"] as $key=>$va): if(empty($$va[image])): ?><li class="fixed_con22"><img src="__PUBLIC__/images/<?php echo ($va["image"]); ?>" /></li><?php endif; ?>
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
    <td class="ly_1">&nbsp;QQ:</td>
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
   <td colspan="4" style="padding-top:5px; height:25px; font-size:18px;color:#999; ">&nbsp;留言：</td>
  </tr>
  <tr>
   <td colspan="4"><textarea class="textinp" name="content" ></textarea></td>
  </tr>
  <tr style="padding-top:5px;">
    <td style="font-size:18px; padding-top: 12px; color:#999; width:110px" colspan="2">&nbsp;验证：&nbsp;<input style="margin-top:-3px;"  class="inp_c"  name="verify" type="text">&nbsp;<img src="__APP__/Bases/verify" id="verify" onclick="this.src='__APP__/Bases/verify/'+Math.random()" /><span style="display:none;font-size:12px;color:#cc0000" id="codeError"> &nbsp;验证码错误</span></td>
     <td colspan="2">&nbsp;<input name="" class="bttn1" type="submit" value="提交"> <input name="" class="bttn2" type="reset" value="重填"></td>
     
  </tr>
  </form>
</table>

       </div>
  </div>
<!--百度分享-->
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"http://img04.taobaocdn.com/imgextra/i4/339847423/T28oy1Xz4XXXXXXXXX_!!339847423.png","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"32","bdPos":"right","bdTop":"130"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<!--<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>-->


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
				$(oBox).animate({'width':256});
			}else{				
				$(this).removeClass('_btn_hover');
				$(oBox).animate({'width':50},function(){
				});
			}
			bBtn = !bBtn;
		}
		
	})
</script>
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
				status =  false;
			}
		}
	});
	return status;
}
</script>

<!--弹出层-->
<!-- asid end -->
<!--<script src="js/jQuery.hhShare.min.js"></script>
<script>
$(function(){	
	//图片滚动特效
	$('#asid_share').hhShare({
		cenBox     : 'asid_share_box',  //里边的小层
		icon       : 'adid_icon',
		addClass   : 'red_bag',
		titleClass : 'asid_title',
		triangle   : 'asid_share_triangle', //鼠标划过显示图层，边上的小三角
		showBox    : 'asid_sha_layer' //鼠标划过显示图层
	});
});
</script>-->
<?php echo ($data["config"]["count"]); ?>
</body>
</html>