//获取style样式函数
function getStyle(el,property){
	//做下浏览器的兼容
	if(getComputedStyle){
		//IE流浪器没有这个方法
		return getComputedStyle(el)[property];
	}else{
		return el.currentStyle[property];
	}
}


function animate(el,arr){
	clearInterval(el.timer);
	el.timer = setInterval(function(){
		
		// width:200,
		// left:500,
		// top:100,
		// opacity:100
		for(var property in arr){
			var current;
			var target = arr[property];
			
			if(property === "opacity"){
				current = Math.round(parseFloat(getStyle(el,property)) * 100);
			}else{
				current = parseInt(getStyle(el,property));
			}
		
			var speed = (target - current) / 10;
			speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
			if(property === "opacity"){
				el.style.opacity = (current + speed) /100;
			}else{
				el.style[property] = current + speed + "px";
			}
		}
	},20);
}
// animate1(div,"left",500);
function animate1(el,arr){
	clearInterval(el.timer);
	el.timer = setInterval(function(){
		for(var style in arr){
			var value = arr[style];
			var ori_val;
			//获取对象原本style的值
			//如果是opacity(透明)这个style要做特殊处理
			if(style == "opacity"){
				ori_val = Math.round(parseFloat(getStyle(el,style)) * 100);
			}else{
				ori_val = parseInt(getStyle(el,style));
			}
			//计算移动的速度
			var speed = (value - ori_val) /10;
			//speed不能为小数，为小数不能准确的移动到指定位置
			speed = speed > 0 ? Math.ceil(speed) : Math.floor(speed);
			//修改对象style的值
			if(style == "opacity"){
				el.style.opacity = (ori_val+speed) / 100;
			}else{
				el.style[style] = ori_val + speed + "px";
			}
		}
	},20);
}	