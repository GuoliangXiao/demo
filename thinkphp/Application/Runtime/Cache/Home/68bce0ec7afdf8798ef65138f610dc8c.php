<?php if (!defined('THINK_PATH')) exit();?><div>
	<div class="comment-div">
	    <?php if(($comment_len) > "0"): ?><div class="mycomment">
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
		                            <span class="black" style="color: #000101">回复</span>
		                            <a href="javascript:void(0)" class="author"><?php echo ($vo["pauthor"]); ?></a><?php endif; ?>
		                    	</span>
		                    	<span class="span-right">
		                    		<a class="hf" href="javascript:void(0)" id="<?php echo ($vo["id"]); ?>">回复</a>
		                    		
		                    		<span>
		                    			<span  class="hfplace"><?php echo ($vo["place"]); ?></span>
		                    			<span  class="hftime"><?php echo ($vo["time"]); ?></span>
		                    			
		                    		</span>
		                    		<span>
		                    			<span class="comment-up-times" id="<?php echo ($vo["id"]); ?>"><?php echo ($vo['love_times']); ?></span>
		                    			<a id="<?php echo ($vo["id"]); ?>" class="comment-up" href="javascript:void(0)">
		                    				<i class="fa fa-thumbs-o-up fa-1x"></i>
		                    			</a>
		                    		</span>
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
	$(".hf").click(function(event) {
		if($(this).parent().parent().parent().parent().find('.div-form').length==0){
			var userid=$(this).attr('id');
			$(".div-form").find("input[name='pid']").val(userid);
			$(".div-form").insertAfter($(this).parent().parent().parent());
		}else{
			$(".div-form").find("input[name='pid']").val(0);
			$(".div-form").insertAfter($(".pinglun"));
		}
	});
	$(".comment-up").click(function(event) {
		var url='<?php echo U("Home/Page/commentUp");?>';
		var comment_id=$(this).attr('id');
		$.post(url,{id:comment_id},function(data) {
			if(data['status']==1){
				$(".comment-up-times[id="+comment_id+"]").text(data['data']);
			}
		});
	});

</script>