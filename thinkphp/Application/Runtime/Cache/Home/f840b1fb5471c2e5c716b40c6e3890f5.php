<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
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
		margin-right: 1em;
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
	.div-form{
		padding: 1em;
	}
	form{
		border: none;
	}
	.submit-btn{
		width: 100%;
	}
</style>
<script type="text/javascript">
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
<div>
	<h3><i class="fa fa-commenting fa-lg"></i>&nbsp;评论&nbsp;|&nbsp;Comment</h3>
	<div class="comment-div">
		<div class="pinglun ">
	        <div class="div-form">
	            <form action="<?php echo U('Home/Page/addComment');?>" method="post">
	                <div class="form-group">
	                    <label for="username"><i class="fa fa-user-o fa-lg"></i>&nbsp;昵称&nbsp;|&nbsp;Name</label>
	                    <input id="username" class="form-control" type="text" placeholder="昵称" name="username">
	                    <input type="hidden" placeholder="" name="pid" value="0">
	                    <input type="hidden" placeholder="" name="app_id" value="<?php echo ($app_id_p); ?>">
	                </div>
	                <div class="form-group">
	                    <label for="mail"><i class="fa fa-envelope-o fa-lg"></i>&nbsp;邮箱&nbsp;|&nbsp;Email</label>
	                    <input id="mail" class="form-control" type="email" placeholder="one@example.com" name="mail">
	                </div>
	                <div class="form-group">
	                	<label for="content-text">
	                		<i class="fa fa-comment-o fa-lg"></i>&nbsp;评论&nbsp;|&nbsp;Comment&nbsp;&nbsp;&nbsp;
	                		<a class="addface" href="javascript:void(0)">添加表情</a>
	                	</label>
	                    <textarea class="form-control" id="content-text" name="comment" rows="3" placeholder="请输入评论内容"></textarea>
	                </div>
	                <div class="input-group submit-btn">
	                    <button class="btn btn-info" type="submit">提交</button>
	                </div>
	            </form>
	        </div>
	    </div>

	    <?php if(($comment_len) > "0"): ?><div class="mycomment">
		        <h2></h2>
		        <?php if(is_array($commentList)): $i = 0; $__LIST__ = $commentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="myrow" style="padding-left:<?php echo comment_level($vo['level']);?>em">
		        		<div class="div-img">
		        			<img class="author-img" src="/xhust/thinkphp/Public/Comment/img/author.png"/>
		        		</div>
		        		<div>
		        			<div>
		                    	<span class="user">
		                        <?php if(($vo["pauthor"] == NULL)): ?><a href="javascript:void(0)" class="author"><?php echo ($vo["author"]); ?></a>
		                            <?php else: ?>                            
		                            <a href="javascript:void(0)" class="author"><?php echo ($vo["author"]); ?></a>
		                            <span class="black" style="color: #000101">&nbsp;回复&nbsp;</span>
		                            <a href="javascript:void(0)" class="author"><?php echo ($vo["pauthor"]); ?></a><?php endif; ?>
		                    	</span>
		                    	<span class="span-right">
		                    		<a class="hf" href="javascript:void(0)" id="<?php echo ($vo["id"]); ?>">回复</a>
		                    		
		                    		<span>
		                    			<span class="comment-up-times" id="<?php echo ($vo["id"]); ?>"><?php echo ($vo['love_times']); ?></span>
		                    			<a id="<?php echo ($vo["id"]); ?>" class="comment-up" href="javascript:void(0)">
		                    				<i class="fa fa-thumbs-o-up fa-lg"></i>
		                    			</a>
		                    		</span>
		                    		
		                    		<span  class="hftime"><?php echo (date("Y-m-d",$vo["time"])); ?></span>
		                    	</span>
		            		</div>
		                	<div class="content"><?php echo ($vo["content"]); ?></div>
		        		</div>
		        	</div>
		        	<?php if(($vo["pid"]) == "0"): ?><div class="solidline"></div>
						<?php else: ?>
						<div class="dottedline"></div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
	    	</div>
	    	<div class="solidline"></div><?php endif; ?>
	</div>
	
</div>
<script type="text/javascript">
	function emojiInit(s,b){
		$(s).emoji({
			button:b,
			showTab: true,
	    	animation: 'fade',
			icons:icons,
		});
	}
	$(".content").emojiParse({
		icons:icons,
	})
	emojiInit("#content-text",".addface");
	var startadd=0;
	$(".hf").click(function(event) {
		/* Act on the event */
		if($(this).parent().parent().parent().parent().find('.div-form-add').length==0){
			$('.div-form-add').remove();
			$('.pinglun').hide();
			var ht=$('.div-form').clone();
			ht.addClass('div-form-add');
			var userid=$(this).attr('id');
			//alert(userid)；
			ht.find("input[name='pid']").val(userid);
			//var pid=ht.find("input[name='pid']").val();
			ht.find(".addface").addClass('addface-alt'+startadd);
			ht.find("#content-text").addClass('content-text-alt'+startadd);
			$(this).parent().parent().parent().after(ht);
			emojiInit('.content-text-alt'+startadd,'.addface-alt'+startadd);
			startadd++;
			
			
		}else{
			$('.div-form-add').remove();
			$('.pinglun').show();
		}
	});
	$("form").submit(function(event) {
		/* Act on the event */
		var user= $("input[name='username']").val();
		var text=$("textarea[name='comment']").val();
		//alert(user);
		if(user.length>15||user.length<2){
			alert('请输入正确用户名');
			return false;
		}else if(text.length==0){
			alert('请输入评论内容');
			return false;
		}
		return true;
	});
	$(".comment-up").click(function(event) {
		/* Act on the event */
		var url='<?php echo U("Home/Page/commentUp");?>';
		var comment_id=$(this).attr('id');
		$.post(url,{id:comment_id},function(data) {
			/*optional stuff to do after success */
			if(data['status']==1){
				$(".comment-up-times[id="+comment_id+"]").text(data['data']);
			}
		});
	});

</script>