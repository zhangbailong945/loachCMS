<?php

//模板目录
define('TPL_DIR',ROOT_PATH.'/templates/');
//编译模板目录
define('TPL_C_DIR',ROOT_PATH.'/templates_c/');
//缓存文件夹
define('CACHE_DIR',ROOT_PATH.'/cache/');
//插件地址
define('PLU_DIR',ROOT_PATH.'/plugins/');
//前提资源地址
define('SITE_URL','http://localhost/loachCMS/');
//后台模板地址
define('TEMP_ADMIN_URL',SITE_URL.'templates/admin');
//前台模板地址
define('TEMP_INDEX_URL',SITE_URL.'templates/index');
//
define("GMQG",get_magic_quotes_gpc());

//数据库配置文件
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','loachcms');
define('DB_PORT',3306);
define('DB_CHAR','utf8');

?>