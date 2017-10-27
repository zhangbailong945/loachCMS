<?php
require substr(dirname(__FILE__),0,-7).'/init.inc.php';

if(isset($_POST['send']))
{
  $fileUpload=new FileUpload('thumbnail',$_POST['MAX_FILE_SIZE']);
  $file_link=$fileUpload->getPath();
  $image=new Image($file_link);
  $image->thumb_width_height(150,50);
  $image->saveImage();
  Tool::alertUploadBack(''.$file_link.'');
}
else 
{
  Tool::alertBack('警告','<font color="red">文件过大导致浏览器崩溃!</font>');
}