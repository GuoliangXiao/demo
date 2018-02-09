<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	.c-date{
	height: 20em;
	background: #1B72C1;
	color: white;
	}
	.home-weater{
		height: 10em;
		width: 100%;
	}
	.home-weater ul{
		padding: 0;
		margin: 0;
	}
	.home-weater ul li{
		list-style: none;
		text-decoration: none;
		display: inline-block;
		padding: 0.5em;
		margin: 0;
	}
	.home-weater ul li img{
		display: inline-block;
		height: 8em;
		padding: 0.3em 0 0.5em 0;
		vertical-align: top;
	}
	.home-weater ul li div{
		display: inline-block;
		height: 7em;
		width: auto;
		vertical-align: top;
	}
	.h3-title{
		padding: 0;
		margin:  0.3em 0 0.2em 0;
		display: inline-block;
	}
	.home-ip{
		padding: 0.5em;
		height: 10em;
	}
	.home-ip>div{
		line-height: 2em;
		font-size: 1.1em;
	}
	.ip-info{
		font-size: 1.2em;
		font-weight: bold;
	}
</style>
<div class="c-date">
	<div class="home-weater">
		<ul>
			<li>
				<img src="/xhust/thinkphp/Public/Apps/Weather/img/<?php echo ($weather_info['data']['forecast'][0]['type']); ?>.png">
			</li>
			<li>
				<div>
					<h3 class="h3-title"><?php echo ($weather_info['data']['city']); ?></h3><br/>
					<h3 class="h3-title"><?php echo ($weather_info['data']['forecast'][0]['type']); ?></h3>

					<span style="font-size: 1.2em;margin-left: 0.8em;"><?php echo ($weather_info['data']['forecast'][0]['fengxiang']); ?></span>
					<br/>
					<span><?php echo ($weather_info['data']['forecast'][0]['high']); ?>&nbsp;&nbsp;
					<?php echo ($weather_info['data']['forecast'][0]['low']); ?></span><br>
					<span>
						<?php date_default_timezone_set("PRC"); echo (date("Y年m").'月'.$weather_info['data']['forecast'][0]['date']); ?>
						
					</span>
					<br>
					
					
				</div>
			</li>
		</ul>
	</div>
	<div class="home-ip">
		<div>
			<span>您的IP地址是&nbsp;</span><span class="ip-info"><?php echo ($user_info['ip']); ?></span>。
		</div>
		<div>
			<span>您所在地区是&nbsp;</span><span class="ip-info"><?php echo ($user_info['place']); ?></span>。
		</div>
		<div>
			<span>您的浏览器是&nbsp;</span><span class="ip-info"><?php echo ($user_info['browser']); ?></span>。
		</div>
		<div>
			<span>您的操作系统&nbsp;</span><span class="ip-info"><?php echo ($user_info['os']); ?></span>。
		</div>
	</div>	
									
</div>