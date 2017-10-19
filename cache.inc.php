<?php
//缓存文件夹,前台
define('IS_CACHE',false);
IS_CACHE?ob_start():null;

global $tpl;
//模板句柄
$nav=new NavAction($tpl);
$nav->showIndexNav(); //列出主导航


