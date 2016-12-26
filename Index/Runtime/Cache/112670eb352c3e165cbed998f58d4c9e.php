<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset="utf-8">
<title>List</title>
<link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css">
<link href="__PUBLIC__/css/menu.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.masonry.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.infinitescroll.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/fn.js"></script>
<script type="text/javascript">
var isWidescreen=screen.width>=1280; 
if(isWidescreen){document.write("<style type='text/css'>.demo{width:1000px;}</style>");}
</script>
<style type="text/css">
.{width:1000px;}
</style>
<script type="text/javascript">
function item_masonry(){ 
	$('.item img').load(function(){ 
		$('.infinite_scroll').masonry({ 
			itemSelector: '.masonry_brick',
			columnWidth:320,
			gutterWidth:19								
		});		
	});
		 //columnWidth 函数递增控制div左边距
	$('.infinite_scroll').masonry({ 
		itemSelector: '.masonry_brick',
		columnWidth:320,
		gutterWidth:19								
	});	

	var isIE = navigator.userAgent.indexOf("Firefox")==-1?true:false;
	if(isIE){
		
	}
}

$(function(){
//滚动条下拉事件
	function item_callback(){
		$('.item').mouseover(function(){
			$(this).css('box-shadow', '0 1px 5px rgba(35,25,25,0.5)');
			//alert(1);
			$('.btns',this).show();
		}).mouseout(function(){
			$(this).css('box-shadow', '0 1px 3px rgba(34,25,25,0.2)');
			$('.btns',this).hide();		 	
		});
		item_masonry();	
	}
	item_callback();  
	$('.item').fadeIn();
	var sp = 1
	$(".infinite_scroll").infinitescroll({
		navSelector  	: "#more",
		nextSelector 	: "#more a",
		itemSelector 	: ".item",
		loading:{
			img: "__PUBLIC__/images/masonry_loading_1.gif",
			msgText: '正在加载中....',
			finishedMsg: '木有了,看看下一页',
			finished: function(){
				sp++;
				if(sp>=10){ //到第10页结束事件
					$("#more").remove();
					$("#infscr-loading").hide();
					$("#pagebox").show();
					$(window).unbind('.infscr');
				}
			}	
		},errorCallback:function(){ 
			$("#pagebox").show();
		}
	},function(newElements){
		var $newElems = $(newElements);
		$('.infinite_scroll').masonry('appended', $newElems, false);
		$newElems.fadeIn();
		item_callback();
		return;
	});
});
</script>
<!--qq-->
<script type="text/javascript" src="__PUBLIC__/js/fn.js"></script>
<noscript>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/nojs.css" />
</noscript>
</head>
<body oncontextmenu="return false" ondragstart="return false" onselectstart="return false" >
<div class="top-wrap"></div>
<div class="wrap mb20" style="min-height:900px;">
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
  <!--瀑布流 start-->
  <div class="pbl_container">
    <div class="pblCon">
      <div class="demo clearfix">
        <div class="item_list infinite_scroll">
          <?php if(is_array($datas["company"])): foreach($datas["company"] as $key=>$v): ?><div id="masonry1" class="item masonry_brick">
              <div class="item_t">
                <div class="img"> <a href="__APP__/Company/index/id/<?php echo ($v["id"]); ?>" target="_blank"><img width="288" alt="<?php echo ($v["title"]); ?>" src="__PUBLIC__/images/<?php echo ($v["pic"]); ?>" /></a> </div>
                <div class="title"><span><a href="__APP__/Company/index/id/<?php echo ($v["id"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a></span></div>
              </div>
              <div class="item_b clearfix"> <span><?php echo ($v["objectname"]); ?></span>
                <p><?php echo ($v["outline"]); ?></p>
              </div>
            </div><?php endforeach; endif; ?>
          <!--item end-->
        </div>
      </div>
    </div>
  </div>
  <!--回到顶部-->
  <div class="clear"></div>
  <div class="clear"></div>
  <div class="page_l" style="">
    <ul>
      <?php echo ($page); ?>
    </ul>
  </div>

</div>
  
<div class="clear"></div>
<div id="footer">
  <div class="wrap fooer-wrap">
    <p> <?php echo ($data["config"]["copyright"]); ?> </p>
    <div id="renzheng"> <img style="height:35px;" src="__PUBLIC__/images/b1.png" alt=""> <img style="height:35px;" src="__PUBLIC__/images/b2.png" alt=""> <img style="height:35px;" src="__PUBLIC__/images/b3.png" alt=""> </div>
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
<div id="box"> <span class="mess" id="mess" onMouseOver="qqkf()"  onMouseOut="qqkf1()"></span>
  <ul class='qq'>
    <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=147430218&site=qq&menu=yes"><img src="__PUBLIC__/images/qq1.jpg" /></a></li>
    <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=147430218&site=qq&menu=yes"><img src="__PUBLIC__/images/qq2.jpg" /></a></li>
    <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=147430218&site=qq&menu=yes"><img src="__PUBLIC__/images/qq3.jpg" /></a></li>
  </ul>
</div>
<!--回顶部-->
<div class="asid_share" id="asid_share">
  <div class="aside_position">
    <div class="asid_share_box relative"> <a href="javascript:scroll(0,0)"  id="adid_icon_top" ></a></div>
    <!--sina-->
    <div class="asid_share_box1 relative"> <a href="javascript:void(0)"  class="adid_icon_s" onClick="show_s()" onMouseOut="show_s2()" ></a>
      <div class="asid_sha_layer" id="sina_s" >
        <p class="sweep_img"><img src="__PUBLIC__/images/sina_p.png" width="220"></p>
      </div>
    </div>
    <!--sina-->
    <div class="asid_share_box2 relative"> <a href="javascript:void(0)"  class="adid_icon_w" onClick="show_w()" onMouseOut="show_w2()"></a>
      <div class="asid_sha_layer" id="weixin_w" >
        <p class="sweep_img"><img src="__PUBLIC__/images/weixin_p.png" width="220"></p>
      </div>
    </div>
    <div class="asid_share_box3 relative"> <a href="__APP__/Index/indexs"  class="adid_icon_f"></a> </div>
  </div>
</div>
<!--遮罩层-->
<div class="screen" id="screen"></div>
<?php $n = 1;?>
<?php $n = 1;?>
<?php if(is_array($data["menu"])): foreach($data["menu"] as $key=>$vo): $numb = count($vo['bclass'])?>
  <?php if($numb < 3): ?><div class="modal fixed_0" id="<?php echo ($vo["path"]); ?>"> <a class="close"  id="close<?php echo ($n); ?>"   onClick="dis_show1()" onMouseDown="dis_show2()" onMouseOut="dis_show3()" data-dismiss="modal">&nbsp;</a> <a class="logo_fixed" href="index.html"><img src="__PUBLIC__/images/fixedlogo.png" style="height:50px;" /></a>
    <div class="name_gs"><?php echo ($vo["title"]); ?></div>
    <?php $i = 1;?>
    <?php if(is_array($vo["bclass"])): foreach($vo["bclass"] as $key=>$v): $num = count($v['sclass']);?>
      <span class="tit<?php echo ($i); ?>" 
      <?php if($num == 0): ?>style="margin-top:65px;"<?php endif; ?>
      <?php if(($vo['id'] == 2) OR ($vo['id'] == 3)): ?>style="text-align:left;"<?php endif; ?>
      ><a href="<?php if($v['id'] == 1): ?>__APP__/Company/index/id/1<?php endif; ?>
      <?php if($v['id'] == 2): ?>__APP__/Company/index/id/2<?php endif; ?>
			<?php if(($v['id'] == 11)): ?>__APP__/Company/index/id/3<?php endif; ?>
			<?php if(($v['id'] == 12)): ?>__APP__/Company/index/id/4<?php endif; ?>
      <?php if($v['id'] == 3): ?>__APP__/Design/apply<?php endif; ?>
      <?php if($v['id'] == 4): ?>__APP__/Design/video<?php endif; ?>
      <?php if($v['id'] == 5): ?>__APP__/Design/media<?php endif; ?>
      <?php if($v['id'] == 6): ?>__APP__/Design/multiple<?php endif; ?>
      "
      <?php if($i == 2): ?>style="margin-left:-20px;"<?php endif; ?>
      ><?php echo ($v["title"]); ?></a></span>
      <?php $i++; endforeach; endif; ?>
    <div class="fixed_con2">
      <ul>
        <?php if(is_array($vo["bclass"])): foreach($vo["bclass"] as $key=>$va): if(empty($$va[image])): ?><li class="fixed_con22"><img src="__PUBLIC__/images/<?php echo ($va["image"]); ?>" /></li><?php endif; ?>
          <li class="fixed_con23">
<!--              <for start="0" end="$num" step="2" name="a" >-->
			  <?php if(is_array($va["sclass"])): $i = 0; $__LIST__ = $va["sclass"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vas): $mod = ($i % 2 );++$i; if(($mod) == "0"): ?><dt><a href="__APP__/Design/index/id/<?php echo ($vas['id']); ?>"><?php echo ($vas["title"]); ?></a>
			  		<?php if(strlen($vas['tltle']) >= 10): ?></dt><dt><?php else: ?>/<?php endif; ?>
			  	<?php else: ?>
			  		<a href="__APP__/Design/index/id/<?php echo ($vas['id']); ?>"><?php echo ($vas["title"]); ?></a></dt><?php endif; endforeach; endif; else: echo "" ;endif; ?>
          </li><?php endforeach; endif; ?>
      </ul>
    </div>
  </div>
  <?php $n++;?>
  <?php else: ?>
  <div class="modal fixed_0" id="<?php echo ($vo["path"]); ?>"> <a class="close" id="close4"   onClick="dis_show1()" onMouseDown="dis_show2()" onMouseOut="dis_show3()" data-dismiss="modal">&nbsp;</a> <a class="logo_fixed" href="index.html"><img src="__PUBLIC__/images/fixedlogo.png" style="height:50px;" /></a>
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
<div class="modal fixed_1" id="lianxi" style="font-family:'微软雅黑';"> <a class="close"  id="close6"   onClick="dis_show1()" onMouseDown="dis_show2()" onMouseOut="dis_show3()" data-dismiss="modal">&nbsp;</a> <a class="logo_fixed" href="index.html"><img src="__PUBLIC__/images/fixedlogo.png" style="height:50px;" /></a>
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
<div class="modal fixed_0" id="liuyan"> <a class="close" id="close7"    onClick="dis_show1()" onMouseDown="dis_show2()" onMouseOut="dis_show3()" data-dismiss="modal">&nbsp;</a> <a class="logo_fixed" href="index.html"><img src="__PUBLIC__/images/fixedlogo.png" style="height:50px;" /></a>
  <div class="name_gs">留言</div>
  <div class="fixed_con4">
    <table width="100%" border="0">
      <form action="__APP__/Base/addmessage" method="post" onsubmit="return checkMessage(this);">
        <tr>
          <td class="ly_1">&nbsp;公司:</td>
          <td class="ly_2">&nbsp;
            <input name="company" class="inp" type="text"></td>
          <td class="ly_1">&nbsp;电话:</td>
          <td class="ly_2">&nbsp;
            <input name="phone" class="inp" type="text">
            <input type="hidden" name="url" value="__SELF__"/></td>
        </tr>
        <tr>
          <td class="ly_1">&nbsp;职位:</td>
          <td  class="ly_2">&nbsp;
            <input name="office" class="inp" type="text"></td>
          <td class="ly_1">&nbsp;手机:</td>
          <td  class="ly_2">&nbsp;
            <input name="telphone"  class="inp" type="text"></td>
        </tr>
        <tr>
          <td class="ly_1">&nbsp;姓名:</td>
          <td  class="ly_2">&nbsp;
            <input name="name"  class="inp" type="text"></td>
          <td class="ly_1">&nbsp;QQ: </td>
          <td  class="ly_2">&nbsp;
            <input name="qq" class="inp"  type="text" ></td>
        </tr>
        <tr>
          <td class="ly_1">&nbsp;需求:</td>
          <td  class="ly_2">&nbsp;
            <input name="demand"  class="inp" type="text"></td>
          <td class="ly_1">&nbsp;邮箱:</td>
          <td class="ly_2">&nbsp;
            <input name="email"   class="inp"type="text"></td>
        </tr>
        <tr>
          <!--控制高度的-->
          <td colspan="4" style="color:#999; padding-top:5px; height:25px; font-size:18px;">&nbsp;留言：</td>
        </tr>
        <tr>
          <td colspan="4"><textarea class="textinp" name="content" ></textarea></td>
        </tr>
        <tr style="padding-top:5px;">
          <td style="font-size:18px;color:#999;  padding-top: 12px; width:110px" colspan="2">&nbsp;验证：&nbsp;
            <input style="margin-top:-3px;"  class="inp_c"  name="verify" type="text">
            &nbsp;<img src="__APP__/Bases/verify" id="verify" onclick="this.src='__APP__/Bases/verify/'+Math.random()" /><span style="display:none;font-size:12px;color:#cc0000" id="codeError"> &nbsp;验证码错误</span></td>
          <td colspan="2">&nbsp;
            <input name="" class="bttn1" type="submit" value="提交">
            <input name="" class="bttn2" type="reset" value="重填"></td>
      </form>
      </tr>
      
    </table>
  </div>
</div>
<!--百度分享-->
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"http://img04.taobaocdn.com/imgextra/i4/339847423/T28oy1Xz4XXXXXXXXX_!!339847423.png","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"4","bdPos":"right","bdTop":"130"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
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
<div class="_share_baidu" id="_share_baidu"> <a href="javascript:;" class="_btn" id="_btn"></a>
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
<?php echo ($data["config"]["count"]); ?>
</body>
</html>