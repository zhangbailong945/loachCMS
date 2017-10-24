<?php
require substr(dirname(__FILE__),0,-5).'/init.inc.php';

//实例化模板类
global $tpl;

$tpl->assign('template_admin',TEMP_ADMIN_URL);
$tpl->assign('admin_user',$_SESSION['admin']['admin_user']);
$tpl->assign('level_name',$_SESSION['admin']['level_name']);
//控制器入口
$post=new PostAction($tpl);
$post->action();
$tpl->display('admin/post.tpl');


