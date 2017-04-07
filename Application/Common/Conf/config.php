<?php
return array(
	//'配置项'=>'配置值'
	//url路由模式	
	'URL_MODEL'         => 1,
	//分组
	'MODULE_ALLOW_LIST' => array('Home','SudoSdk','Mobile'),
	//默认分组
	'DEFAULT_MODULE'    => 'Home',

    'APP_DOMAIN_SUFFIX'=>'info',

	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'video',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '654321',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'ts_',    // 数据库表前缀


    'APP_SUB_DOMAIN_DEPLOY' => 1,
    'APP_SUB_DOMAIN_RULES' => array(
    		'm' =>  'Mobile',
    	),

);
