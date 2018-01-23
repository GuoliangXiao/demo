<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>xhust</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
<!--
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/font-awesome-4.7.0/css/font-awesome.min.css" />
<script type="text/javascript" src="/xhust/thinkphp/Public/Js/jquery-2.1.0.min.js"></script>
-->
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/Css/Home/index.css" />
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/Slippry/slippry.css" />
<script type="text/javascript" src="/xhust/thinkphp/Public/Slippry/slippry.min.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/jquery.particleground.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/Letter/jquery.hoverwords.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/Letter/jquery.lettering.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/Letter/jquery.easing.1.3.js"></script>

<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/Calendar/simple-calendar.css" />
<script type="text/javascript" src="/xhust/thinkphp/Public/Calendar/simple-calendar.js"></script>

<script type="text/javascript" src="/xhust/thinkphp/Public/Js/Home/index.js"></script>

<body style="background: #107987;">
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
		color: black;
	}
	.active1{
		background:transparent;
	}
</style>
<nav class="navbar navbar-fixed-top mynavdiv">
	<div class="container">
		<ul class="nav nav-tabs mynav">
		  <li role="presentation"><a href="<?php echo ($home); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> &nbsp;首页</a></li>
		  <li role="presentation"><a href="#"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> &nbsp;应用</a></li>
		  <li role="presentation"><a href="<?php echo (C("contact.cnblog")); ?>" target="_blank"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span> &nbsp;博客</a></li>
		</ul>
	</div>
</nav>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		
	});
</script>
	<div class="container main">
		<div class="row">
			<div class="col-md-8">
				<ul class="slippry-ppt">
					<li class="slippry-one">
						<a href="#" id="example1" >HELLO</a>
						<a href="#" id="example2" >DARLING!</a>
						<br/>
						<a href="#" id="example3" >WELCOME</a>
						<a href="#" id="example4" >TO</a>
						<a href="#" id="example5" >MY</a>
						<a href="#" id="example6" >WORLD!</a>
					</li>
					<li class="slippry-two"></li>
					<li>4</li>
					<li>5</li>
				</ul>
			</div>
			<div class="col-md-4">
				<div class="c-date">
					<div class="my-date"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<h3><i class="fa fa-th-large fa-lg"></i>&nbsp;应用&nbsp;|&nbsp;Apps</h3>
				<ul class="my-apps">
					<?php if(is_array($apps)): $i = 0; $__LIST__ = $apps;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href="#">
								<img src="/xhust/thinkphp/Public/Apps/Icon/<?php echo ($vo["name"]); ?>.gif"/>
								<span><?php echo ($vo["name"]); ?></span>
							</a>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="col-md-4">
				<h3><i class="fa fa-thumbs-up fa-lg"></i>&nbsp;点赞排行</h3>
				<ul class="loved-apps">
					<?php if(is_array($loves)): $i = 0; $__LIST__ = $loves;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<strong><?php echo ($i); ?>.</strong>
							<a href="#"><?php echo ($vo["name"]); ?></a>
							<span>
								<a href="javascript:void(0);"><i id="<?php echo ($vo["id"]); ?>" class="my-heart fa fa-heart fa-lg"></i></a>&nbsp;
								<span id="<?php echo ($vo["id"]); ?>" class="love_times"><?php echo ($vo["love_times"]); ?></span>
							</span>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<style type="text/css">
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
			<div><?php echo (C("about")); ?></div>
			<div class="copyright-toast"><?php echo (C("copyright")); ?></div>
		</div>
	</div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		
	});
</script>
</body>
<script type="text/javascript">
	$('.my-heart').click(function(event) {
		/* Act on the event */
		//alert($(this).attr('id'));
		var url='<?php echo U("Home/Index/addHeart");?>';
		var appid=$(this).attr('id');
		$.post(url, {id: appid}, function(data, textStatus, xhr) {
			/*optional stuff to do after success */
			if(data['status']==1){
				$(".love_times[id="+appid+"]").text(data['data']);
			}
		});
	});
</script>
</html>