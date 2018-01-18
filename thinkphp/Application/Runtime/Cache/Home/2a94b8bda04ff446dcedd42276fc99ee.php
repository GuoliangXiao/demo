<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>hello</title>
</head>
<link rel="stylesheet" type="text/css" href="/thinkphp/Public/Css/Home/index.css" />
<script type="text/javascript" src="/thinkphp/Public/Js/jquery-2.1.0.min.js"></script>
<script type="text/javascript">
	var editTableAction="<?php echo ($editTableAction); ?>";
	//alert(editTableAction);
</script>
<body>
	<div class="main">
		<li><?php echo ($dbFields[0]); ?></li>
		<span>
			<li><?php echo ($dbFields[1]); ?></li>
			<li><?php echo ($dbFields[2]); ?></li>
			<li><?php echo ($dbFields[3]); ?></li>
			<li><?php echo ($dbFields[4]); ?></li>
		</span>
		<li>success</li>
		<br/>
		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php echo ($vo["id"]); ?></li>
			<span id="<?php echo ($vo["id"]); ?>">
				<li><input type="text" name="<?php echo ($dbFields[1]); ?>" value="<?php echo ($vo["name"]); ?>" /></li>
				<li><input type="text" name="<?php echo ($dbFields[2]); ?>" value="<?php echo ($vo["picture"]); ?>"/></li>
				<li><?php echo ($vo["created_at"]); ?></li>
				<li><?php echo ($vo["updated_at"]); ?></li>
			</span>
			<li>
				<button class="edit" value="<?php echo ($vo["id"]); ?>">提交</button>
				<button class="delete" value="<?php echo ($vo["id"]); ?>">删除</button>
			</li>
			<br/><?php endforeach; endif; else: echo "" ;endif; ?>
	    <li><?php echo ($vo['id']+1); ?></li>
			<span id="<?php echo ($vo[id]+1); ?>">
				<li><input type="text" name="<?php echo ($dbFields[1]); ?>" value="" /></li>
				<li><input type="text" name="<?php echo ($dbFields[2]); ?>" value=""/></li>
				<li id="<?php echo ($dbFields[3]); ?>"><?php echo (date("Y-m-d H:i:s",$date)); ?></li>
				<li id="<?php echo ($dbFields[4]); ?>"><?php echo (date("Y-m-d H:i:s",$date)); ?></li>
			</span>
			<li>
				<button class="add" value="<?php echo ($vo['id']+1); ?>">添加</button>
			</li>
			<br/>
	</div>
	<script type="text/javascript" src="/thinkphp/Public/Js/Home/index.js"></script>
</body>
</html>