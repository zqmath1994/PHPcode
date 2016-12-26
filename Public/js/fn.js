
function getClass(oParent,sClass)
{
	var value=[];
	var Ele=oParent.getElementsByTagName('*');
	for (var i=0; i<Ele.length; i++)
	{
		var aClass=Ele[i].className.split(' ');
		for (n=0; n<aClass.length; n++)
		{
			if (aClass[n]==sClass)
			{
				value.push(Ele[i]);
			}
		}
	}
	return value;
}

function getStyle(obj,name)
{
	if(obj.currentStyle)
	{
		return obj.currentStyle[name];
	}
	else
	{
		return getComputedStyle(obj,false)[name];
	}
}
function Running(obj,json,fnEnd)
{
	clearInterval(obj.timer);
	obj.timer=setInterval(function()
	{
		var now=0;
		var bStop=true;
		for (var attr in json)
		{
			if(attr=='opacity')
			{
				now=Math.round(parseFloat(getStyle(obj,attr))*100);
			}
			else
			{
				now=parseInt(getStyle(obj,attr));
			}
			var speed=(json[attr]-now)/5;
			speed=speed>0?Math.ceil(speed):Math.floor(speed);
			if(now!=json[attr])bStop=false;
			if(attr=='opacity')
			{
				obj.style.filter='alpha(opacity:'+now+speed+')';
				obj.style.opacity=(now+speed)/100;
			}
			else
			{
				obj.style[attr]=speed+now+'px';
			}
		}
		if(bStop)
		{
			clearInterval(obj.timer);
			if(fnEnd)fnEnd();
		}
	}, 30);
}
window.onload=function()
{
	var oBox=document.getElementById('box');
	var oTitle=getClass(oBox,'mess');
	var closed='';
	var opened='';
	var i=0;
	//getClass('mess').style.background="url(../.images/kefu.png)
	oTitle[0].onclick=function()
	{
		i++;
		

		if( i%2 ) {
			oTitle[0].style.left="-50px";
		Running(oBox,{right:0},function()
		{
		function qqkf(){
			
		document.getElementByClass("mess").style.backgroundImage="url(../images/kefu_p.png)";
		/*document.getElementByClass("mess").style.left="-50px";*/}

			
			oTitle[0].innerHTML=closed;	
				
		})
		}else{
			oTitle[0].style.left="-52px";
			Running(oBox,{right:-150},function()
			{	
				oBox.style.left == '-148px';
				//document.getElementByClass('mess').style.background="url(../images/kefu_p.png)";
				oTitle[0].innerHTML=opened;
				//oTitle[0].style.width="50px";
				
		
			})
		};	
	}
}