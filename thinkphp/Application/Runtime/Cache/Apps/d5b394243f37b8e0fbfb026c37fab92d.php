<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><html><head><title>xhust</title><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><link rel="shortcut icon" href="/xhust/thinkphp/Public/Apps/xhust.ico"></head><style type="text/css">.my-container{padding-top:5em;padding: 0 0.3em 0 0.3em;}.app-container{}.app-title{display: inline-block;margin: 0.5em 0 0.5em 0;background: transparent;}.thumb-up{font-size: 1.2em;margin: 0em;}body{background: #eeeeee;}</style><script
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
</script><body style="background: #eeeeee;"><style type="text/css">.mynavdiv{padding: 0;margin: 0;}.mynav{background: #2A2730;margin-top:0em;padding:0.3em;width: 100%;}.mynav>li{width: 7em;padding: 0;margin: 0;}.mynav>li:hover{background:rgba(255,255,255,0.5);}.mynav>li>a{font-size: 1.2em;color: white;width: 100%;height: 100%;}.mynav>li>a>span{font-size: 0.9em;}.mynav>li>a:hover{color:black;font-weight: bold;background: transparent;border:0px;}.mynav>li>a:focus{background:transparent;color: white;}#li-x{width: 4em;}#li-x:hover{background: transparent;}#li-x a img{height: 1.2em;}</style><nav class="navbar navbar-fixed-top mynavdiv"><div <?php echo choose_class();?>><ul class="nav nav-tabs mynav"> <li role="presentation" id="li-x"><a href='<?php echo U("Home/Index/index");?>'><img src="/xhust/thinkphp/Public/Apps/xhust.ico"/></a></li> <li role="presentation"><a href='<?php echo U("Home/Index/index#my-app-position");?>'><span class="glyphicon glyphicon-home" aria-hidden="true"></span> &nbsp;应用</a></li> <li role="presentation"><a href="<?php echo U('Home/Index/index#my-blog-position');?>" target="_self"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span> &nbsp;博客</a></li></ul></div></nav><div <?php echo choose_class();?>><div class="my-container">
<style type="text/css">
	.qr-div{
	}
	.qr-menu{
	}
	.qr-content{
		margin-bottom: 0.5em;
	}
	.qr-content>div{
		display: none;
	}
	.qr-card{
		margin-top:0.5em;
	}
	.allmap{
		height: 20em;
		width: 100%;
	}
	.btn-gen{
		margin: 0.5em 0 0.5em 0;
		width: 100%;
	}
	.qr-result{
		text-align: center;
		vertical-align: center;
	}
	#img_result{
		display: inline-block;
	}
	.qr-img{
		max-height: 25em;
	}
	.temp-img>ul,.temp-img>ul>li{
		padding: 0;
		margin: 0;
		display: inline-block;

	}
	.temp-img>ul{
		text-align: center;
	}
	.qr-logo-1{
		width: 4em;
		padding: 0.1em;
	}
	.qr-logo-1:hover{
		width: 4.5em;
	}
	.qr-logo-upload{
		margin: 0.5em;
	}
	.upload-img{
	}
	.btn-logo{
		width: 100%;
	}
	.logo-img{
		max-width: 8em;
		max-height: 8em;
	}
</style>
<div class="app-container">
	<div class="row">
		<div class="col-md-6">
			<h3 class="app-title"><i class="fa fa-qrcode fa-1x"></i>&nbsp;二维码&nbsp;|&nbsp;QRCode</h3>
		</div>
		<div class="col-md-6"></div>
	</div>
	<div class="row">
		<div class="col-md-6 qr-div">
			<ul class="nav nav-tabs nav-justified qr-menu">
				<li id="1" role="presentation" class="active"><a href="#">网址</a></li>
				<li id="2" role="presentation"><a href="#">名片</a></li>
				<li id="3" role="presentation"><a href="#">短信</a></li>
				<li id="4" role="presentation"><a href="#">位置</a></li>				
			</ul>
			<div class="qr-content">
				<div class="qr-net" style="display: block;">
					<div class="form-group">
					    <label for="qr-txt">请输入文本(网址)</label>
					    <textarea id="qr-txt" class="form-control" rows="6" placeholder="请输入文本(网址)">http://xhust.tk</textarea>
				  	</div>
				</div>
				<div>
					<?php $info=array(array('姓名','text'),array('电话','number'),array('邮箱','email'),array('地址','text'),array('生日','text'),array('昵称','text'),array('备注','text')); ?>
					<?php if(is_array($info)): foreach($info as $key=>$vo): ?><div class="input-group qr-card">
							<span class="input-group-addon" id="<?php echo ($i); ?>"><?php echo ($vo[0]); ?></span>
							<input type="<?php echo ($vo[1]); ?>" class="form-control" placeholder="<?php echo ($vo[0]); ?>" aria-describedby="<?php echo ($i); ?>">
						</div><?php endforeach; endif; ?>
				</div>
				<div>
					<div class="form-group">
					    <label for="smsto">输入电话号码</label>
					    <input type="number" name="tel" id="smsto" class="form-control smsto" placeholder="输入电话号码">
				  	</div>
					<div class="form-group">
					    <label for="sms">请输入短信内容</label>
					    <textarea id="sms" class="form-control sms" rows="5" placeholder="请输入短信内容"></textarea>
				  	</div>
				</div>
				<div>
					<div class="allmap" id="allmap"></div>
				</div>
			</div>
			<div class="input-group">
				<span class="input-group-addon" id="size">二维码尺寸</span>
				<input type="number" class="form-control qr-size" value="300" aria-describedby="size" onkeyup="this.value=this.value.replace(/\D/g,'');this.value=Math.min(400,this.value);" onafterpaste="this.value=this.value.replace(/\D/g,'');this.value=Math.min(360,this.value);">
			</div>
			<button class="btn btn-info btn-gen">生成二维码</button>
		</div>
		<div class="col-md-2">
			<ul class="nav nav-tabs nav-justified">
				<li role="presentation" class="active"><a href="#">添加图片</a></li>			
			</ul>
			<div class="temp-img">
				<ul>
					<?php if(is_array($imglist)): foreach($imglist as $key=>$vo): ?><li>
							<a href="#">
								<img id="<?php echo ($vo); ?>" class="qr-logo qr-logo-1" src="/xhust/thinkphp/Public/Apps/QRcode/icon/<?php echo ($vo); ?>">
							</a>
						</li><?php endforeach; endif; ?>
				</ul>
			</div>
			<div style="text-align: center;">
				<img src="" class="logo-img qr-logo">
			</div>
			<div class="form-group nqr-logo-upload">
				<input class="form-control" id="fileupload" type="file" name="file">
			</div>
			
		</div>
		<div class="col-md-4">
			<ul class="nav nav-tabs nav-justified">
				<li role="presentation" class="active"><a href="#">二维码图像</a></li>
				<li role="presentation"><a href="#" class="qr-download">下载</a></li>			
			</ul>
			<div class="qr-result">
				<div id="img_result">
					<img class="qr-img" src="" alt="QRcode">
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=343f050d59b12c74ee8ba3d3ca5ac844"></script>
<!-- <script src="https://cdn.bootcss.com/jquery.qrcode/1.0/jquery.qrcode.min.js"></script> -->
<script type="text/javascript" src="/xhust/thinkphp/Public/Apps/QRcode/js/qrcode.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/jQuery-File-Upload-8.8.5/js/vendor/jquery.ui.widget.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/jQuery-File-Upload-8.8.5/js/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/jQuery-File-Upload-8.8.5/js/jquery.fileupload.js"></script>
<script type="text/javascript">
	var position=null;
	jQuery(document).ready(function($) {
		$(".qr-menu>li").click(function(event) {
			$(".qr-menu>li").removeClass('active');
			$(this).addClass('active');
			var id=$(this).attr('id');
			$(".qr-content>div").css('display','none');
			$('.qr-content>div').eq(id-1).css('display','block');			
			if(id==4){
				initMap("allmap");
			}
			/*var h=$('.qr-div').height();
			var mh=$("#img_result").height();
			if(h>mh){
				$("#img_result").css('margin-top',(h-mh)/2+'px');
			}else{
				$("#img_result").css('margin-top',"0");
			}*/
		});
		$(".qr-logo").click(function(event) {
			if($(this).hasClass('selected')){
				$(this).removeClass('selected');
				$(this).css('background-color','transparent');
			}else{
				$(".qr-logo").css('background-color','transparent');
				$(".qr-logo").removeClass('selected');
				$(this).addClass('selected');
				$(this).css('background-color','white');
				generateQRCode();
			}			
		});
		$(".btn-gen").click(function(event) {			
			generateQRCode();
		});
		generateQRCode();
		$('#fileupload').fileupload({
	        dataType: 'json',
	        url:"<?php echo U('getLogo');?>",
	        done: function (e, data) {
	           /*alert(JSON.stringify(data));*/
	           var img_url="/xhust/thinkphp"+data.result.pic_url;
	           if(data.result.status==1){	           	  
	           	   $(".qr-logo").css('background-color','transparent');
				   $(".qr-logo").removeClass('selected');
				   $(".logo-img").attr({src:img_url});
				   $(".logo-img").addClass('selected');
				   $(".logo-img").attr('id',data.result.pic_url);
				   generateQRCode();
	           }else{
	           	   alert_alt(data.result.error);	
	           }
	        }
   		});
		$(".qr-download").click(function(event) {
        	window.open($('.qr-img').attr('src'));
		});
	});
	function generateQRCode(){
		var type=1;
		$(".qr-menu>li").each(function(index, el) {
			if($(this).hasClass('active')){
				type=$(this).attr('id');
			}
		});
		var data="";
		type=parseInt(type);
		switch(type){
			case 1:data=generateUrl();break;
			case 2:data=generateContact();break;
			case 3:data=generateSms();break;
			case 4:data=generatePos();break;
		}
		generate(data);
	}

	function generateUrl() {
		return $("#qr-txt").val();
	}
	function generateContact() {
		var data = new Array();
		$(".qr-card>input").each(function(index) {
			data[index] = $(this).val();
		});
		if (data[0] == "") {
			showMistake();
			return;
		}
		if (!telCheck(data[1])) {
			showMistake();
			return;
		}
		var url = "MECARD:N:" + data[0] + ";TEL:" + data[1] + ";";

		if (mailCheck(data[2])) {
			url += "EMAIL:" + data[2] + ";";
		}
		if (data[3]) {
			if (data[3].length > 16) {
				data[3] = data[3].substr(0, 16);
			}
			url += "ADR:" + data[3] + ";";
		}
		if (data[4]) {
			url += "BDAY:" + data[4] + ";";
		}
		if (data[5]) {
			url += "NICKNAME:" + data[5] + ";";
		}
		if (data[6]) {
			url += "NOTE:" + data[6] + ";";
		}
		url += ";";
		return url;
	}

	function generateSms() {
		var phone = $(".smsto").val();
		if (!telCheck(phone)) {
			showMistake();
			return;
		}
		var sms = $(".sms").val();
		sms = cut_blank(sms);
		if (sms == "") {
			showMistake();
			return;
		}
		var url = "{smsto:" + phone + ":" + sms + "}";
		return url;
	}

	function generatePos() {
		if (position) {
			var data = "{geo:" + position.lat + "," + position.lng + "}";
			return data;
		} else {
			return '';
			alert_alt("正在定位...");
		}
	}
	function generate(data) {
		/*var s = toUtf8(data);
		var h=$('.qr-div').height();
		if(h>size){
			$("#img_result").css('margin-top',(h-size)/2+'px');
		}
		$("#img_result").children().remove();
		$("#img_result").css({
			width : size + "px",
			height : size + "px"
		});
		$("#img_result").qrcode({
			render : "table", //table方式
			width : size, //宽度
			height : size, //高度
			text : s //任意内容
		});*/
		var size=$(".qr-size").val();		
		size=size<0?0:size;
		size=size>400?400:size;
		$(".qr-size").val(size);

		var logo=null;
		$(".qr-logo").each(function(index, el) {
	        if($(this).hasClass('selected')){
	        	logo=$(this).attr('id');
	        }
		});
		
		var url="<?php echo U('Apps/QRcode/qrcode');?>";
		url+='?url='+data;
		url+='&&size='+size;
		if(logo!=null){
			url+='&&logo='+logo;
		}
		if($(".logo-img").hasClass('selected')){
			url+='&&img='+1;
		}
		$(".qr-img").attr('src',url);
		$(".qr-img").load(function() {
			/*var h=$('.qr-div').height();
			var mh=$("#img_result").height();
			if(h>mh){
				$("#img_result").css('margin-top',(h-mh)/2+'px');
			}else{
				$("#img_result").css('margin-top',"0");
			}*/
		});
	}
	function showMistake() {
		alert_alt("输入有误！");
		//$(".img_result").attr("src", "pic/mistake.png");
	}
</script><?php if(($app_id) != "0"): ?><div><button class="btn btn-success thumb-up"> &nbsp;我觉得这个应用不错，我要点赞&nbsp;<i class="fa fa-thumbs-up fa-lg"></i><span class="love_times"><?php echo ($love_times); ?></span>&nbsp;</button></div><?php endif; ?><div class="comment"><?php echo W('Comment/index',array($app_id));?></div><style type="text/css">li,ul,ol{list-style: none;display: inline-block;}.my-footer{background: #eeeeee;}.copyright{font-size: 1.1em;margin-top: 0.5em;}.copyright-donation{padding:0;padding-left: 0.5em;}.copyright-donation img{height: 8em;}.copyright-donation h5{width: 100%;text-align: center;padding-bottom: 0;margin-bottom: 0;}.contact span{font-size: 1em;display: inline-block;padding: 0.5em;}.contact a{text-decoration: none;}.about{height: 12em;}.about div{padding-left:0.5em;line-height: 2em;}/*.copyright-toast {position: absolute;bottom: 0;}*/</style><div class="my-footer"><div class="row copyright"><div class="col-md-8"><div class="row"><div class="col-md-5"><h4><i class="fa fa-credit-card fa-1x"></i>&nbsp;小额捐赠&nbsp;|&nbsp;Donation</h4><ul class="copyright-donation"><li><img src="/xhust/thinkphp/Public/Apps/alipay.gif"/><h5>支付宝</h5></li>&nbsp;&nbsp;&nbsp;&nbsp;<li><img src="/xhust/thinkphp/Public/Apps/wechat.gif"/><h5>微信支付</h5></li></ul></div><div class="col-md-7 contact"><h4><i class="fa fa-address-book fa-1x"></i>&nbsp;联系我&nbsp;|&nbsp;Contact me</h4><span><i class="fa fa-envelope fa-1x"></i>&nbsp;电子邮件:</span><a href="mailto:<?php echo ($contact["email"]); ?>"><?php echo (C("contact.email")); ?></a><br/><span><i class="fa fa-weibo fa-1x"></i>&nbsp;新浪微博:</span><a href="<?php echo (C("contact.weibo")); ?>" target="_blank"><?php echo (C("contact.weibo")); ?></a><br/><span><i class="fa fa-rss-square fa-1x"></i>&nbsp;博客园:</span><a href="<?php echo (C("contact.cnblog")); ?>" target="_blank"><?php echo (C("contact.cnblog")); ?></a><br/><span><i class="fa fa-github fa-1x"></i>&nbsp;Github:</span><a href="<?php echo (C("contact.github")); ?>" target="_blank"><?php echo (C("contact.github")); ?></a><br/></div></div></div><div class="col-md-4 about"><h4><i class="fa fa-info-circle fa-1x"></i>&nbsp;关于&nbsp;|&nbsp;About</h4><div><?php echo (C("contact.about")); ?></div><div>Gratitude for Thinkphp, Github, Bootstarp, Fontawesome, jQuery.</div><div>Designed for a girl@magua</div><div class="copyright-toast"><?php echo (C("contact.copyright")); ?></div></div></div></div><script type="text/javascript">jQuery(document).ready(function($) {});</script></div></div><style type="text/css">
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
</div></body><script type="text/javascript">var pt=$(".mynavdiv").height();$('.my-container').css('padding-top',pt);jQuery(document).ready(function($) {$(window).resize(function(event) {var pt=$(".mynavdiv").height();$('.my-container').css('padding-top',pt);});$(".thumb-up").click(function(event) {var url='<?php echo U("Home/Index/addHeart");?>';var appid='<?php echo ($app_id); ?>';$.post(url, {id: appid}, function(data, textStatus, xhr) {if(data['status']==1){$(".love_times").text(data['data']);}});});$(window).load(function() {document.addEventListener('touchstart',function (event) { if(event.touches.length>1){ event.preventDefault(); } }); var lastTouchEnd=0; document.addEventListener('touchend',function (event) { var now=(new Date()).getTime(); if(now-lastTouchEnd<=300){ event.preventDefault(); } lastTouchEnd=now; },false); });});</script></html>