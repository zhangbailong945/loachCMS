<?php

//模板目录
define('TPL_DIR',ROOT_PATH.'/templates/');
//编译模板目录
define('TPL_C_DIR',ROOT_PATH.'/templates_c/');
//缓存文件夹
define('CACHE_DIR',ROOT_PATH.'/cache/');
//插件地址
define('PLU_DIR',ROOT_PATH.'/plugins/');
//主页地址
define('SITE_URL','http://localhost/loachCMS/');
//后台地址
define('SITE_ADMIN_URL','http://localhost/loachCMS/admin');
//后台模板地址
define('TEMP_ADMIN_URL',SITE_URL.'templates/admin');
//前台模板地址
define('TEMP_INDEX_URL',SITE_URL.'templates/index');
//插件地址 存放layer等等插件
define('TEMP_PLUGINS_URL',SITE_URL.'templates/plugins');
//双引号过滤
define("GMQG",get_magic_quotes_gpc());

//数据库配置文件
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','loachcms');
define('DB_PORT',3306);
define('DB_CHAR','utf8');

//分页配置
define('PAGE_SIZE',10);
//导航配置
define('NAV_SIZE',10);  //前台显示主导航个数
//上一页地址
define('PREV_URL',@$_SERVER["HTTP_REFERER"]);


?>