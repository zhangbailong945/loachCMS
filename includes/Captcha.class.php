<?php

/**
 * 验证码类
 * 生成4个英文字母验证码
 * @author loach
 *
 */
class Captcha{
    
    private $chars='abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPRSTUVWXYZ23456789'; //随机字符
    private $code; //验证码，用来存于session或cookie
    private $length=4; //验证码长度
    private $width=120; //宽度
    private $height=40; //高度
    private $img; //图像句柄
    private $font; //字体类型
    private $fontSize=20; //字体大小
    private $fontColor; //字体颜色
    
    /**
     * 构造函数，初始化资源
     */
    public function __construct()
    {
       $this->font=ROOT_PATH.'/templates/index/fonts/elephant.ttf';
    }
    
    /**
     * 生成4位的验证码
     */
    private function createCode()
    { 
        $len=strlen($this->chars)-1;
        for($i=0;$i<$this->length;$i++)
        {
           $this->code.=$this->chars[mt_rand(0,$len)];
        }
    }
    
    /**
     * 创建背景
     */
    private function createBackground()
    {
        $this->img=imagecreatetruecolor($this->width,$this->height);
        $color=imagecolorallocate($this->img,mt_rand(157,250), mt_rand(157,250), mt_rand(157,250));
        imagefilledrectangle($this->img,0,$this->height,$this->width,0,$color);
    }
    
    /**
     * 生成文字
     */
    private function createFont()
    {
       $x=$this->width/$this->length;
       for($i=0;$i<$this->length;$i++)
       {
          $this->fontColor=imagecolorallocate($this->img,mt_rand(0,166),mt_rand(0,166),mt_rand(0,166));
          imagettftext($this->img,$this->fontSize,mt_rand(-20,20),$x*$i+mt_rand(1,5),$this->height/1.2,$this->fontColor,$this->font,$this->code[$i]);
       }
    }
    
    /**
     * 创建干扰因子
     */
    private function createLine()
    {
    	for($i=0;$i<6;$i++) 
    	{
			$color =imagecolorallocate($this->img,mt_rand(0,166),mt_rand(0,166),mt_rand(0,166));
			imageline($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),mt_rand(0,$this->width),mt_rand(0,$this->height),$color);
		}
		for($j=0;$j<30;$j++) 
		{
			$color = imagecolorallocate($this->img,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
			imagestring($this->img,mt_rand(1,5),mt_rand(0,$this->width),mt_rand(0,$this->height),'*',$color);
		}
    }
    
    /**
     * 生成网页支持类png验证码图片
     */
    private function outPut()
    {
		header('Content-Type:image/png');
		imagepng($this->img);
		imagedestroy($this->img);
    }
    
    /**
     * 生成验证码图片
     */
    public function getCodeImage()
    {
    	$this->createCode();
        $this->createBackground();
        $this->createFont();
        $this->createLine();       
        $this->outPut();
    }
    
    /**
     * 获取验证码
     */
    public function getCode()
    {
       return strtolower($this->code);
    }
    
}

?>