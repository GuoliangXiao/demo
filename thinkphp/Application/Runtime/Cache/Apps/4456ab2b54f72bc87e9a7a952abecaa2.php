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
	.div_table tr td{
  	    border:1px solid #F1F1F1;
	    width:15px;
	    height:15px;
	    background-color:white;
	}
	.div_panel{
		padding: 0.5em;
	}
	.div_state{
		text-align: center;
		font-size: 1.2em;
	}
	.div_control{
		text-align: center;
	}
	.div_control>button{
		width: 5em;
		margin:0.1em;
	}
	.score,.level{
		color: #EC2126;
		font-weight: bold;
	}
	.div_help{
		margin-top: 0em;
		line-height: 2em;
	}
	.div_help strong{
		font-size: 1.2em;
		color: #A7040A;
	}
</style>
<div class="app-container">
	<div class="row">
		<div class="col-md-6">
			<h3 class="app-title"><i class="fa fa-sheqel fa-1x"></i>&nbsp;贪吃蛇&nbsp;|&nbsp;Snake</h3>
		</div>
		<div class="col-md-6"></div>
	</div>
	<div class="row">
		<div class="col-md-8 game-area">
           <div class="div_game">
                <div class="div_board">
                    <table class="div_table"></table>
                </div>
                <div class="div_panel row">
                	<div class="div_state col-md-4">
	            	    <span>score:</span>
	                	<span class="score">0</span>
	               		<span>level:</span>
	                	<span class="level">0</span>  
	                </div>       
	                <div class="div_control col-md-8">
	                    <button value="0" class="btn btn-info start">start</button>
	                    &nbsp;&nbsp;
	                    <button value="1" class="btn btn-success left">left</button>
	                    <button value="2" class="btn btn-success right">right</button>
	                    <button value="3" class="btn btn-success up">up</button>
	                    <button value="4" class="btn btn-success down">down</button>
	                </div>
                </div>
            </div>
		</div>
		<div class="col-md-4">
			<div class="div_rank"></div>
			<div class="div_help">
				贪吃蛇可通过控制面板上的按钮控制小蛇改变方向，也可以通过键盘上的&nbsp;<strong>W</strong>,<strong>A</strong>,<strong>S</strong>,<strong>D</strong>&nbsp;键来改变方向。游戏设有分数和等级，小蛇没获得一个食物，积分加一，积分没增加&nbsp;<strong>5</strong>&nbsp;分便会提升一个等级，每提升一个等级，便会出现一些障碍物，并且小蛇的移动速度会增加。小蛇应当避免碰到障碍物和墙壁来获取食物以获取更高分数。
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="/xhust/thinkphp/Public/Apps/Snake/js/Snake.js"></script>
<script type="text/javascript">
	var w=$(".game-area").width();
	var h=$(window).height()*0.7;
	w=Math.floor(w/15);
	h=Math.floor(h/15);
    var snake = new SnakeBoard(w, h, ".div_table", function(score,level){
    	$(".score").text(score);
    	$(".level").text(level);
    },function(score){
    	if(score>0){	    		
		    prompt_alt('游戏结束，上传分数', '输入你的名字:', function(value){
				if(value == null||value==""){  
		        	value='anonymous'
		    	}
		   		uploadScore(value,score);
		   		$(".start").text("start");
			});	  			   
    	}else{
    		confirm_alt('游戏结束，是否重新开始？',function(){
    			$(".start").text("pause");
    			snake.restart();
    		},function(){
    			$(".start").text("start");
    		});
    	}
    });
    snake.initGame();
    showRank();

    $(".div_control>button").click(function(event) {
	    var d = $(this).val();
        var t = $(this).text();
        if (d == 0) {
            if (t == "start") {
            	$(this).text("pause");
            	if(snake.isOver()==true){
                	snake.restart();
            	}else{
                	snake.start();
            	}
            } else {
                $(this).text("start");
                snake.pause();
               
            }

        } else {
            snake.move(parseInt(d));
        }
    });
    $(window).keypress(function() {
        switch(event.keyCode) {
            //left
            case 97:
            case 65:
                snake.move(1);
                break;
            //right
            case 100:
            case 68:
                snake.move(2);
                break;
            //down
            case 115:
            case 83:
                snake.move(4);
                break;
            //up
            case 119:
            case 87:
                snake.move(3);
                break;
        }
    });
    function showRank(){
		$('.div_rank').empty();
		var url='<?php echo U("Apps/Score/index?app_id=$app_id");?>';
		$('.div_rank').load(url);  	
	}
	function uploadScore(name,score){
		//alert(socre);
		var url="<?php echo U('Apps/Score/uploadScore');?>";
		var app_id='<?php echo ($app_id); ?>';
		$.post(url, {app_id:app_id, name:name,score:score}, function(data, textStatus, xhr) {
			/*optional stuff to do after success */
			//alert(data);
			if(data['status']==1){
				showRank();
			}else{
				alert_alt('上传失败');
			}			
		});
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