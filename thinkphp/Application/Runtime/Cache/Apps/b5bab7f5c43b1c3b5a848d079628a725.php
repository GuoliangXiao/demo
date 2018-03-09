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
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/datepicker/css/bootstrap-datetimepicker.min.css" />
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/citypicker/css/city-picker.css" />
<style type="text/css">
	.form-p{
		margin-bottom: 0.5em;
	}
	.div-about{
		line-height: 1.7em;
	}
	.gender{
	
	}
	.photo-img{
		max-height: 4em;
	}
	.id-result{
		background: transparent;
		max-width: 100%;
	}
</style>
<div class="row">
	<div class="col-md-12">
		<h3 class="app-title"><i class="fa fa-id-card fa-1x"></i>&nbsp;身份证&nbsp;|&nbsp;ID Card</h3>
	</div>
</div>
<div class="row">
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-6">
				<div class="form-horizontal">
					<div class="form-group">
						<label for="name" class="col-md-4 control-label">姓名</label>         
						<div class="col-md-8">
							<input  id="name" class="form-control" type="text" value="张三"/>
						</div>
					</div>
					<div class="form-group">
			        	<label for="gender" class="col-md-4 control-label">性别</label>
					    <div class="col-md-8">
					      	<select class="form-control gender">
					      		<option>男</option>
					      		<option>女</option>
					      	</select>
					    </div>
			        </div>
			        <div class="form-group">
						<label for="nation" class="col-md-4 control-label">民族</label>         
						<div class="col-md-8">
							<select class="form-control nation">
								
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-horizontal">
					<div class="form-group">
			            <label for="birthday" class="col-md-4 control-label">出生日期</label>         
						<div class="col-md-8">
							<input type="text" class="form-control" id="birthday" data-date-format="yyyy-mm-dd" value="2018-03-07" readonly>
						</div>
			        </div>
			        <div class="form-group">
			            <label for="date-from" class="col-md-4 control-label">办证日期</label>         
						<div class="col-md-8">
							<input type="text" class="form-control" id="date-from" data-date-format="yyyy-mm-dd" value="2018-03-07" readonly>
						</div>					
			        </div>
			        <div class="form-group">
			            <label for="date-len" class="col-md-4 control-label">有效期</label>         					
						<div class="col-md-8">
							<select class="form-control date-len">
								<option>5</option>
								<option>10</option>
								<option>15</option>
								<option>20</option>
							</select>
						</div>
			        </div>
				</div>		        
			</div>
		</div>
		<div class="form-horizontal">
			<div class="form-group">
				<label for="city-picker" class="col-md-2 control-label">户籍地</label>         
				<div class="col-md-10">
					<input  id="city-picker" class="form-control" readonly type="text" value="湖北省/武汉市/洪山区" data-toggle="city-picker"/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-horizontal">		
			        <div class="form-group">
			        	<label for="photo" class="col-md-4 control-label">上传照片(1M)</label>
						<div class="col-md-8">
							<input class="form-control" id="photo" type="file" name="file">
						</div>					
					</div>		        
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-horizontal">
					<div class="form-group">
						<label for="photo-img" class="col-md-4 control-label">当前照片</label>	
					    <div class="col-md-4">
					    	<img class="photo-img" src="/xhust/thinkphp/Public/Apps/IDcard/img/photo_low.png">
					    </div>	
					    <div class="col-md-4">
					    	<button class="btn btn-success btn-gen">生成身份证</button>
					    </div>				 
			        </div>
			    </div>
			</div>
		</div>
		<div class="form-horizontal">
			<img class="id-result" src="">
		</div>
	</div>
	<div class="col-md-4">
		<div class="form">
			<div class="input-group" style="margin-bottom: 0.5em;">
			    <input type="text" class="form-control id-number" placeholder="请输入第二代(18位)身份证号码" value="">
			    <span class="input-group-btn">
			        <button class="btn-s btn btn-default" type="button">
			        	&nbsp;&nbsp;<i class="fa fa-search fa-1x"></i>&nbsp;&nbsp;
			        </button>
			    </span>
		    </div>
			
			<div>
				<table class="table table-bordered table-striped">
					<tr>
						<td style="text-align: center;" colspan="2">
							<strong>身份证信息</strong>
						</td>
					</tr>
					<tr>
						<td>身份证号:</td>
						<td class="identity_num"></td>
					</tr>
					<tr>
						<td>归属地:</td>
						<td class="identity_place"></td>
					</tr>
					<tr>
						<td>性别:</td>
						<td class="identity_sex"></td>
					</tr>
					<tr>
						<td>生日:</td>
						<td class="identity_birthday"></td>
					</tr>
				</table>
			</div>
			<div class="div-about">
	            <p>
	                &nbsp;&nbsp;&nbsp;<strong>公民身份证</strong>号码是由17位数字码和1位校验码组成。排列顺序从左至右分别为：6位地址码，8位出生日期码，3位顺序码和1位校验码。
	            </p>
	            <p>
	                &nbsp;&nbsp;&nbsp;地址码和出生日期码很好理解，顺序码表示在同一地址码所标识的区域范围内，对同年同月同日出生的人编定的顺序号，顺序码的奇数分配给男性，偶数分配给女性。
	            </p>
	            <p>
	                身份证最后一位校验码算法如下：
	                <span> 1. 将身份证号码前17位数分别乘以不同的系数，从第1位到第17位的系数分别为：7 9 10 5 8 4 2 1 6 3 7 9 10 5 8 4 2。</span>
	                <span>2. 将得到的17个乘积相加。</span>
	                <span>3. 将相加后的和除以11并得到余数。</span>
	                <span>4. 余数可能为0 1 2 3 4 5 6 7 8 9 10这些个数字，其对应的身份证最后一位校验码为
	                	<strong>1 0 X 9 8 7 6 5 4 3 2</strong>。</span>
	            </p>
	        </div>
		</div>
	</div>
</div>
<script type="text/javascript" src="/xhust/thinkphp/Public/datepicker/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/datepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/citypicker/js/city-picker.data.min.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/citypicker/js/city-picker.min.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/jQuery-File-Upload-8.8.5/js/vendor/jquery.ui.widget.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/jQuery-File-Upload-8.8.5/js/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/jQuery-File-Upload-8.8.5/js/jquery.fileupload.js"></script>
<script type="text/javascript" src="/xhust/thinkphp/Public/china/js/nations.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {		
		$('#birthday,#date-from').datetimepicker({
	        language:  'zh-CN',
	        initialDate:new Date(),
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			minView: 2,
			forceParse: 0,
			endDate:new Date(),
	    });
	    $(".nation").setNation();
		$('#photo').fileupload({
	        dataType: 'json',
	        url:"<?php echo U('uploadPhoto');?>",
	        done: function (e, data) {
	           /*alert(JSON.stringify(data));*/
	            if(data.result.status==1){
	            	var url="/xhust/thinkphp"+data.result.pic_url;
	            	$(".photo-img").attr('id',data.result.pic_url);
	            	$(".photo-img").attr({src:url});
	            }else{
	           	    alert_alt(data.result.error);	
	            }
	        }
   		});

	    $(".btn-gen").click(function(event) {
	    	var name=$("#name").val();
	    	var nation=$(".nation option:selected").val();
	    	var place=$("#city-picker").val();
	    	var birthday=$("#birthday").val();
	    	var gender=$(".gender option:selected").val();
	    	var date=$("#date-from").val();
	    	var photo=$(".photo-img").attr("id");
	    	var len=$(".date-len option:selected").val();
	    	/*alert(name+place+birthday+gender);*/
	    	var url="<?php echo U('generateID');?>";
	    	url+=("?name="+name);
	    	url+=("&&nation="+nation);
	    	url+=("&&place="+place);
	    	url+=("&&birthday="+birthday);
	    	url+=("&&date="+date);
	    	url+=("&&gender="+gender);
	    	url+=("&&len="+len);
	    	if(photo!=null&&photo!=""){
	    		url+=("&&photo="+photo);
	    	}
	    	url=encodeURI(url);
	    	$(".id-result").attr("src",url);
	    	//$(".test").text(url);
	    	//alert(url);

	    });
		$(".btn-s").click(function(event) {
			postInfo();
		});
		var legal2 = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
		var legal2Verify = "10X98765432";
		function postInfo(){
			var idNum=$(".id-number").val().toUpperCase();
			if(idNum==null||idNum==""){
				alert_alt('请输入第二代身份证号码！')
			}else if (idCheck(idNum)) {
		        if (idLegal(idNum)) {
		            postID(idNum);
		        } else {
		            alert_alt("身份证号码不存在");
		        }
		    } else {
		        alert_alt("身份证号码输入错误");
		    }
		}
		$(".btn-gen").click();
		function postID(idNum) {
			var url="<?php echo U('getID');?>";
		    $.post(url, {
		        "id" : idNum
		    }, function(data) {
		        showResult(data);
		    });
		}

		function showResult(obj) {
		    if (obj.status == "OK") {
		        $(".identity_num").text(obj.data.id);
		        $(".identity_place").text(obj.data.place);
		        $(".identity_sex").text(obj.data.sex);
		        $(".identity_birthday").text(obj.data.birthday);
		        $(".div_result").css("color", "white");
		    } else {
		        alert_alt(obj.status);
		    }
		}
		function idLegal(idNum) {
		    if (idNum.length == 18) {
		        var total = 0;
		        for (var i = 0; i < legal2.length; i++) {
		            total += parseInt(idNum.charAt(i)) * legal2[i];
		        }
		        //alert(total);
		        var left = total % 11;
		        var tail = idNum.charAt(17);
		        if (legal2Verify.charAt(left) == tail) {
		            return true;
		        }
		        return false;
		    }
		}

		function idCheck(idNum) {
		    if (idNum.length == 18) {
		        var head = idNum.substring(0, 17);
		        //alert(head);
		        if (!$.isNumeric(head)) {
		            return false;
		        }
		        var tail = idNum.charCodeAt(17);
		        if (tail >= 48 && tail <= 57) {
		            return true;
		        } else if (tail == 88) {
		            return true;
		        }
		        return false;
		    }
		}
	});
	
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