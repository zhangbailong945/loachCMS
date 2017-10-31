<?php

/**
 * 图像处理类
 * @author loach
 *
 */
class Image{

	private $file_path; //上传后的图片绝对路径地址
	private $width;     //上传后的图片宽度
	private $height;    //上传后的图片高度
	private $type;      //上传的图片类型
	private $img;       //图片句柄
	private $new_img;   //新图片句柄
	
	/**
	 * 构造方法
	 */
	public function __construct($file)
	{
	  $this->file_path=$_SERVER["DOCUMENT_ROOT"].$file;
	  list($this->width,$this->height,$this->type)=getimagesize($this->file_path);
	  $this->img=$this->getImageFromFile($this->file_path,$this->type);
	   	  
	}
	
	/**
	 * 百分比缩放
	 */
	public function thumb_per($per)
	{
	    $new_width=$this->width*($per/100);
	    $new_height=$this->height*($per/100);
	    $this->new_img=imagecreatetruecolor($new_width,$new_height);
	    imagecopyresampled($this->new_img,$this->img,0,0,0,0,$new_width,$new_height,$this->width,$this->height);
	}
	
	/**
	 * 等比例缩放,填充，裁剪
	 */
	public function thumb_width_height($new_width=0,$new_height=0)
	{
		if(empty($new_width)&&empty($new_height))
		{
		    $new_width=$this->width;
		    $new_height=$this->height;
		}
		
		if(!is_numeric($new_width)&&!is_numeric($new_height))
		{
		    $new_width=$this->width;
		    $new_height=$this->height;
		}
		
		//创建一个容器
		$new_width_1=$new_width;
		$new_height_1=$new_height;
		//创建裁剪点
		$cut_width=0;
		$cut_height=0;
		
		if($this->width<$this->height)
		{
		   $new_width=($new_height/$this->height)*$this->width;
		}
		else 
		{
		   $new_height=($new_width/$this->width)*$this->height;
		}
		
			//如果新宽度小于新容器宽度
		if($new_width<$new_width_1)
		{
		   $r=$new_width_1/$new_width; //按长度求出比例因子
		   $new_width*=$r; //扩展填充后的长度
		   $new_height*=$r;//扩展后的高度
		   $cut_height=($this->height-$new_width_1)/4; //求出裁剪点的高度
		}
		
	    //如果新高度小于新容器高度
		if($new_height<$new_height_1)
		{
		   $r=$new_height_1/$new_height; //按高度求出比例因子
		   $new_width*=$r; //扩展填充后的长度
		   $new_height*=$r;//扩展后的高度
		   $cut_width=($this->width-$new_height_1)/4; //求出裁剪点的高度
		}
	    $this->new_img=imagecreatetruecolor($new_width_1,$new_height_1);
	    imagecopyresampled($this->new_img,$this->img,0,0,$cut_width,$cut_height,$new_width,$new_height,$this->width,$this->height);
	}
	
	/**
	 *根据上传的图片类型，返回相应图片资源类型
	 */
	private function getImageFromFile($file,$type)
	{
	   switch($type)
	   {
	   	 case 1:
	   		$image=imagecreatefromgif($file);
	   		break;
	   	 case 2:	   	    	
	   	 	$image=imagecreatefromjpeg($file);
	   	 	break;
	   	 case 3:
	   	 	$image=imagecreatefrompng($file);
	   	 	break;
	   	 default:
	   	 	Tool::alertBack('警告','<font color="red">图片类型不支持!</font>');	   		
	   }
	   return $image;
	}
	
	/**
	 * 输出图片
	 */
	public function saveImage()
	{
	   imagepng($this->new_img,$this->file_path);
	   imagedestroy($this->img);
	   imagedestroy($this->new_img);
	}
}