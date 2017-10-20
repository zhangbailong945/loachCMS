<?php
require substr(dirname(__FILE__),0,-6).'/init.inc.php';
global $tpl;
$tpl->assign('template_admin',TEMP_ADMIN_URL);
$tpl->display('admin/login.tpl');

?>