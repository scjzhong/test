$(document).ready(function(){
	/*======字体自适应======*/
	!function(){function a(){
		if(document.documentElement.clientWidth<1600){
			document.documentElement.style.fontSize=document.documentElement.clientWidth/108+"px";
		}else{
			document.documentElement.style.fontSize=document.documentElement.clientWidth/96+"px";
		}
	}
	var b=null;
	window.addEventListener("resize",function(){
		clearTimeout(b),b=setTimeout(a,300)},!1),a()
	}(window);
	/*======字体自适应======*/

	/*======背景图片自适应======*/
	unBg();
	$(window).resize(function(){
		unBg();
	})

})

//背景图片自适应
function unBg(){
	var hei=$(window).height();
	$('body').css('height',hei);
}