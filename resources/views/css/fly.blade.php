<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.dev-layer{
	position: fixed;
	top: 0;
	width: 100%;
	display: none;
	height: 100%;
	background: rgba(0,0,0,0.8);
	}
	.deving{
		display: inline-block;
	    height: 44px;
	    font-size: 18px;
	    font-family: 微软雅黑;
	    line-height: 44px;
		margin-top: 100px;
	    color: #FFF;
		/*-webkit-transform: translateX(-375px);*/
		/*transform: translateX(-375px);*/
		-webkit-transition:-webkit-transform 3s cubic-bezier(0, 1.45, 0.59, -0.29);
		transition:transform 3s cubic-bezier(0, 1.45, 0.59, -0.29);
	}
	.deving img{
		position: absolute;
	}
	</style>
	<script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
	htllo
</body>
	<script type="text/javascript">
		$(function(){
			$(document).on('click',function(){
				var str = '<div class="dev-layer"><div class="deving">攻城狮正在玩命开发中 <img src="/images/fly.png"></span></div></div>';
				dev(str);
			})
		})
		function dev(str){
			if(document.querySelector('.dev-layer') !== null){
				console.log('1')
				return false;
			}
				console.log('2')
			var w = document.documentElement.clientWidth;
			$('body').append(str);
			var obj = $('.deving')[0];
			document.querySelector('.dev-layer').style.display = 'block';
			obj.style.WebkitTransform = 'translateX(-'+w+'px)';
			setTimeout(function(){
				obj.style.WebkitTransform = 'translateX('+w+'px)';
			},200)
			setTimeout(function(){
				document.querySelector('.dev-layer').remove();
			},3200)
		}
	</script>
</html>