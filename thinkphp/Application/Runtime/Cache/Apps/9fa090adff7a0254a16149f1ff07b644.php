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
		
<?php
 $seal_fonts=array('隶书','方正姚体','仿宋','黑体','华文仿宋 ','华文宋体','华文细黑','华文中宋 ','楷体','微软雅黑','微软雅黑(粗)','幼圆','华康少女 ','华文楷体','华文琥珀','华文彩云','华文行楷','华文隶书','华文新魏','方正小篆体','金文大篆体','方正启体简体','方正水柱_GBK','汉仪篆书繁','迷你简娃娃篆 ','经典繁方篆','方正剪紙繁體 ','方正细珊瑚繁体','方正准圆繁体','方正行楷繁体'); ?>

<style type="text/css">
	.seal-generate{
		padding-top:0.5em;
	}
	ul{
		margin: 0;
		padding: 0;
		display: inline-block;
	}
	.seal-img{
		height: 9em;
		margin-top:1.5em;
	}
	.seal-img>div{
		margin: 0 1em 0 1em;
	}
	.seal-img img{
		
		height: 7em;
		width: 7em;
		display: inline-block;
	}
	.seal-img>span{
		display: inline-block;
		width: 9em;
		line-height: 2em;
		text-align: center;
		font-weight: bold;
	}
</style>
<div class="app-container">
	<div class="row">
		<div class="col-md-6">
			<h3 class="app-title"><i class="fa fa-fonticons fa-lg"></i>&nbsp;方形印章&nbsp;|&nbsp;Seal</h3>
		</div>
		<div class="col-md-6">
			<div class="form-inline seal-generate">
				<div class="form-group">
                	<input placeholder="请输入2-4个汉字" type="text" name="input_text" class="form-control">
            	</div>
            	<div class="form-group">
            		<select name="seal_kind" class="form-control">
					  <option value="-1">随机</option>
					  <option value="0">阳文</option>
					  <option value="1">阴文</option>
					</select>
            	</div>
				<div class="form-group">
					<button class="btn-s btn btn-default">&nbsp;&nbsp;生成印章&nbsp;&nbsp;</button>
				</div>	
			</div>
		</div>
	</div>
	<div class="seal-content">
		<ul>
			<?php $__FOR_START_25777__=0;$__FOR_END_25777__=30;for($i=$__FOR_START_25777__;$i < $__FOR_END_25777__;$i+=1){ ?><li>
					<div class="seal-img">
						<div><img class="img-result" src="http://hbh-hbh.7e14.starter-us-west-2.openshiftapps.com/Seal/php/get_img.php?font=<?php echo ($i); ?>"></div>
						<span><?php echo ($seal_fonts[$i]); ?></span>
					</div>
				</li><?php } ?>
		</ul>
	</div>
	<div style="margin-top:1em;"></div>
</div>
<script type="text/javascript">
	function getKind() {
	    var k = $("select[name='seal_kind']").val();
	    if (k == 1 || k == 0) {
	        return k;
	    } else {
	        var r = Math.random();
	        if (r < 0.5) {
	            return 0;
	        } else {
	            return 1;
	        }
	    }
	}

	function chinestTest(s) {
	    for (var i = 0; i < s.length; i++)
	        if (s.charCodeAt(i) < 0x4E00 || s.charCodeAt(i) > 0x9FA5) {
	            return false;
	        }
	    return true;
	}
	jQuery(document).ready(function($) {
		$(".btn-s").click(function(event) {
			/* Act on the event */
			var name = $("input[name='input_text']").val();
		    if (name != "") {
		        if (chinestTest(name)) {
		            if(name.length<2||name.length>4){
		                alert("请输入2-4个汉字！");
		            }else{
		            	//alert(getKind());
		                $(".img-result").each(function(index) {		     
			                var kind = getKind();
			                var url = "http://hbh-hbh.7e14.starter-us-west-2.openshiftapps.com/Seal/php/get_img.php?font=" + index + "&kind=" + kind + "&name=" + name;
			                $(this).attr("src", url);
		           		});
		            }
		        }else{
		            alert("请输入汉字!");
		        }
		    }else{
		        alert("输入为空！");
		    }
		});
	});
</script>
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
	
		});
	</script>
</body>
</html>