var time=null;
var speed=2;

window.onload=function(){
	var oDiv=document.getElementById('div1');
	var oUl=document.getElementsByTagName('ul')[0];
	var aLi=document.getElementsByTagName('li');
	var oPrev=document.getElementById('prev');
	var oNext=document.getElementById('next');
	var oSpeed=document.getElementById('speed');
	var oBtn=document.getElementById('btn1');
	
	oUl.innerHTML+=oUl.innerHTML;
	oUl.style.width=aLi[0].offsetWidth*aLi.length+'px';

	time=setInterval(function(){
		move(oUl);
	},30)
	oUl.onmouseover=function(){
		clearInterval(time);
	}
	oUl.onmouseout=function(){
		time=setInterval(function(){
			move(oUl)
		},30)
	}
	oPrev.onclick=function(){
		speed=-2;
	}
	oNext.onclick=function(){
		speed=2;
	}
	oSpeed.onchange=function(){
		speed=parseInt(this.value);
	}
}

function move(obj){
	if(obj.offsetLeft<-obj.offsetWidth/2){
		obj.style.left=0;
	}
	if(obj.offsetLeft>0){
		obj.style.left=-obj.offsetWidth/2+'px';
	}
	obj.style.left=obj.offsetLeft+speed+'px';
}