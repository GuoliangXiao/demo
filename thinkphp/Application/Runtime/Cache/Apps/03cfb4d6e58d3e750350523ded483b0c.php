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
	.my-table{
	}
	td{
		height: 4em;
		text-align: center;
		font-size: 1.1em;
	}
	.my-row{
		
	}
	.td-result{
		font-weight: bold;
	}
	.cal-about{

		font-size: 1.1em;
		line-height: 2em;
	}
</style>
<div class="app-container">
	<div class="row my-row">
		<div class="col-md-6">
			<?php  $speacial_sys=array(array(2,'2进制'),array( 8,'8进制'),array(10, '10进制'),array(16, '16进制'),array(32, '32进制'),array(0,'其他'),); ?>
			
			<form class="form-inline" >
				<div class="form-group">
					<?php $__FOR_START_21643__=0;$__FOR_END_21643__=6;for($i=$__FOR_START_21643__;$i < $__FOR_END_21643__;$i+=1){ ?><label class="radio-inline">
						    <input type="radio" name="speacial_num" value="<?php echo ($speacial_sys[$i][0]); ?>"
						    <?php if($i==2) echo 'checked'?>
						    >
						   	<?php echo ($speacial_sys[$i][1]); ?>
						</label>
						<?php if($i != 5): ?><span style="margin-left:0.8em;"></span>
							<?php else: endif; } ?>
				</div>
		  		<div class="form-group" >
            		<select name="normal_num" id="select-sys" class="form-control" disabled>
						<?php $__FOR_START_2408__=2;$__FOR_END_2408__=65;for($i=$__FOR_START_2408__;$i < $__FOR_END_2408__;$i+=1){ if($i!=2&&$i!=8&&$i!=10&&$i!=16){ echo '<option>'; echo $i.'进制'; echo '</option>'; } } ?>
					</select>
            	</div>
			</form>
		</div>
		<div class="col-md-6">
			<div class="form-inline">
				<div class="form-group">
                	<input class="form-control" value="" type="" name="input_num" placeholder="请输入待转换数字" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" onafterpaste="this.value=this.value.replace(/\D/g,'');">
            	</div>
				<div class="form-group">
					<button class="btn btn-default btn-convert">&nbsp;&nbsp;转换&nbsp;&nbsp;</button>
				</div>	
			</div>
		</div>
	</div>
	<div style="height: 1.5em;">
		
	</div>
	<div class="row my-row" >
		<div class="col-md-6 my-table">
			<table class="table">
				
				<?php $__FOR_START_24961__=0;$__FOR_END_24961__=3;for($i=$__FOR_START_24961__;$i < $__FOR_END_24961__;$i+=1){ ?><tr class=<?php if($i%2) echo 'info';else echo 'warning';?>
					>
						<td style="vertical-align: middle;" width="50%">
							<?php echo ($speacial_sys[$i][1]); ?>
						</td>
						<td class="td-result" style="vertical-align: middle;" class="<?php echo ($speacial_sys[$i][0]); ?> td-result">结果将在此处显示</td>
					</tr><?php } ?>
			</table>
		</div>
		<div class="col-md-6 my-table">
			<table class="table">
				
				<?php $__FOR_START_550__=3;$__FOR_END_550__=6;for($i=$__FOR_START_550__;$i < $__FOR_END_550__;$i+=1){ ?><tr class=<?php if($i%2) echo 'info';else echo 'warning';?>
					>
						<td style="vertical-align: middle;" width="50%">
							
							<?php if($i == 5): ?><div class="form-group" style="margin: 0;">
				            		<select name="normal_result" id="select-sys" class="form-control">
										<?php $__FOR_START_11879__=2;$__FOR_END_11879__=65;for($i=$__FOR_START_11879__;$i < $__FOR_END_11879__;$i+=1){ if($i!=2&&$i!=8&&$i!=10&&$i!=16){ echo '<option>'; echo $i.'进制'; echo '</option>'; } } ?>
									</select>
			            		</div>
			            		<?php else: echo ($speacial_sys[$i][1]); endif; ?>
						</td>
						<td style="vertical-align: middle;" class="<?php echo ($speacial_sys[$i][0]); ?> td-result">结果将在此处显示</td>
					</tr><?php } ?>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p class="cal-about">
				进制转换是将一个数据以不同形式展现出来,进制转换由一组数码符号和两个基本因素("基"与"权")构成,其中本工具中64进制中64个字符分别用
				<strong style="color:red;">0-9,A-Z,a-z,&lt;,&gt;</strong>表示。大小写字母有着不同的权,所以转换前一定注意!
			</p>
		</div>
	</div>
</div>

<script type="text/javascript">
	function showResult(r){
		$(".td-result").each(function(index) {
			$(this).text(r[index]);
		});
	}

	function ten2m(from, kto) {
		var error = -1;
		var numm=new Array();
		var r="";
		if (kto < 2 || kto > 64) {
			error = 20;
		} else {
			while(from){
				var m=from%kto;
				numm.push(m);
				from=parseInt(from/kto);
			}
			for(var i=numm.length-1;i>=0;i--){
				if(numm[i]>=0&&numm[i]<10){
					r+=""+numm[i];
				}else if(numm[i]>=10&&numm[i]<36){
					r+=""+String.fromCharCode(55+numm[i]);
				}else if(numm[i]>=36&&numm[i]<62){
					r+=""+String.fromCharCode(61+numm[i]);
				}else if(numm[i]==62){
					r+=mark2[0];
				}else if(numm[i]==63){
					r+=mark2[1];
				}else {
					error=10;
				}
			}
		}
		//alert(r);
		return {"error":error,"result":r};
	}

	function m2ten(from, kfrom) {
		var num10 = 0;
		var error = -1;
		if (kfrom < 2 || kfrom > 64) {
			error = 20;
		} else {
			for (var i = 0; i < from.length; i++) {
				var m = from.charCodeAt(i);
				if (m >= 48 && m <= 57) {
					if (m - 48 >= kfrom) {
						error = 1;
						break;
					}
					num10 += (m - 48) * Math.pow(kfrom, from.length - i - 1);
				} else if (m >= 65 && m <= 90) {
					if (m - 55 >= kfrom) {
						error = 2;
						break;
					}
					num10 += (m - 55) * Math.pow(kfrom, from.length - i - 1);
				} else if (m >= 97 && m <= 122) {
					var t = m - 97 + 36;
					if (t >= kfrom) {
						error = 3;
						break;
					}
					num10 += (t) * Math.pow(kfrom, from.length - i - 1);
				} else if (m == mark1[0]) {
					if (kfrom <= 62) {
						error = 4;
						break;
					}
					num10 += 62 * Math.pow(kfrom, from.length - i - 1);
				} else if (m == mark1[1]) {
					if (kfrom <= 63) {
						error = 5;
						break;
					}
					num10 += 63 * Math.pow(kfrom, from.length - i - 1);
				} else {
					error = 10;
				}
			}
		}
		return {
			"error" : error,
			"result" : num10
		};
	}
	function transform(from, kfrom, kto) {
		var t=from;
		if(from<0){
			t=0-from;
		}
		var r = m2ten(t+"", kfrom);
		var r2 = 0;
		var result=0;
		var error=-1;
		//alert(r.result);
		if (r.error < 0) {
			r2 = ten2m(r.result+"", kto);
			if(r2.error<0){
				result=r2.result;
			}else{
				error=2;
			}
		}else {
			error=1;
		}
		if(from<0){
			result=0-result;
		}
		//alert(result+"error:"+error);
		return {"error":error,"result":result};
	}
	function getResult(kind, num) {
		var tk = $("select[name='normal_result'] option:selected").val();
		tk=tk.substring(0,tk.length-2);
		var s=[2,8,10,16,32,tk];
		var r=[];
		for(var i=0;i<s.length;i++){
			var t=transform(num,kind,s[i]);
			if(t.error<0){
				r[i]=t.result;

			}else{
				r[i]="convert failed!";
			}
		}
		return r;
	}

	function getKind() {
		var kind = $("input[name='speacial_num']:checked").val();
		if (kind == 0) {
			kind = $("select[name='normal_num']").val();
			kind=kind.substring(0,kind.length-2);
		}
		return kind;
	}
	function changeInputRule() {
		$("input[name='input_num']").val('');
		var k = getKind();
		//alert(k);
		var reg = "";
		if (k > 1 && k <= 10) {
			reg = "/[^0-" + (k - 1) + "]/g";
		} else if (k <= 36) {
			var m = k - 10;
			m += 64;
			var s = String.fromCharCode(m);
			reg = "/[^0-9A-" + s + "]/g";
		} else if (k <= 62) {
			var m = k - 36;
			m += 97;
			var s = String.fromCharCode(m);
			//alert(s);
			reg = "/[^0-9A-Za-" + s + "]/g";
		} else if (k == 63) {
			reg = "/[^0-9A-Za-z<]/g";
		} else if (k == 64) {
			reg = "/[^0-9A-Za-z<>]/g";
		}
		var js = "this.value=this.value.replace(" + reg + ",'');";
		$("input[name='input_num']").attr("onkeyup", js);
		$("input[name='input_num']").attr("onafterpaste", js);
	}
	jQuery(document).ready(function($) {
		$("input[name='speacial_num']").change(function(event) {
			/* Act on the event */
			var v=$("input[name='speacial_num']:checked").val();
			if(v==0){
				$("select[name='normal_num']").attr('disabled',false);
			}else{
				$("select[name='normal_num']").attr('disabled',true);
			}
			changeInputRule();
		});
		$(".btn-convert").click(function(event) {
			/* Act on the event */
			var v=$("input[name='input_num']").val();
			if(v!=""){
				var kind = getKind();
				//alert(kind);
				var result = getResult(kind, v);
				showResult(result);
			}else{
				alert_alt('请输入待转换数字转换');
			}
		});
		$("select[name='normal_result']").change(function(event) {
			/* Act on the event */
			$(".btn-convert").click();
		});
	});
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