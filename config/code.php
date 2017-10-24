<?php
require substr(dirname(__FILE__),0,-7).'/init.inc.php';
$code = new Captcha();
$code->getCodeImage();
$_SESSION['admincode'] = $code->getCode();
?>