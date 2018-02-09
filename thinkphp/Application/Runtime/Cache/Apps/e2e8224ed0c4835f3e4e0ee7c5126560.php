<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	
</style>
<div>
	<div>
		<h4><i class="fa fa-first-order fa-lg"></i>&nbsp;|&nbsp排行榜;</h4>
	</div>
	<table class="table table-striped">
		<tr>
			<td>#</td>
			<td>玩家</td>
			<td>分数</td>
			<td>时间</td>
		</tr>
		<?php if(is_array($score)): $i = 0; $__LIST__ = $score;if( count($__LIST__)==0 ) : echo "还没有人开始玩这个游戏哦，来成为第一个玩这个游戏的人吧！！" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($i); ?></td>
				<td><?php echo ($vo['name']); ?></td>
				<td <?php if($i<4){ echo "style='font-weight:bold;color:#A7040A;'"; } ?>
				><?php echo ($vo['score']); ?></td>
				<td><?php echo ($vo['time']); ?></td>
			</tr><?php endforeach; endif; else: echo "还没有人开始玩这个游戏哦，来成为第一个玩这个游戏的人吧！！" ;endif; ?>
	</table>
</div>