<?php
define('URL_CALLBACK', 'http://demo.cn/index.php?m=Index&a=callback&type=');
return array(
	//'配置项'=>'配置值'
	//腾讯QQ登录配置
	'THINK_SDK_QQ' => array(
		'APP_KEY'    => '11', //应用注册成功后分配的 APP ID
		'APP_SECRET' => '11', //应用注册成功后分配的KEY
		'CALLBACK'   => URL_CALLBACK . 'qq',
	),
	
);