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
<style type="text/css">
	.my-container{
		padding-top:5em;
		background: #eeeeee;
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
	
<style type="text/css">
	h3{
		margin: 0;
		padding: 0.2em;
	}
	.weather-info{
		padding: 0;
		margin: 0em;
		background: red;
		width: 100%;
	}
	.weather-info>div{
		background: green;
		height: 10em;
	}
	.weather-info>div>img {
		height: 100%;
	}
	.weather-info>div span{
		padding-top: 0.4em;
		display: inline-block;
		font-size: 1em;
	}
</style>
<div class="container my-container">
	<div class="row">
		<div class="col-md-6">
			<div class="row weather-info">
				<div class="col-md-4">
					<img src="/xhust/thinkphp/Public/Apps/Weather/img/中雪.gif">
				</div>
				<div class="col-md-4">
					<h3>中雪</h3>
					<span>东北风</span><br>
					<span>高温6低温-2</span><br>
					<span>2018.1.23星期三</span>
				</div>
				<div class="col-md-4" style="max-width: 33%;">
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span>天冷空气湿度大天冷空气湿度大天冷空气湿度大</span>
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<ul>
				<?php echo ($info); ?>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6"></div>
		<div class="col-md-6"></div>
	</div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		
	});
	function postCity(){
		var url='<?php echo U("Apps/Weather/getWeather");?>';
		var city="武汉";
		$.post(url, {city: city}, function(data, textStatus, xhr) {
			/*optional stuff to do after success */
			alert(data);
		});	
	}
</script>
	
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
	}
	
	.copyright-toast {
		position: absolute;
		bottom: 0;
	}

</style>

<div class="container my-footer">
	<div class="hashover">
		<script type="text/javascript" src="/xhust/thinkphp/hashover.php"></script>
		<noscript>你的浏览器需要支持JS才能加载此评论.</noscript>
	</div>
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
			$(window).resize(function(event) {
				/* Act on the event */
				var pt=$(".mynavdiv").height();
				///alert(pt);
				$('.my-container').css('padding-top',pt);
			});
	
		});
	</script>
</body>
</html>