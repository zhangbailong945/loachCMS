<?php
//设置编码为UTF-8
header("Content-Type:text/html;charset=utf-8;");
ob_start();
//根目录
define('ROOT_PATH',dirname(__FILE__));
//引入配置信息
require ROOT_PATH.'/config/config.inc.php';

//引入模板类
require ROOT_PATH.'/includes/Template.class.php';
//缓存机制
require 'cache.inc.php';

$tpl=new Template();
//设置中国时区
date_default_timezone_set('Asia/Shanghai');

















