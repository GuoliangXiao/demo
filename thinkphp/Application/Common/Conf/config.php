<?php
return array(
	//'配置项'=>'配置值'
	//修改模板的视图目录p44
	//'DEFAULT_V_LAYER'=>'View',
	//修改view默认后缀名
	//'TMPL_TEMPLATE_SUFFIX'=>'.html',
	//修改标签
	//'TMPL_L_DELIM'=>'<{',
	//'TMPL_R_DELIM'=>'}>',
	//'VIEW_PATH'=>'./Public/',
	
/*	'SHOW_PAGE_TRACE' =>false,
	'DB_TYPE'=>'mysql',
	'DB_USER'=>'root',
	'DB_PWD'=>'root',
	'DB_PREFIX'=>'x_',
	'DB_DSN'=>'mysql:host=localhost;dbname=sweat;charset=utf8mb4',*/
	
	'SHOW_PAGE_TRACE' =>false,
	'DB_TYPE'=>'mysql',
	'DB_USER'=>'admin',
	'DB_PWD'=>'admin',
	'DB_PREFIX'=>'x_',
	'DB_DSN'=>'mysql:host=172.30.214.187;dbname=sweat;charset=utf8mb4',
	
	'contact'=>array(
		'email'=>'xgl1123@foxmail.com',
		'weibo'=>'http://weibo.com/xhust',
		'cnblog'=>'http://www.cnblogs.com/xglove/',
		'github'=>'https://github.com/GuoliangXiao',
		'about'=>"百无一用是柔情，不屑一顾最相思。",
		'copyright'=>"Copyrights&copy;xhust.tk",
	),
	'article'=>array(
		'tail'=>"百无一用是柔情，不屑一顾最相思。",
	),
	'TMPL_PARSE_STRING'=>array(
	),
	'UPLOAD_SITEIMG_QINIU' => array ( 
        'maxSize' => 10 * 1024 * 1024,//文件大小5M
        'rootPath' => './',
        'saveName' => array ('uniqid', ''),
        'driver' => 'Qiniu',
        'driverConfig' => array (
            'secretKey' => 'ZoCqEwQ-SJK0Jjeat02KnV7IwKdTwBoPmchsZ7P-', 
            'accessKey' => 'v6cvE4V-mmHHlKrCiQ5Gv3LH0sjmS2xjnezuVcVm',
            'domain' => 'p3u1lifj3.bkt.clouddn.com',
            'bucket' => 'blogfile',
        ) 
    ),
    'SESSION_OPTIONS'=>array('name'=>'login','expire'=>3600),
);