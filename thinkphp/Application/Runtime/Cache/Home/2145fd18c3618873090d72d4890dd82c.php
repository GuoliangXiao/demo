<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	.blog-read-rank{
		width: 100%;
		padding-left:0em;
	}
	.blog-read-rank>li{
		width: 100%;
		background:#F7F7F9;
		font-size: 1.1em;
		margin:0.2em 0 0.2em 0;
		padding:0.5em;
	}
	.blog-read-rank li:hover{
		background: rgba(255,255,255,1);
	}
	
	.blog-read-rank li a{
		margin-left: 0.5em;
		padding-left: 0.5em;
		
		text-decoration: none;
		color:black;
	}
	.blog-read-rank li a:hover{
		font-weight: bold;
		color:blue;
	}
</style>
<h3><i class="fa fa-pie-chart fa-lg"></i>&nbsp;&nbsp;|&nbsp;阅读排行</h3>
<ul class="blog-read-rank">
	<?php if(is_array($read)): $i = 0; $__LIST__ = $read;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
			<strong><?php echo ($i); ?>.</strong>
			<a target="_blank" href="<?php echo U('Home/Article/index?id='.$vo['id']);?>"><?php echo ($vo['title']); ?></a>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>