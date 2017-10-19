<?php
require dirname(__FILE__).'/init.inc.php';
global $tpl;
$list=new ListAction($tpl);
$list->getNav();

//载入tpl文件
$tpl->assign('templates',TEMP_INDEX_URL);

$tpl->display('index/list.tpl');



