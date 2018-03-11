<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>xhust</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="/xhust/thinkphp/Public/Apps/xhust.ico">
</head>
<style type="text/css">
	.my-container{
		padding-top:5em;
		padding: 0 0.3em 0 0.3em;
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
	}
	body{
		background: #eeeeee;
	}
</style>
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

<!-- 

<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/bootstrap/css/bootstrap-responsive.min.css" />
<script type="text/javascript" src="/xhust/thinkphp/Public/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/font-awesome-4.7.0/css/font-awesome.min.css" /> -->

<!-- 
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/jQuery-emoji/lib/css/jquery.mCustomScrollbar.min.css" />
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/jQuery-emoji/dist/css/jquery.emoji.css" />
<script type="text/javascript" src="/xhust/thinkphp/Public/jQuery-emoji/lib/script/jquery.mousewheel-3.0.6.min.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/jQuery-emoji/lib/script/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/jQuery-emoji/dist/js/jquery.emoji.min.js"></script> -->

<!-- <link href="https://cdn.bootcss.com/emojione/2.2.7/assets/css/emojione.min.css" rel="stylesheet">
<link href="https://cdn.bootcss.com/emojione/2.2.7/assets/sprites/emojione.sprites.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/emojione/2.2.7/lib/js/emojione.min.js"></script>

<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/emojionearea/emojionearea.min.css" />

<script type="text/javascript" src="/xhust/thinkphp/Public/emojionearea/emojionearea.min.js"></script> -->



 

<!-- <script type="text/javascript" src="/xhust/thinkphp/Public/Box/box.js"></script>
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/Box/box.css" /> -->
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/lobibox/css/Lobibox.min.css" />
<script type="text/javascript" src="/xhust/thinkphp/Public/lobibox/js/lobibox.min.js"></script>

<script type="text/javascript">
	/*
           width:  宽度,
           height: 最小高度,
           type: 'warning'|'error'|'success'|'info'|'question',
           showConfirmButton: 是否显示确认按钮,
           showCancelButton: 是否显示取消按钮,
           confirmButtonText: '确认',
           cancelButtonText: '取消'
	function alert_alt(txt, callback,tilte="",type="info", ok="确定"){
		alert(tilte, txt, function () {
			callback();
    	}, {type: type, confirmButtonText: ok});
	}
	function confirm_alt(title="",txt,callback1, callback2,type="info",ok="确定", cancel="取消"){
		confirm(title, txt , function (isConfirm) {
            if (isConfirm) {
                callback1();
            } else {
               callback2();
            }
        }, {confirmButtonText: ok, cancelButtonText: cancel, width: 400});
	}
  */
  function alert_alt(txt,callback1){
      Lobibox.alert('info', {
        msg: txt,
        buttons: {
            ok: {
                'class': 'btn btn-info',
                closeOnClick: true
            },           
        },
        callback: function (lobibox, type) {
            var btnType;
            if (type === 'no') {
                btnType = 'warning';
            } else if (type === 'yes') {
                btnType = 'success';
            } else if (type === 'ok') {
                btnType = 'info';
               
            } else if (type === 'cancel') {
                btnType = 'error';
            }
           /* Lobibox.notify(btnType, {
                size: 'mini',
                msg: 'This is ' + btnType + ' message'
            });*/
            callback1();
        }
    });
  }
  function prompt_alt(title,ph,callback1){
      Lobibox.prompt('text', {
          title: title,
          attrs: {
              placeholder: ph
          },
          callback: function (lobibox, type){
            if(type=='ok'){
               callback1(lobibox.getValue());
            }
          }
      });
  }
  function confirm_alt(txt,callback1,callback2){
      Lobibox.confirm({
          msg: txt,
          callback:function (lobibox, type){
              if(type=='yes'){
                  callback1();
              }else if(type=='no'){
                callback2();
              }
          }
      });
  }
</script>
<body style="background: #eeeeee;">
	<style type="text/css">.mynavdiv{padding: 0;margin: 0;}.mynav{background: #2A2730;margin-top:0em;padding:0.3em;width: 100%;}.mynav>li{width: 7em;padding: 0;margin: 0;}.mynav>li:hover{background:rgba(255,255,255,0.5);}.mynav>li>a{font-size: 1.2em;color: white;width: 100%;height: 100%;}.mynav>li>a>span{font-size: 0.9em;}.mynav>li>a:hover{color:black;font-weight: bold;background: transparent;border:0px;}.mynav>li>a:focus{background:transparent;color: white;}#li-x{width: 4em;}#li-x:hover{background: transparent;}#li-x a img{height: 1.2em;}</style><nav class="navbar navbar-fixed-top mynavdiv"><div <?php echo choose_class();?>><ul class="nav nav-tabs mynav"> <li role="presentation" id="li-x"><a href='<?php echo U("Home/Index/index");?>'><img src="/xhust/thinkphp/Public/Apps/xhust.ico"/></a></li> <li role="presentation"><a href='<?php echo U("Home/Index/index#my-app-position");?>'><span class="glyphicon glyphicon-home" aria-hidden="true"></span> &nbsp;应用</a></li> <li role="presentation"><a href="<?php echo U('Home/Index/index#my-blog-position');?>" target="_self"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span> &nbsp;博客</a></li></ul></div></nav>	
	<div <?php echo choose_class();?>>
		<div class="my-container">
			<?php if(($app_id) != "0"): ?><div class="row">
					<div class="col-md-12">
						<h3 class="app-title">
							<i class="fa fa-<?php echo ($app_data[$app_id]['icon_font']); ?> fa-1x"></i>
							
							<?php echo ($app_data[$app_id]['name']); ?>
							|
							<?php echo ($app_data[$app_id]['name_en']); ?>
						</h3>
					</div>
				</div><?php endif; ?>
			
<style type="text/css">
	.my-weather{
		padding-bottom: 1em;
		margin: 0 0.5em 0 0.5em;
	}
	.app-title{
		
	}
	.search-s{
		float: right;
	}
	#city-picker{
		word-break:keep-all;
		display: block;
		white-space:nowrap;
		overflow:hidden;
		text-overflow:ellipsis;
	}
	#city-picker>div{

	}
</style>
<script type="text/javascript" src="/xhust/thinkphp/Public/citypicker/js/city-picker.data.min.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/citypicker/js/city-picker.min.js"></script>
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/citypicker/css/city-picker.css" />
<div  class="app-container">
	<div class="row">
		<div class="col-md-6">
			<div  class="row">
				<div class="col-md-8">
					<div class="form-group">
	                	<div>
	                    	<input  id="city-picker" class="form-control" readonly type="text" value="湖北省/武汉市/洪山区" data-toggle="city-picker"/>
	                	</div>
	            	</div>
				</div>
				<div class="col-md-4">					
					<button class="btn-s btn btn-default">&nbsp;&nbsp;<i class="fa fa-search fa-1x"></i>&nbsp;&nbsp;</button>
					<span class="loader" style="display:none;">
						<span style="color: green;font-weight: normal;">
	<span>加载中...&nbsp;&nbsp;</span><i class="fa fa-spinner fa-spin fa-1x"></i>
</span>

					</span>
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
			var city=$("#city-picker").val();
			if(city!=""){
				postCity(city);
			}else{
				alert("请输入城市名称查询");
			}
		});
		$(".btn-s").click();
	});
	function postCity(city){
		$(".loader").css("display","inline-block");
		var url='<?php echo U("Apps/Weather/getWeather");?>';	
		$.post(url, {city: city}, function(data, textStatus, xhr) {
			if(data['status']==1){
				$('.my-weather').html(data['info']);
			}else{
				alert("请输入正确的城市名称再次查询");
			}
			$(".loader").css("display","none");
		});	
	}
</script>
			<?php if(($app_id) != "0"): ?><div class="row">
					<div class="col-md-4 col-sm-5 col-xs-8">
						<button class="btn btn-success thumb-up"> 
							&nbsp;我觉得这个应用不错，我要点赞&nbsp;<i class="fa fa-thumbs-up fa-lg"></i><span class="love_times"><?php echo ($app_data[$app_id]['love_times']); ?></span>&nbsp;
						</button>
					</div>
					<div class="col-md-2 col-sm-3 col-xs-5">
						<div class="bdsharebuttonbox" data-tag="share_app">
	<a class="bds_tsina" data-cmd="tsina"></a>
	<a class="bds_weixin" data-cmd="weixin"></a>
	<a class="bds_qzone" data-cmd="qzone" href="#"></a>
</div>
<script>
  function getShareText(){
    if($(".app-title").text()==""){
      return $(document).attr("title");
    }else{
      return $(".app-title").text();
    }
  }
  window._bd_share_config={
    common:{
      bdText:getShareText(),
      bdDesc:getShareText(),
    },
    share:[{
      "tag":"share_home",
      "bdSize":24,
    },{
      "tag":"share_app",
      "bdSize":24,
    }]
  }
  with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
</script>
					</div>
				</div><?php endif; ?>
			<div class="comment">
				<?php echo W('Comment/index',array($app_id));?>
			</div>
			<style type="text/css">li,ul,ol{list-style: none;display: inline-block;}.my-footer{background: #eeeeee;}.copyright{font-size: 1.1em;margin-top: 0.5em;}.copyright-donation{padding:0;padding-left: 0.5em;}.copyright-donation img{height: 8em;}.copyright-donation h5{width: 100%;text-align: center;padding-bottom: 0;margin-bottom: 0;}.contact span{font-size: 1em;display: inline-block;padding: 0.5em;}.contact a{text-decoration: none;}.about{height: 12em;}.about div{padding-left:0.5em;line-height: 2em;}/*.copyright-toast {position: absolute;bottom: 0;}*/</style><div class="my-footer"><div class="row copyright"><div class="col-md-8"><div class="row"><div class="col-md-5"><h4><i class="fa fa-credit-card fa-1x"></i>&nbsp;小额捐赠&nbsp;|&nbsp;Donation</h4><ul class="copyright-donation"><li><img src="/xhust/thinkphp/Public/Apps/alipay.gif"/><h5>支付宝</h5></li>&nbsp;&nbsp;&nbsp;&nbsp;<li><img src="/xhust/thinkphp/Public/Apps/wechat.gif"/><h5>微信支付</h5></li></ul></div><div class="col-md-7 contact"><h4><i class="fa fa-address-book fa-1x"></i>&nbsp;联系我&nbsp;|&nbsp;Contact me</h4><span><i class="fa fa-envelope fa-1x"></i>&nbsp;电子邮件:</span><a href="mailto:<?php echo ($contact["email"]); ?>"><?php echo (C("contact.email")); ?></a><br/><span><i class="fa fa-weibo fa-1x"></i>&nbsp;新浪微博:</span><a href="<?php echo (C("contact.weibo")); ?>" target="_blank"><?php echo (C("contact.weibo")); ?></a><br/><span><i class="fa fa-rss-square fa-1x"></i>&nbsp;博客园:</span><a href="<?php echo (C("contact.cnblog")); ?>" target="_blank"><?php echo (C("contact.cnblog")); ?></a><br/><span><i class="fa fa-github fa-1x"></i>&nbsp;Github:</span><a href="<?php echo (C("contact.github")); ?>" target="_blank"><?php echo (C("contact.github")); ?></a><br/></div></div></div><div class="col-md-4 about"><h4><i class="fa fa-info-circle fa-1x"></i>&nbsp;关于&nbsp;|&nbsp;About</h4><div><?php echo (C("contact.about")); ?></div><div>Gratitude for Thinkphp, Github, Bootstarp, Fontawesome, jQuery.</div><div>Designed for a girl@magua</div><div class="copyright-toast"><?php echo (C("contact.copyright")); ?></div></div></div></div><script type="text/javascript">jQuery(document).ready(function($) {});</script>
		</div>
	</div>
	<style type="text/css">
	.anchor{
		position: fixed;
		bottom: 1em;
		right: 1em;
	}
	.anchor>a{
		font-size: 2em;
		color: #5BC0DE;
	}
	.anchor>a:hover{
		font-size: 2em;
		color: rgba(91,192,222,0.5);
	}
</style>
<div class="anchor">
	<a href="#"><i class="fa fa-arrow-circle-up fa-lg"></i></a>
</div>	
</body>
	<script type="text/javascript">
		var pt=$(".mynavdiv").height();
		$('.my-container').css('padding-top',pt);
		jQuery(document).ready(function($) {

			$(window).resize(function(event) {
				var pt=$(".mynavdiv").height();
				$('.my-container').css('padding-top',pt);
			});
			$(".thumb-up").click(function(event) {
				var url='<?php echo U("Home/Index/addHeart");?>';
				var appid='<?php echo ($app_id); ?>';
				$.post(url, {id: appid}, function(data, textStatus, xhr) {
					if(data['status']==1){
						$(".love_times").text(data['data']);
					}
				});	
			});
			$(window).load(function() {
				document.addEventListener('touchstart',function (event) {  
	            if(event.touches.length>1){  
	                event.preventDefault();  
	            	}  
	       		}); 
	        	var lastTouchEnd=0;  
	        	document.addEventListener('touchend',function (event) {  
	            	var now=(new Date()).getTime();  
	            	if(now-lastTouchEnd<=300){  
	                	event.preventDefault();  
           			}  
        			lastTouchEnd=now;  
        		},false);  
			});
		});
	</script>
</html>