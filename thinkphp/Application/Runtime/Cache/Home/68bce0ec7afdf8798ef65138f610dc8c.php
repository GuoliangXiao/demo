<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
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
	
</style>
<div>
	<div class="row">
		<div class="col-md-12 comment-div">

			<div class="comment-info">
		    
			</div>

			<?php if(($comment_count) > "0"): ?><div class="mybutton">
					<?php $__FOR_START_2432__=0;$__FOR_END_2432__=$page;for($i=$__FOR_START_2432__;$i < $__FOR_END_2432__;$i+=1){ ?><button class="btn btn-default btn-page" id=<?php echo ($i); ?>><?php echo ($i+1); ?></button><?php } ?>			
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
	var len='<?php echo ($comment_count); ?>';
	var app_id='<?php echo ($app_id); ?>';
	$('.btn-page').click(function(event) {
		/* Act on the event */
		start=$(this).attr('id')*num;
		$(".btn-page").removeClass('disabled');
		$(this).addClass('disabled');
		postInfo();
	});
	if(len>0){
		$('.btn-page').first().click();
	}else{
		postInfo();
	}
	function postInfo(){
		var url="<?php echo U('Home/Page/pageNext');?>";
		$.post(url,{start:start,num:num,app_id:app_id},function(data){
			//alert(data.info);
			$(".comment-info").empty();
			$(".comment-info").html(data.info);
			//$(".app-recommend").height($(".comment-div").height());
			//alert($(".comment-div").height());
		});
	}
</script>