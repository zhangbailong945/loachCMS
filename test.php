<?php

//载入一张图片,创建一张新图片
$img=imagecreatefromjpeg('test.jpg');
//获取图片的长和搞
list($width,$height,$type)=getimagesize('test.jpg');

$new_width=150;
$new_height=50;
//echo $new_width.'--'.$new_height.'<br/>';
if($width<$height)
{
	$new_width=($new_height/$height)*$width;
}
else
{
	$new_height=($new_width/$width)*$height;
}
//echo $new_width.'--'.$new_height.'<br/>';

/*按百分比
$per=0.3;
$newWidth=$width*$per;
$newHeight=$height*$per;
*/
//创建新图像，用上缩放后的大小
$new=imagecreatetruecolor($new_width,$new_height);
imagecopyresampled($new,$img,0,0,0,0,$new_width,$new_height,$width,$height);

$color=imagecolorallocate($new,0,0,0);
//文字水印
imagettftext($new,10,0,10,10,$color,'includes/Elephant.ttf','zhangbailong.com');
//图片水印
$mark=imagecreatefrompng('shuiyin.png');
imagecopy($new,$mark,10,10,0,0,140,20);


//定义编码格式
header('Content-Type:image/jpeg');
//输出图片
imagejpeg($new);

//销毁资源
imagedestroy($img);
?>