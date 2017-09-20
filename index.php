<?php

require dirname(__FILE__).'/init.inc.php';
//实例化模板类
global $tpl;

$name='loachcms';
$arr=array(1,2,3,4,5);
$tpl->assign('name',$name);
$tpl->assign('list',$arr);
$tpl->assign('templates',TEMP_INDEX_URL);
$code=new Captcha();
echo 111;
echo $code->getCodeImage();
//载入主页模板
$tpl->noParse('index/header.tpl');
$tpl->display('index/index.tpl');
$tpl->noParse('index/footer.tpl');
