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
</style>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="comment-info">
		
			</div>
			<div class="mybutton">
				<?php $__FOR_START_29268__=0;$__FOR_END_29268__=$page;for($i=$__FOR_START_29268__;$i < $__FOR_END_29268__;$i+=1){ ?><button class="btn btn-default btn-page" id=<?php echo ($i); ?>><?php echo ($i+1); ?></button><?php } ?>			
			</div>
		</div>
		<div class="col-md-4">
			
		</div>
	</div>
	
</div>
<script type="text/javascript">
	var start=0;
	var num=4;
	var len='<?php echo ($comment_count); ?>';
	
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
		$.post(url,{start:start,num:num},function(data){
			//alert(data.info);
			$(".comment-info").empty();
			$(".comment-info").html(data.info);
		});
	}
</script>