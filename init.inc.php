<?php
//开启session
session_start();
//设置编码为UTF-8
header("Content-Type:text/html;charset=utf-8;");
//设置中国时区
date_default_timezone_set('Asia/Shanghai');

ob_start();
//根目录
define('ROOT_PATH',dirname(__FILE__));
//引入配置信息
require ROOT_PATH.'/config/config.inc.php';
//引入数据库
require ROOT_PATH.'/includes/Db.class.php';
/*
//引入模板类
require ROOT_PATH.'/includes/Template.class.php';

require ROOT_PATH.'/includes/Captcha.class.php';
*/

//自动加载机制
function __autoload($className)
{
   if(substr($className,-6)=='Action')
   {
       require ROOT_PATH.'/action/'.$className.'.class.php';
   }
   else if(substr($className,-5)=='Model')
   {
       require ROOT_PATH.'/model/'.$className.'.class.php';
   }
   else 
   {
       require ROOT_PATH.'/includes/'.$className.'.class.php';
   }
}



$tpl=new Template();


//缓存机制
require 'cache.inc.php';

















