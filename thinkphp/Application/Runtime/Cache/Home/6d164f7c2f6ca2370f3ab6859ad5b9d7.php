<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	.articles{
		margin-top:1em;
	}
	.article-abstract{
		width: 100%;
		background: white;
		border-radius: 5px;
		padding: 0.5em;
		margin-top:0.5em;
	}
	.article-abstract>p{
		line-height: 1.6em;
		height: 3.2em;
		overflow: hidden;
		text-overflow:ellipsis;
	}
	.article-info{
		height: 2em;
	}
	.article-info>span{
		float: right;
		padding-right: 0.5em;
		color: #A8B1BA;
	}
	.blog-title{
		color: black;
	}
	.blog-title:hover{
		color: black;
		text-decoration: none;
	}
	.blog-title:focus{
		color: black;
		text-decoration: none;
	}
	.blog-page{
		margin-top:0.5em;
		text-align: center;
	}
	.blog-page>button{
		margin: 0.1em;
	}
</style>
<div class="row">
	<div class="col-md-8">
		<h3><i class="fa fa-list-ul fa-1x"></i>&nbsp;文章&nbsp;|&nbsp;Blog</h3>
		<div class="articles">
			<?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="article-abstract">
					<h4>
						<a target="_blank" class="blog-title" href="<?php echo U('Home/Article/index?id='.$vo['id']);?>"><?php echo ($vo['title']); ?></a>
					</h4>
					<p>
						<strong>摘要:</strong>
						<span class="blog-abstract"><?php echo filter_content($vo['content']);?></span>
					</p>
					<div class="article-info">
						<span>
							<i class="fa fa-eye fa-1x"></i>
							<span class="blog-read_times">(<?php echo ($vo['read_times']); ?>)</span>
						</span>
						<span>
							<i class="fa fa-thumbs-o-up fa-1x"></i>
							<span class="blog-love_times">(<?php echo ($vo['love_times']); ?>)</span>
							
						</span>
						
						<span>
							<i class="fa fa-clock-o fa-1x"></i> 
							<span class="blog-created_at"><?php echo date('Y-m-d',strtotime($vo['created_at']));?></span>
						</span>
						<span>
							<i class="fa fa-user-circle-o fa-1x"></i>
							<span class="blog-author"><?php echo ($vo['author']); ?></span>
						</span>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="blog-page">
			<?php if(($blogpage) > "1"): $__FOR_START_21642__=0;$__FOR_END_21642__=$blogpage;for($i=$__FOR_START_21642__;$i < $__FOR_END_21642__;$i+=1){ ?><button class="btn btn-default btn-blogpage" id=<?php echo ($i); ?>><?php echo ($i+1); ?></button><?php } endif; ?>
		</div>
	</div>
	<div class="col-md-4">
		<?php $is_phone=is_mobile(); if(!$is_phone){ W('Blog/blogrank'); } ?>
	</div>
</div>
<script type="text/javascript">
	var blogpagenum='<?php echo ($blogpage); ?>';
	var bloglimit="<?php echo ($blog_limit); ?>";
	if(blogpagenum>1){
		$(".btn-blogpage").first().addClass('disabled');
	}
	$(".btn-blogpage").click(function(event) {
		/* Act on the event */
		$(".btn-blogpage").addClass('disabled');
		blogstart=$(this).attr('id')*bloglimit;
		var url="<?php echo U('Home/Article/getBlog');?>";
		var e=$(this);
		$.post(url,{start:blogstart,limit:bloglimit},function(data){	
			showBlogData(data);
			$(".btn-blogpage").removeClass('disabled');
			e.addClass('disabled');
		});
	});
	function showBlogData(data){
		/*for(var i=0;i<data.length;i++){
			$(".article-abstract")[i].find('.title').text(data[i]['title']);
			//$(".article-abstract")[i].find('.title').text(data[i]['title']);

		}*/
		$(".article-abstract").each(function(index, el) {
			if(index<data.length){
				$(this).find('.blog-title').html(data[index]['title']);
				$(this).find('.blog-abstract').html(data[index]['content']);
				$(this).find('.blog-read_times').html(data[index]['read_times']);
				$(this).find('.blog-love_times').html(data[index]['love_times']);
				$(this).find('.blog-created_at').html(data[index]['created_at']);
				$(this).find('.blog-author').html(data[index]['author']);
				$(this).find('.blog-title').attr('href',data[index]['url']);
				$(this).css('display','block');
			}else{
				$(this).css('display','none');
			}			
		});
	}
</script>