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
<!--
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/font-awesome-4.7.0/css/font-awesome.min.css" />
-->
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/jQuery-emoji/lib/css/jquery.mCustomScrollbar.min.css" />
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/jQuery-emoji/dist/css/jquery.emoji.css" />
<script type="text/javascript" src="/xhust/thinkphp/Public/jQuery-emoji/lib/script/jquery.mousewheel-3.0.6.min.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/jQuery-emoji/lib/script/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/jQuery-emoji/dist/js/jquery.emoji.min.js"></script>

<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/Css/Home/index.css" />
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/Slippry/slippry.css" />
<script type="text/javascript" src="/xhust/thinkphp/Public/Slippry/slippry.min.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/jquery.particleground.js"></script>

<script type="text/javascript" src="/xhust/thinkphp/Public/Js/Home/index.js"></script>

<body style="background: #eeeeee;">
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
		<div class="row">
			<div class="col-md-8">
				<ul class="slippry-ppt">
					<li class="slippry-one">
						<svg width="900" height="500"></svg>
<style>

.links {
  stroke: #000;
  stroke-opacity: 0.2;
}

.polygons {
  fill: none;
  stroke: #000;
}

.polygons :first-child {
  fill: #f00;
}

.sites {
  fill: #000;
  stroke: #fff;
}

.sites :first-child {
  fill: #fff;
}
</style>
<script>
	var svg = d3.select("svg").on("touchmove mousemove", moved);
    var width = +svg.attr("width");
	var height = +svg.attr("height");

	var sites = d3.range(100)
	    .map(function(d) { return [Math.random() * width, Math.random() * height]; });

	var voronoi = d3.voronoi()
	    .extent([[-1, -1], [width + 1, height + 1]]);

	var polygon = svg.append("g")
	    .attr("class", "polygons")
	  .selectAll("path")
	  .data(voronoi.polygons(sites))
	  .enter().append("path")
	    .call(redrawPolygon);

	var link = svg.append("g")
	    .attr("class", "links")
	  .selectAll("line")
	  .data(voronoi.links(sites))
	  .enter().append("line")
	    .call(redrawLink);

	var site = svg.append("g")
	    .attr("class", "sites")
	  .selectAll("circle")
	  .data(sites)
	  .enter().append("circle")
	    .attr("r", 2.5)
	    .call(redrawSite);

	function moved() {
	  sites[0] = d3.mouse(this);
	  redraw();
	}

	function redraw() {
	  var diagram = voronoi(sites);
	  polygon = polygon.data(diagram.polygons()).call(redrawPolygon);
	  link = link.data(diagram.links()), link.exit().remove();
	  link = link.enter().append("line").merge(link).call(redrawLink);
	  site = site.data(sites).call(redrawSite);
	}

	function redrawPolygon(polygon) {
	  polygon
	      .attr("d", function(d) { return d ? "M" + d.join("L") + "Z" : null; });
	}

	function redrawLink(link) {
	  link
	      .attr("x1", function(d) { return d.source[0]; })
	      .attr("y1", function(d) { return d.source[1]; })
	      .attr("x2", function(d) { return d.target[0]; })
	      .attr("y2", function(d) { return d.target[1]; });
	}

	function redrawSite(site) {
	  site
	      .attr("cx", function(d) { return d[0]; })
	      .attr("cy", function(d) { return d[1]; });
	}

</script>
					</li>
					<li class="slippry-two"></li>
				</ul>
			</div>
			<div class="col-md-4">
				<div class="c-date">
					<div class="home-weater">
						<ul>
							<li>
								<img src="/xhust/thinkphp/Public/Apps/Weather/img/<?php echo ($weather_info['data']['forecast'][0]['type']); ?>.gif">
							</li>
							<li>
								<div>
									<h3 class="h3-title"><?php echo ($weather_info['data']['city']); ?></h3><br/>
									<h3 class="h3-title"><?php echo ($weather_info['data']['forecast'][0]['type']); ?></h3>

									<span style="font-size: 1.2em;margin-left: 0.8em;"><?php echo ($weather_info['data']['forecast'][0]['fengxiang']); ?></span>
									<br/>
									<span><?php echo ($weather_info['data']['forecast'][0]['high']); ?>&nbsp;&nbsp;
									<?php echo ($weather_info['data']['forecast'][0]['low']); ?></span><br>
									<span>
										<?php  date_default_timezone_set("PRC"); echo (date("Y年m").'月'.$weather_info['data']['forecast'][0]['date']); ?>
										
									</span>
									<br>
									
									
								</div>
							</li>
						</ul>
					</div>
					<div class="home-ip">
						<div>
							<span>您的IP地址是&nbsp;</span><span class="ip-info"><?php echo ($user_info['ip']); ?></span>。
						</div>
						<div>
							<span>您所在地区是&nbsp;</span><span class="ip-info"><?php echo ($user_info['place']); ?></span>。
						</div>
						<div>
							<span>您的浏览器是&nbsp;</span><span class="ip-info"><?php echo ($user_info['browser']); ?></span>。
						</div>
						<div>
							<span>您的操作系统&nbsp;</span><span class="ip-info"><?php echo ($user_info['os']); ?></span>。
						</div>
					</div>	
													
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<h3><i class="fa fa-th-large fa-lg"></i>&nbsp;应用&nbsp;|&nbsp;Apps</h3>
				<ul class="my-apps">
					<?php if(is_array($apps)): $i = 0; $__LIST__ = $apps;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
							<a href=<?php echo generate_url($vo['url'],$vo['id']);?> target="_blank">
								<img src="/xhust/thinkphp/Public/Apps/Icon/<?php echo ($vo["icon"]); ?>.gif"/>
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
							<a href=<?php echo generate_url($vo['url'],$vo['id']);?> target="_blank"><?php echo ($vo["name"]); ?></a>
							<span>
								<a href="javascript:void(0);"><i id="<?php echo ($vo["id"]); ?>" class="my-heart fa fa-heart fa-lg"></i></a>&nbsp;
								<span id="<?php echo ($vo["id"]); ?>" class="love_times"><?php echo ($vo["love_times"]); ?></span>
							</span>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>		
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
</body>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".slippry-ppt").slippry();
		$(".slippry-two").particleground();
		$(".slippry-ppt>li").css("display","block");
		var url="<?php echo U('Home/Page/index?app_id=0');?>";
		$('.comment').load(url);

	});
	
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
</html>