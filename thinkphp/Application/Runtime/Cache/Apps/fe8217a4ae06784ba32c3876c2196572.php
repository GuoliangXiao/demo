<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>xhust</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="/xhust/thinkphp/Public/Apps/xhust.ico">
</head>
<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
<script src="https://d3js.org/d3.v4.min.js"></script>
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/jQuery-emoji/lib/css/jquery.mCustomScrollbar.min.css" />
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/jQuery-emoji/dist/css/jquery.emoji.css" />
<script type="text/javascript" src="/xhust/thinkphp/Public/jQuery-emoji/lib/script/jquery.mousewheel-3.0.6.min.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/jQuery-emoji/lib/script/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/jQuery-emoji/dist/js/jquery.emoji.min.js"></script>
<style type="text/css">
	.my-container{
		padding-top:5em;
		background: #eeeeee;
	}
	
	.app-container{
		
	}
	.app-title{
		display: inline-block;
		margin: 0.5em 0 0.5em 0;
		background: transparent;
	}
	.thumb-up{
		font-size: 1.2em;
		margin: 0em 1em 0 1em;
	}
	body{
		background: #eeeeee;
	}
</style>
<body>
	<style type="text/css">
	.mynavdiv{
		padding: 0;
		margin: 0;
	}
	.mynav{
		background: #2A2730;
		margin-top:0em;
		padding:0.3em;
		width: 100%;
	}
	.mynav>li{
		width: 8em;
	}
	.mynav>li:hover{
		background:rgba(255,255,255,0.5);
	}
	.mynav>li>a{
		font-size: 1.2em;
		color: white;
		width: 100%;
		height: 100%;
	}
	.mynav>li>a>span{
		font-size: 0.9em;
	}
	.mynav>li>a:hover{
		color:black;
		font-weight: bold;
		background: transparent;
		border:0px;
	}
	.mynav>li>a:focus{
		background:transparent;
		color: white;
	}
	#li-x{
		width: 4em;
	}
	#li-x:hover{
		background: transparent;
	}
	#li-x a img{
		height: 1.2em;
	}
</style>
<nav class="navbar navbar-fixed-top mynavdiv">
	<div class="container">
		<ul class="nav nav-tabs mynav">
		  	<li role="presentation" id="li-x"><a href="javascript:void(0);"><img src="/xhust/thinkphp/Public/Apps/xhust.ico"/></a></li>
	   		<li role="presentation"><a href='/xhust/thinkphp/'><span class="glyphicon glyphicon-home" aria-hidden="true"></span> &nbsp;首页</a></li>
		  	<li role="presentation"><a href="#"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> &nbsp;应用</a></li>
		  	<li role="presentation"><a href="<?php echo (C("contact.cnblog")); ?>" target="_blank"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span> &nbsp;博客</a></li>
		</ul>
	</div>
</nav>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		
	});
</script>
	<div class="container my-container">
		
<style type="text/css">
	.my-weather{
		padding-bottom: 1em;
		margin: 0 0.5em 0 0.5em;
	}
	.app-title{
		
	}
	.search-weather{
		padding: 0.5em;
	}
	.search-s{
		float: right;
	}
	#city-picker{
		width: 25em;
		overflow: hidden;
	}
</style>
<script type="text/javascript" src="/xhust/thinkphp/Public/citypicker/js/city-picker.data.min.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/citypicker/js/city-picker.min.js"></script>
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/citypicker/css/city-picker.css" />
<div  class="app-container">
	<div class="row">
		<div class="col-md-6">
			<h3 class="app-title"><i class="fa fa-snowflake-o fa-lg"></i>&nbsp;天气预报&nbsp;|&nbsp;Weather Forecast</h3>
		</div>
		<div class="col-md-6">

			<div class="form-inline search-weather">
				<div class="form-group">
                	<div style="position: relative;">
                    	<input  id="city-picker" class="form-control" readonly type="text" value="湖北省/武汉市/洪山区" data-toggle="city-picker"/>
                	</div>
            	</div>
				<div class="form-group">
					<button class="btn-s btn btn-default">&nbsp;&nbsp;<i class="fa fa-search fa-lg"></i>&nbsp;&nbsp;</button>
				</div>	
			</div>
		</div>
	</div>
	<div class="row my-weather">
		
	</div>
	
</div>
<script src="https://cdn.bootcss.com/flot/0.8.3/jquery.flot.js"></script>


<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".btn-s").click(function(event) {
			/* Act on the event */
			var city=$("#city-picker").val();
			//alert(city);
			if(city!=""){
				postCity(city);
			}else{
				alert("请输入城市名称查询");
			}
			//alert(city);
		});
		$(".btn-s").click();
	});
	function postCity(city){
		var url='<?php echo U("Apps/Weather/getWeather");?>';	
		$.post(url, {city: city}, function(data, textStatus, xhr) {
			/*optional stuff to do after success */
			//alert(data);
			if(data['status']==1){
				//alert(data['info']);
				$('.my-weather').html(data['info']);
			}else{
				alert("请输入正确的城市名称再次查询");
			}
		});	
	}
</script>
	</div>
	<div class="container">
		<button class="btn btn-success thumb-up"> 
			&nbsp;我觉得这个应用不错，我要点赞&nbsp;<i class="fa fa-thumbs-up fa-lg"></i><span class="love_times"><?php echo ($love_times); ?></span>&nbsp;
		</button>
	</div>
	<div class="comment">
	</div>
	
<style type="text/css">
	li,ul,ol{
		list-style: none;
		display: inline-block;
	}
	.my-footer{
		background: #eeeeee;		
	}
	.copyright{
		font-size: 1.1em;
		margin-top: 0.5em;
	}
	
	.copyright-donation{
		padding:0;
		padding-left: 0.5em;
	}
	.copyright-donation img{
		height: 8em;
	}
	.copyright-donation h5{
		width: 100%;
		text-align: center;
		padding-bottom: 0;
		margin-bottom: 0;
	}
	.contact span{
		font-size: 1em;
		display: inline-block;
		padding: 0.5em;
	}
	.contact a{
		text-decoration: none;
	}
	.about{
		height: 12em;
	}
	.about div{
		padding-left:0.5em;
		line-height: 2em;
	}
	
/*	.copyright-toast {
		position: absolute;
		bottom: 0;
	}*/

</style>

<div class="container my-footer">
	<div class="row copyright">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-5">
					<h4><i class="fa fa-credit-card fa-lg"></i>&nbsp;小额捐赠&nbsp;|&nbsp;Donation</h4>
					<ul class="copyright-donation">
						<li>
							<img src="/xhust/thinkphp/Public/Apps/alipay.gif"/>
							<h5>支付宝</h5>
						</li>&nbsp;&nbsp;&nbsp;&nbsp;
						<li>
							<img src="/xhust/thinkphp/Public/Apps/wechat.gif"/>
							<h5>微信支付</h5>
						</li>
					</ul>
				</div>
				<div class="col-md-7 contact">
					<h4><i class="fa fa-address-book fa-lg"></i>&nbsp;联系我&nbsp;|&nbsp;Contact me</h4>
					<span><i class="fa fa-envelope fa-lg"></i>&nbsp;电子邮件:</span>
					<a href="mailto:<?php echo ($contact["email"]); ?>"><?php echo (C("contact.email")); ?></a><br/>
					<span><i class="fa fa-weibo fa-lg"></i>&nbsp;新浪微博:</span>
					<a href="<?php echo (C("contact.weibo")); ?>" target="_blank"><?php echo (C("contact.weibo")); ?></a>
					<br/>
					<span><i class="fa fa-rss-square fa-lg"></i>&nbsp;博客园:</span>
					<a href="<?php echo (C("contact.cnblog")); ?>" target="_blank"><?php echo (C("contact.cnblog")); ?></a><br/>
					<span><i class="fa fa-github fa-lg"></i>&nbsp;Github:</span>
					<a href="<?php echo (C("contact.github")); ?>" target="_blank"><?php echo (C("contact.github")); ?></a><br/>
				</div>
			</div>
		</div>
		<div class="col-md-4 about">
			<h4><i class="fa fa-info-circle fa-lg"></i>&nbsp;关于&nbsp;|&nbsp;About</h4>
			<div><?php echo (C("contact.about")); ?></div>
			<div>Gratitude for Thinkphp, Github, Bootstarp, Fontawesome, jQuery.</div>
			<div>Designed for a girl@magua</div>
			<div class="copyright-toast"><?php echo (C("contact.copyright")); ?></div>
		</div>
	</div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		
	});
</script>
	
	<script type="text/javascript">
		var pt=$(".mynavdiv").height();
		$('.my-container').css('padding-top',pt);
		jQuery(document).ready(function($) {

			var url="<?php echo get_app_url($app_id);?>";
			//alert(url);
			$('.comment').load(url);

			$(window).resize(function(event) {
				/* Act on the event */
				var pt=$(".mynavdiv").height();
				///alert(pt);
				$('.my-container').css('padding-top',pt);
			});
			$(".thumb-up").click(function(event) {
				/* Act on the event */
				var url='<?php echo U("Home/Index/addHeart");?>';
				var appid='<?php echo ($app_id); ?>';
				$.post(url, {id: appid}, function(data, textStatus, xhr) {
					/*optional stuff to do after success */
					if(data['status']==1){
						$(".love_times").text(data['data']);
					}
				});	
			});
		});
	</script>
</body>
</html>