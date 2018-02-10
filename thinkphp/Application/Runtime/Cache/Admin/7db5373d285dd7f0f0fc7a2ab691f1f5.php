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
        margin: 0.5em 2em 0.5em 2em;
    }
</style>
<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

<!-- 
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/bootstrap/css/bootstrap-responsive.min.css" />
<script type="text/javascript" src="/xhust/thinkphp/Public/bootstrap/css/bootstrap.min.js"></script>

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



 

<script type="text/javascript" src="/xhust/thinkphp/Public/Box/box.js"></script>
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/Box/box.css" />


<script type="text/javascript">
	/*
           width:  宽度,
           height: 最小高度,
           type: 'warning'|'error'|'success'|'info'|'question',
           showConfirmButton: 是否显示确认按钮,
           showCancelButton: 是否显示取消按钮,
           confirmButtonText: '确认',
           cancelButtonText: '取消'
	*/
	function alert_alt(txt, callback,tilte="",type="info", ok="确定"){
		alert(tilte, txt, function () {
			callback();
    	}, {type: type, confirmButtonText: ok});
	}
	function confirm_alt(txt,callback1, callback2, title="",type="info",ok="确定", cancel="取消"){
		confirm(title, txt , function (isConfirm) {
            if (isConfirm) {
                callback1();
            } else {
               callback2();
            }
        }, {confirmButtonText: ok, cancelButtonText: cancel, width: 400});
	}
</script>
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/kindeditor/themes/default/default.css" />
<link rel="stylesheet" type="text/css" href="/xhust/thinkphp/Public/kindeditor/plugins/code/prettify.css" />
<script charset="utf-8" src="/xhust/thinkphp/Public/kindeditor/kindeditor-all.js"></script>
<script charset="utf-8" src="/xhust/thinkphp/Public/kindeditor/lang/zh-CN.js"></script>
<script>
	KindEditor.options.filterMode = false; 
    KindEditor.ready(function(K) {
        window.editor = K.create('#editor_id',{
        	cssPath : '/xhust/thinkphp/Public/kindeditor/plugins/code/prettify.css',
            uploadJson : '<?php echo U("Admin/ArticleUpload/kindQiniu");?>',
            fileManagerJson : '/xhust/thinkphp/Public/kindeditor/php/file_manager_json.php',
            allowFileManager : true,
            width:$(".my-container").width(),
            height:650,
            afterCreate : function() {
                var self = this;
                K.ctrl(document, 13, function() {
                    self.sync();
                    K('form[name=example]')[0].submit();
                });
                K.ctrl(self.edit.doc, 13, function() {
                    self.sync();
                    K('form[name=example]')[0].submit();
                });
            }
        });
        prettyPrint();
    });
</script>
<style type="text/css">
    .back-list{
        margin: 0.5em;
    }
</style>
<body style="background: #eeeeee;padding: 0;margin: 0;">	
	<div class="container-fluid">
		<div class="my-container">
            <div class="back-list">
                <a href="<?php echo U('Admin/Index/datatable');?>">
                    <button class="btn btn-success">返回文章列表</button>
                </a>
            </div>	
			<form method="post" action="<?php echo U('Admin/ArticleUpload/kedit');?>" onsubmit="">
		        <div class="form-group">
                    <!-- <label for="title">标题</label> -->
                    <input id="title" class="form-control" type="text" placeholder="" name="title">
                </div>
                <div class="form-group">
                    <!-- <label for="content">内容</label> -->
                    <textarea id="editor_id" name="content">
				</textarea>
                </div>
		        
				<button style="width: 100%;height: 3em;" type="submit" class="btn btn-info">&nbsp;提交&nbsp;</button>
				
			</form>
		</div>	
	</div>
</body>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		
	});
</script>
</html>