<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	.h3-title{
		padding: 0;
		margin:  0.5em 0 0.2em 0;
		display: inline-block;
	}
	.weather-info{
		padding: 0;
		margin: 0em;
		background: #0B0B0B;
		width: 100%;
		color: white;
		border-bottom: 1px solid white;
	}
	.weather-info ul{
		padding: 0;
		margin: 0;
	}
	.weather-info ul li{
		list-style: none;
		text-decoration: none;
		display: inline-block;
		padding: 0.5em 1em 0.5em 1em;
		margin: 0;
	}
	.weather-info ul li img{
		display: inline-block;
		height: 10em;
		padding: 0.3em 0 0.5em 0;
		vertical-align: top;
	}
	.weather-info ul li div{
		display: inline-block;
		height: 9em;
		width: auto;
		vertical-align: top;
	}
	.weather-info-ganmmao{
		height: 9em;
		line-height: 2em;
		vertical-align: center;
		max-width: 12em;
		width: auto;
		margin-top:1em;
		background: transparent;
	}
	.weather-next{
		padding-top: 1em;
		background: #0B0B0B;
		color:white;
	}
	.weather-next ul{
		border-top:0px solid black;
	}
	.weather-next strong{
		font-size: 1.1em;
		margin-left: 2em;
		display: inline-block;
		width: 100%;
	}
	.weather-forecast-info{
		width: 9em;
		padding: 0.5em;
		border: 0px solid green;
	}
	.weather-forecast-info div{
		width: 100%;
		text-align: center;
		font-size: 1em;
		font-weight: bold;
	}
	.weather-forecast-info div img{
		width: 100%;
	}
	.temp-plot{
		width: 100%;
		height: 14em;
	}
	.div-aqi{
		padding-top:1em;
	}
	.div-aqi-2{
		margin-left : 0;
		padding-left: 0;
	}
	.legend_container{
		width: 100%;
		height: 4em;
		margin-bottom: 0.5em;
	}
	.aqi-info{
		width: 100%;
		height: 9em;
		margin-top:0em;
	}
	.aqi-content{
		width: 100%;
		height: 7em;
		margin-bottom: 0.5em;
	}
	.aqi-content>div{
		float: left;
		display: inline-block;
		color:white;
	}
	.aqi-content-1{
		padding-top:2em;
		width: 30%;
	
	}
	.aqi-content-1>div{
		font-size: 1.3em;
		font-weight: bold;
		text-align: center;
	}
	.aqi-content-2{
		padding-top:0.5em;
		width: 70%;
	}
</style>
<div class="row">
	<div class="col-md-6">
		
		 
		<div class="weather-info">
			<ul>
				<li>
					<img src="/xhust/thinkphp/Public/Apps/Weather/img/<?php echo ($info['data']['forecast'][0]['type']); ?>.gif">
				</li>
				<li>
					<div>
						<h3 class="h3-title"><?php echo ($info['data']['city']); ?></h3><br/>
						<h3 class="h3-title"><?php echo ($info['data']['forecast'][0]['type']); ?></h3>

						<span style="font-size: 1.2em;margin-left: 0.8em;"><?php echo ($info['data']['forecast'][0]['fengxiang']); ?></span>
						<br/>
						<span><?php echo ($info['data']['forecast'][0]['high']); ?>&nbsp;&nbsp;
						<?php echo ($info['data']['forecast'][0]['low']); ?></span><br>
						<span>
							<?php  date_default_timezone_set("PRC"); echo (date("Y年m").'月'.$info['data']['forecast'][0]['date']); ?>
							
						</span>
						<br>
						
						
					</div>
				</li>
				<li>
					<div>
						<p class="weather-info-ganmmao"><?php echo ($info['data']['ganmao']); ?></p>
					</div>
				</li>
			</ul>
		</div>

		<div class="weather-next">
			<ul>
				<?php $__FOR_START_30170__=1;$__FOR_END_30170__=5;for($i=$__FOR_START_30170__;$i < $__FOR_END_30170__;$i+=1){ ?><li class="weather-forecast-info">
						<div><?php echo ($info['data']['forecast'][$i]['date']); ?></div>
						<div><?php echo ($info['data']['forecast'][$i]['type']); ?></div>
						<div>
							<img src="/xhust/thinkphp/Public/Apps/Weather/img/<?php echo ($info['data']['forecast'][$i]['type']); ?>.gif">
						</div>
					</li><?php } ?>
			</ul>
		</div>
	</div>
	<div class="col-md-6">
		<div class="temp-plot"></div>
		<div class="row div-aqi">
			<div class="col-md-2"><div class="legend_container"></div></div>
			<div class="col-md-10 div-aqi-2">
				<div class="aqi-info">
					<div class="aqi-content">
						<div class="aqi-content-1">
							<div></div>
							<div></div>
						</div>
						<div class="aqi-content-2"></div>
					</div>
					<div class="aqi-standart">
						<?php $__FOR_START_18955__=0;$__FOR_END_18955__=6;for($i=$__FOR_START_18955__;$i < $__FOR_END_18955__;$i+=1){ ?><div style="display:inline-block; width: 16.66%;height: 1.5em;text-align: center;line-height: 1.5em;color: white;"></div><?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function plot(d1, d2, t) {
	    var data = [{
	        color : "green",
	        label : "夜晚",
	        data : d1
	    }, {
	        color : "red",
	        label : "白天",
	        data : d2
	    }];
	    var options = {
	        xaxis : {
	            min : 0,
	            minTickSize : 1,
	            color : "black",
	            ticks : t,
	            tickColor : "black",
	            font : {
	                color : "black",
	                family : "'Microsoft YaHei', 'MS Sans Serif', Geneva, sans-serif"
	            }
	        },
	        yaxis : {
	            tickColor : "black",
	            color : "black",
	            font : {
	                color : "black",
	                family : "'Microsoft YaHei', 'MS Sans Serif', Geneva, sans-serif"
	            }
	        },
	        legend : {
	            container : ".legend_container"
	        },
	        series : {
	            points : {
	                show : true
	            },
	            lines : {
	                show : true
	            }
	        },
	        grid : {
	            color : "black",
	           
	            labelMargin : 10
	        }
	    };

	    $.plot(".temp-plot", data, options);
	}
	function plot_temp(obj)
	{
	    var s = obj.data.yesterday.low;
	   // alert(s);
	    s = s.substring(3, s.length - 1);
	    var d1 = [[0, s]];
	    s = obj.data.yesterday.high;
	    s = s.substring(3, s.length - 1);
	    var d2 = [[0, s]];
	    var t = [[0, obj.data.yesterday.date]];
	    for (var i = 0; i < obj.data.forecast.length; i++) {
	        var s = obj.data.forecast[i].low;
	        s = s.substring(3, s.length - 1);
	        d1.push([i + 1, s]);
	        s = obj.data.forecast[i].high;
	        s = s.substring(3, s.length - 1);
	        d2.push([i + 1, s]);
	        t.push([i + 1, obj.data.forecast[i].date]);
	    }
	    for (var i = 0; i < d1.length; i++) {
	        for ( j = 0; j < d1[i].length; j++) {
	            //alert(d1[i][j]);
	        }
	    }
	    plot(d1, d2, t);
	}
	function getAqiDegreen(aqi) {
    if (aqi < 200) {
        return Math.floor(aqi / 50);
	    } else if (aqi < 300) {
	        return 4;
	    } else {
	        return 5;
	    }
	}
	var AQI = new Array(["优","#72B963","空气质量令人满意，基本无空气污染，可以正常活动。","11.1%"], ["良","#E1C556","空气质量可以接受，但某些污染物可能对极少数异常敏感人群健康有较弱影响，一般可以正常活动，极少数异常敏感人群应减少户外活动。","11.1%"], ["轻度污染","#E6855C","易感人群症状有轻度加剧，健康人群出现刺激症状，心脏病和呼吸系统疾病患者应减少体力消耗和户外活动。","22.2%"], ["中度污染","#BE5156","易感人群症状有所加剧，运动耐受力降低，可能对健康人群心脏和呼吸系统有影响，儿童，老年人和心肝病、肺病患者应减少体力活动。","22.2%"], ["重度污染","#A24975","心脏病和肺病患者症状显著加剧，运动耐受力降低，健康人群普遍出现症状，儿童，老年人和心肝病、肺病患者应停止户外活动，一般人也应减少户外活动。","22.2%"], ["有毒","#823D47","健康人运动耐受力降低，有明显强烈症状，提前出现某些疾病 ，老年人和病人应当留在室内，避免体力消耗，一般人群应尽量避免户外活动。","11.1%"]);
	jQuery(document).ready(function($) {
		var obj=$.parseJSON('<?php echo ($json_info); ?>');
		plot_temp(obj);

		var aqid=getAqiDegreen(obj.data.aqi);
		aqid=3;
		$(".aqi-content").css('background',AQI[aqid][1]);
		$(".aqi-content-1>div:first").text(obj.data.aqi);
		$(".aqi-content-1>div:last").text(AQI[aqid][0]);
		$(".aqi-content-2").text(AQI[aqid][2]);
		$(".aqi-standart>div").each(function(index, el) {
			$(this).css('background',AQI[index][1]);
			$(this).text(AQI[index][0]);
			$(this).width(AQI[index][3])
		});
	});

</script>