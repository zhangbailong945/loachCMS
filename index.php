<?php
//设置编码为UTF-8
header("Content-Type:text/html;charset=utf-8;");
ob_start();
//根目录
define('ROOT_PATH',dirname(__FILE__));
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
define('TEMP_URL',SITE_URL.'templates/');

//缓存文件夹
define('IS_CACHE',false);
IS_CACHE?ob_start():null;
//引入模板类
require ROOT_PATH.'/includes/Template.class.php';


//设置中国时区
date_default_timezone_set('Asia/Shanghai');
//实例化模板类
$tpl=new Template();

$name='loachcms';
$arr=array(1,2,3,4,5);
$tpl->assign('name',$name);
$tpl->assign('list',$arr);
$tpl->assign('templates',TEMP_URL);
//载入主页模板
$tpl->noParse('header.tpl');
$tpl->display('index.tpl');
$tpl->noParse('footer.tpl');























