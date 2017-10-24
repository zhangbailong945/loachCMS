<?php
require substr(dirname(__FILE__),0,-6).'/init.inc.php';
global $tpl;
$login=new LoginAction($tpl);
$login->action();
if(isset($_SESSION['admin'])) Tool::alertLocation(null,null,'admin.php');
$tpl->assign('template_admin',TEMP_ADMIN_URL);
$tpl->assign('template_plugins',TEMP_PLUGINS_URL);
$tpl->display('admin/login.tpl');

?>