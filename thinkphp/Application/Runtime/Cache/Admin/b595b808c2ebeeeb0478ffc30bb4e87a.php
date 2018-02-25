<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>xhust</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="shortcut icon" href="/xhust/thinkphp/Public/Apps/xhust.ico">
</head>

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
<script type="text/javascript" src="/xhust/thinkphp/Public/md5.js"></script>
<style type="text/css">
	.my-container{
		padding: 0 0.3em 0 0.3em;
		background: #eeeeee;
	}
	.login{
		width: 100%;
		text-align: center;
	}
	.login-info{
		width: 30em;
		background: green;
		display: inline-block;
		margin-top:10em;
		padding:1em;
		background:white;
		border-radius: 10px;
	}
	.form-interval{
		margin:0.5em;
	}
	#user,#password,#verifycode{
		width: 20em;
	}
	.btn-confirm{
		width: 22em;
		margin-top:0.5em;
	}
</style>

<body style="background: #eeeeee;padding: 0;margin: 0;">	
	<div <?php echo choose_class();?>>
		<div class="my-container">			
			<div class="login">
				<div class="login-info">
					<h3>xhust login</h3>
					<hr>
					<form class="form-inline" method="post" action="<?php echo U('Admin/Index/login');?>">
					    <div class="form-group form-interval">
						    <label for="user">用户</label>
						    <input name="user" type="text" class="form-control" id="user" placeholder="user">
						</div>
						<div class="form-group form-interval">
						    <label for="password">密码</label>
						    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
						</div>
						<img id="verifyimg" class="form-interval" src="<?php echo U('Admin/Index/verifyimg');?>">
						<div class="form-group form-interval">
						  	<label for="verifycode">验证码</label>
						    <input name="verifycode" type="text" class="form-control" id="verifycode" placeholder="verifycode">
					  	</div>
					  	<br>
						<button type="submit" class="btn btn-success btn-confirm">确定</button>
					</form>
				</div>
			</div>			
		</div>	
	</div>
</body>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$("form").submit(function(event) {
			var user=$("#user").val();
			if(user==""){
				alert_alt('请输入用户名！');
				return false;
			}
			var password=$("#password").val();
			if(password==""){
				alert_alt('请输入密码！');
				return false;
			}
			var verifycode=$("#verifycode").val();
			if(verifycode==""){
				alert_alt('请输入验证码！');
				return false;
			}
			$("#password").val(md5.hex($("#password").val()));
			return true;
		});
		$("#verifyimg").click(function(event) {
			/* Act on the event */
			var url="<?php echo U('Admin/Index/verifyimg');?>";
			$(this).attr('src',url);
		});
		/*$("#verifycode").blur(function(event) {
			var url="<?php echo U('Admin/Index/checkverify');?>";
			$.post(url, {param1: 'value1'}, function(data, textStatus, xhr) {
				optional stuff to do after success 
			});
		});*/
	});
</script>
</html>