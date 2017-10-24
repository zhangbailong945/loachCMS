<?php
require substr(dirname(__FILE__),0,-5).'/init.inc.php';

//实例化模板类
global $tpl;

$tpl->assign('template_admin',TEMP_ADMIN_URL);
$tpl->assign('template_plugins',TEMP_PLUGINS_URL);
//控制器入口
$manager=new LevelAction($tpl);
$manager->action();
$tpl->display('admin/level.tpl');