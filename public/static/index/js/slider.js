$(function(){
		var currIndex;
		var liWdith ;
		var li;
		var list;
		var len;
		var id;

		//轮播图选项卡
		$('.category-item').mouseover(function(){
			$(this).addClass('on');
			let i = $(this).index();
			let h = parseInt($(this).css('height'));
			let height = h * i + i * 4 + 4;
			$(this).find('.category-content').css('top',-height+'px');
			$(this).find('.category-content').show();
		}).mouseout(function(){
			$(this).removeClass('on');
			$(this).find('.category-content').hide();
		});
		

		init();
		//构造函数
		function init(){
			currIndex = 1;
			//获取第一个li并复制并放到图片最后位置
			var li_1 = document.querySelector(".slider .list .item:first-of-type");
			var copy_first = li_1.cloneNode(true);
			//获取最后一个li复制并放到图片最前面的位置
			var li_2 = document.querySelector(".slider .list .item:last-of-type");
			var copy_last = li_2.cloneNode(true);
			//获取ul把复制的li加入到指定位置
			list = document.querySelector(".slider .list");
			list.appendChild(copy_first);
			list.insertBefore(copy_last,li_1);
			//设置li的长度能把全部图片放进一个里的长度
			li = document.querySelectorAll(".slider .list .item");
			liWdith = li[0].offsetWidth;
			// alert(liWdith)
			len = li.length;
			//获取li的长度
			list.style.width = liWdith * len + "px";
			//刷新后默认第一站图纸
			list.style.left = -liWdith + "px";
			//点击next
			document.querySelector(".next").onclick = function(){
				sliderNext();
			}
			//点击prev
			document.querySelector(".prev").onclick = function(){
				sliderPrev();
			}
			//点击底部轮播
			var bullet = document.querySelectorAll(".pagination .bullet");
			for(var i=0; i<bullet.length; i++){
				bullet[i].index = i;
				bullet[i].onclick = function(){
					currIndex = this.index + 1;
					sliderTo(currIndex);
				}
			}
			//自动轮播
			auto();
			var slider = document.querySelector(".slider");
			//鼠标移动进图片框
			slider.onmouseover = function(){
				stop();
			}
			//鼠标移出图片框
			slider.onmouseout = function(){
				auto();
			}
			
		}
		//点击next
		function sliderNext(){
			currIndex++;
			sliderTo(currIndex);
		}
		//点击prev
		function sliderPrev(){
			currIndex--;
			sliderTo(currIndex);
		}
		//自动轮播
		function auto(){
			clearInterval(id);
			id = setInterval(function(){
				sliderNext();
			},3000)
		}
		//停止轮播
		function stop(){
			clearInterval(id);
		}
		//计算函数
		function sliderTo(index){
			//获取到li
			li = document.querySelector(".slider .list");
			//如果index等于最后一张图片那么直接跳回到真正的第一张图片
			if(index == len){
				currIndex = index = 2;
				li.style.left = -liWdith + "px";
			}
			//如果index等于-1那么直接跳回到真正的最后一张图片
			if(index == -1){
				currIndex = index = len - 3;
				li.style.left = -(len - 2) * liWdith + "px";
			}
			
			var df;
			//获取底部li
			var bullet = document.querySelectorAll(".pagination .bullet");
			var content = document.querySelectorAll(".nav-bottom .slider-content");
			if(index == 0){
				//如果index是复制的最后一张图片那么默认class变成倒数第一个框框
				df = bullet.length - 1;
			}else if(index == len -1){
				//如果index是复制的第一张图片那么默认class变成第一个框框
				df = 0;
			}else{
				df = index - 1;
			}
			document.querySelector(".df").className = "bullet";
			bullet[df].className = "bullet df";
			document.querySelector(".cl").className = "slider-content";
			content[df].className = "slider-content cl";
			
			var left = -index * liWdith;
			animate1(li,{left:left});
		}
	})