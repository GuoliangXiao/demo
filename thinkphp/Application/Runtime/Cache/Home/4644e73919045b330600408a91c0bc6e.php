<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">.my-apps{background: transparent;padding: 0.5em 1em 0.5em 1em;}.my-apps li{width: 7em;height: 9em;background: #F7F7F7;display: inline-block;text-decoration: none;margin:0.3em;}.my-apps li:hover{background: rgba(255,255,255,1);}.my-apps li img{margin-left:0.5em;margin-top:0.5em;width: 6em;}.my-apps li span{width: 100%;margin-top:0.5em;font-size: 1em;font-weight: bold;display: inline-block;text-align: center;}.my-apps li a{color:black;}.my-apps li a:hover{color:blue;}.love_rec{font-weight: bold;font-size: 1.2em;display: inline-block;padding: 0em;}.loved-apps{width: 100%;padding-left:0em;}.loved-apps li{width: 100%;background:#F7F7F9;font-size: 1.1em;margin:0.2em 0 0.2em 0;padding:0.5em;}.loved-apps li:hover{background: rgba(255,255,255,1);}.love-apps li strong{display: inline-block;}.loved-apps li a{margin-left: 0.5em;padding-left: 0.5em;text-decoration: none;color:black;}.loved-apps li a:hover{font-weight: bold;color:blue;}.loved-apps li span{float: right;display: inline-block;margin-right: 0.5em;font-weight: bold;}.my-heart{color:#FB9FA4;}.my-heart:hover{color:#FC434D;}.app-page{margin-top:0.5em;text-align: center;}.app-page>button{margin: 0.1em;}</style><div class="row"><div class="col-md-8"><h3><i class="fa fa-th-large fa-1x"></i>&nbsp;应用&nbsp;|&nbsp;Apps</h3><ul class="my-apps"><?php if(is_array($apps)): $i = 0; $__LIST__ = $apps;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href=<?php echo generate_url($vo['url'],$vo['id']);?> target="_blank"><img src="/xhust/thinkphp/Public/Apps/Icon/<?php echo ($vo["icon"]); ?>.gif"/><span><?php echo ($vo["name"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><div class="app-page"><?php if(($apppage) > "1"): $__FOR_START_14365__=0;$__FOR_END_14365__=$apppage;for($i=$__FOR_START_14365__;$i < $__FOR_END_14365__;$i+=1){ ?><button class="btn btn-default btn-apppage" id=<?php echo ($i); ?>><?php echo ($i+1); ?></button><?php } endif; ?></div></div><div class="col-md-4"><?php $is_phone=is_mobile(); if(($is_phone) == "0"): ?><h3><i class="fa fa-thumbs-up fa-1x"></i>&nbsp;点赞排行</h3><ul class="loved-apps"><?php if(is_array($loves)): $i = 0; $__LIST__ = $loves;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><strong><?php echo ($i); ?>.</strong><a href=<?php echo generate_url($vo['url'],$vo['id']);?> target="_blank"><?php echo ($vo["name"]); ?></a><span><a href="javascript:void(0);"><i id="<?php echo ($vo["id"]); ?>" class="my-heart fa fa-heart fa-1x"></i></a>&nbsp;<span id="<?php echo ($vo["id"]); ?>" class="love_times"><?php echo ($vo["love_times"]); ?></span></span></li><?php endforeach; endif; else: echo "" ;endif; ?></ul><?php endif; ?> </div></div><script type="text/javascript">var apppagenum='<?php echo ($apppage); ?>';var applimit=10;if(apppagenum>1){$(".btn-apppage").first().addClass('disabled');}$(".btn-apppage").click(function(event) {$(".btn-apppage").addClass('disabled');appstart=$(this).attr('id')*applimit;var url="{:U('')}";var e=$(this);$.post(url,{start:appstart,limit:applimit},function(data){showAppData(data);$(".btn-apppage").removeClass('disabled');e.addClass('disabled');});});function showAppData(data){}$('.my-heart').click(function(event) {var url='<?php echo U("Home/Index/addHeart");?>';var appid=$(this).attr('id');$.post(url, {id: appid}, function(data, textStatus, xhr) {if(data['status']==1){$(".love_times[id="+appid+"]").text(data['data']);}});});</script>