<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">
	var icons=[{
        name: "贴吧表情",
        path: "/xhust/thinkphp/Public/jQuery-emoji/dist/img/tieba/",
        maxNum: 50,
        file: ".jpg",
        placeholder: ":{alias}:",
        alias: {
            1: "hehe",
            2: "haha",
            3: "tushe",
            4: "a",
            5: "ku",
            6: "lu",
            7: "kaixin",
            8: "han",
            9: "lei",
            10: "heixian",
            11: "bishi",
            12: "bugaoxing",
            13: "zhenbang",
            14: "qian",
            15: "yiwen",
            16: "yinxian",
            17: "tu",
            18: "yi",
            19: "weiqu",
            20: "huaxin",
            21: "hu",
            22: "xiaonian",
            23: "neng",
            24: "taikaixin",
            25: "huaji",
            26: "mianqiang",
            27: "kuanghan",
            28: "guai",
            29: "shuijiao",
            30: "jinku",
            31: "shengqi",
            32: "jinya",
            33: "pen",
            34: "aixin",
            35: "xinsui",
            36: "meigui",
            37: "liwu",
            38: "caihong",
            39: "xxyl",
            40: "taiyang",
            41: "qianbi",
            42: "dnegpao",
            43: "chabei",
            44: "dangao",
            45: "yinyue",
            46: "haha2",
            47: "shenli",
            48: "damuzhi",
            49: "ruo",
            50: "OK"
        },
        title: {
            1: "呵呵",
            2: "哈哈",
            3: "吐舌",
            4: "啊",
            5: "酷",
            6: "怒",
            7: "开心",
            8: "汗",
            9: "泪",
            10: "黑线",
            11: "鄙视",
            12: "不高兴",
            13: "真棒",
            14: "钱",
            15: "疑问",
            16: "阴脸",
            17: "吐",
            18: "咦",
            19: "委屈",
            20: "花心",
            21: "呼~",
            22: "笑脸",
            23: "冷",
            24: "太开心",
            25: "滑稽",
            26: "勉强",
            27: "狂汗",
            28: "乖",
            29: "睡觉",
            30: "惊哭",
            31: "生气",
            32: "惊讶",
            33: "喷",
            34: "爱心",
            35: "心碎",
            36: "玫瑰",
            37: "礼物",
            38: "彩虹",
            39: "星星月亮",
            40: "太阳",
            41: "钱币",
            42: "灯泡",
            43: "茶杯",
            44: "蛋糕",
            45: "音乐",
            46: "haha",
            47: "胜利",
            48: "大拇指",
            49: "弱",
            50: "OK"
   			}
		},
		{
		 	name:'QQ表情',
		 	path:'/xhust/thinkphp/Public/jQuery-emoji/dist/img/qq/',
		 	maxNum:91,
		 	excludeNums: [41, 45, 54],
		 	file: ".gif",
        	placeholder: "#qq_{alias}#"
		}];
</script>
<style type="text/css">
	.mybutton{
		background: #f7f7f7;
		padding: 0.6em;
		width: 100%;
		text-align: center;
	}
	.btn-page{
		margin: 0.1em;
		display: inline-block;
	}
	.app-recommend{
		
	}
	.div-form{
		padding: 0.5em;
	}
		.mycomment{		
		width: 100%;
		background: #f7f7f7;
	}
	.comment-div{
		background: #EEEEEE;
	}
	.myrow{
		width: 100%;
		padding:1em 0 1em 0;
	}
	.myrow>div{
		
	}
	.div-img{
		float: left;
		width: 4em;
	}
	.author-img{
		height: 3em;
		margin-left: 0.5em;
	}
	.author{
		text-decoration: none;
		color: #4093C6;
	}
	.author:hover{
		text-decoration: none;
		color:#A60308;
	}
	.author:focus{
		text-decoration: none;
		color: #4093C6;
	}
	.addface{
		font-weight: normal;
		font-color:black;
	}
	.solidline{
		height: 1px;
		width: 100%;
		background-color:#AAAAAA;
	}
	.dottedline{
		height: 1px;
		width: 100%;
		background-color:#CCCCCC;
	}
	.span-right>a,.span-right>span{
		float: right;
		margin-right: 0.5em;
	}
	.hf{
	}
	.hftime{
	}
	.comment-up{
		color: black;
	}
	.comment-up:hover{
		color: #C80101;
	}
	.input-group{

	}

	form{
		border: none;
	}
	.submit-btn{
		width: 100%;
	}
</style>
<div>
	<div class="row">
		<div class="col-md-12 comment-div">
			<div>
				<h3><i class="fa fa-commenting fa-1x"></i>&nbsp;评论&nbsp;|&nbsp;Comment</h3>
		    	<div>
    				<div class="pinglun">
				        <div class="div-form">
				            <form class="" action="<?php echo U('Home/Page/addComment');?>" method="post">
				                <div class="form-group">
				                    <label for="username"><i class="fa fa-user-o fa-1x"></i>&nbsp;昵称&nbsp;|&nbsp;Name</label>
				                    <input id="username" class="form-control" type="text" placeholder="昵称" name="username">
				                    <input type="hidden" placeholder="" name="pid" value="0">
				                    <input type="hidden" placeholder="" name="app_id" value="<?php echo ($app_id); ?>"> 
				                    <input type="hidden" placeholder="" name="category" value="<?php echo ($category); ?>">
				                </div>
				                <div class="form-group">
				                    <label for="mail"><i class="fa fa-envelope-o fa-1x"></i>&nbsp;邮箱&nbsp;|&nbsp;Email</label>
				                    <input id="mail" class="form-control" type="email" placeholder="one@example.com" name="mail">
				                </div>
				                <div class="form-group">
				                	<label for="content-text">
				                		<i class="fa fa-comment-o fa-1x"></i>&nbsp;评论&nbsp;|&nbsp;Comment&nbsp;&nbsp;&nbsp;
				                		<a class="addface" href="javascript:void(0)"></a>
				                	</label>
				                    <textarea id="content-text" class="form-control"  name="comment" rows="3" placeholder="请输入评论内容">
				                    	
				                    </textarea>
				                </div>
				                <div class="input-group submit-btn">
				                    <button class="btn btn-info" type="submit">提交</button>
				                </div>
				            </form>
				        </div>
				    </div>
		    	</div>
			</div>
			<div class="comment-info">
				<?php echo W('Comment/showComment',array(0,4,$app_id,$category));?>
			</div>
			<?php if(($page) > "0"): ?><div class="mybutton">
					<?php $__FOR_START_21627__=0;$__FOR_END_21627__=$page;for($i=$__FOR_START_21627__;$i < $__FOR_END_21627__;$i+=1){ ?><button class="btn btn-default btn-page" id=<?php echo ($i); ?>><?php echo ($i+1); ?></button><?php } ?>			
				</div><?php endif; ?>
		</div>
		<div class="col-md-0">
			<div class="app-recommend">
				
				
			</div>
		</div>
	</div>
	
</div>

<script type="text/javascript">
	var start=0;
	var num=4;
	var len='<?php echo ($page); ?>';
	var app_id='<?php echo ($app_id); ?>';
	var category='<?php echo ($category); ?>';
	$('.btn-page').click(function(event) {
		if($(".hf").parent().parent().parent().parent().find('.div-form').length!=0){
			$(".div-form").find("input[name='pid']").val(0);
			$(".div-form").insertAfter($(".pinglun"));
		}
		start=$(this).attr('id')*num;
		$(".btn-page").addClass('disabled');
		
		postInfo($(this));
	});
	if(len>0){
		$('.btn-page').first().addClass('disabled');
	}
	function postInfo(e){
		var url="<?php echo U('Home/Page/index');?>";
		$.post(url,{start:start,num:num,app_id:app_id,category:category},function(data){			
			$(".comment-info").html(data.info);			
			$(".btn-page").removeClass('disabled');
			e.addClass('disabled');
		});
	}
	/*function emojiInit(s,b){
		$(s).emoji({
			button:b,
			showTab: true,
	    	animation: 'fade',
			icons:icons,
		});
	}
	
	emojiInit("#content-text",".addface");
	
	$(".content").emojiParse({
		icons:icons,
	});
	*/
	$("form").submit(function(event) {
		var user= $("input[name='username']").val();
		var text=$("textarea[name='comment']").val();
		if(user.length>15||user.length<2){
			alert_alt('请输入正确用户名');
			return false;
		}else if(text.length==0){
			alert_alt('请输入评论内容');
			return false;
		}
		return true;
	});

	jQuery(document).ready(function($) {
/*
		$("#content-text").emojioneArea({
      		autoHideFilters: true,
      		placeholder:'请输入评论内容'
   		});*/

	});
</script>