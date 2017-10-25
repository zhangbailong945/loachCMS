<?php


/**
 * 文件上传类
 * @author loach
 *
 */
class FileUpload{

	private $error; //错误信息
	private $file_max_size;//表单文件最大值限制
	private $file_type; //上传的文件类型
	private $file_type_array=array('image/jpeg','image/png','image/x-png','image/gif'); //运行上传的类型合集
	private $path; //目录路径
	private $today;//每天日期为一个目录
	private $name; //文件名
	private $tmp; //临时文件地址
	private $file_link; //上传后文件路径
	private $lin_today;
	
	/**
	 * 构造函数
	 */
	public function __construct($file,$max_size)
	{
	   $this->error=$_FILES[$file]['error'];
	   $this->file_type=$_FILES[$file]['type'];
	   $this->file_max_size=$max_size/1024;
	   $this->path=ROOT_PATH.UPLOAD_DIR;
	   $this->lin_today=date('Ymd').'/';
	   $this->today=$this->path.$this->lin_today;
	   $this->name=$_FILES[$file]['name'];
	   $this->tmp=$_FILES[$file]['tmp_name'];
	   $this->errorMessage();
	   $this->checkType();
	   $this->checkPath();
	   $this->upload();
	   
	}
	
	/**
	 * 上传
	 */
	private function upload()
	{
	   if(is_uploaded_file($this->tmp))
	   {
	      if(!move_uploaded_file($this->tmp,$this->setFileName()))
	      {
	         Tool::alertBack('警告','<font color="red">上传文件失败!</font>');
	      }
	   }
	   else
	   {
	       Tool::alertBack('警告','<font color="red">临时文件不存在!</font>');
	   }
	}
	
	/**
	 * 获取上传后的文件路径
	 */
	public function getPath()
	{
		$path=$_SERVER["SCRIPT_NAME"];
		$dir=dirname(dirname($path));
		if($dir=='\\')
		{
		   $dir='/';
		}
		$this->file_link=$dir.$this->file_link;
	    return $this->file_link;
	}
	
	/**
	 * 上传的文件设置为新的名字
	 */
	private function setFileName()
	{
	   $nameArray=explode('.',$this->name);
	   $postFix=$nameArray[count($nameArray)-1];
	   $newName=date('YmdHis').mt_rand(100,1000).'.'.$postFix;
	   $this->file_link=UPLOAD_DIR.$this->lin_today.$newName;
	   return $this->today.$newName;
    }
	
	/**
	 * 上传错误类型
	 */
	private function errorMessage()
	{
       if(!empty($this->error))
       {
           switch($this->error)
           {
           	   case 1:
           	   	Tool::alertBack('警告','<font color="red">文件大小超过上传限定大小!</font>');
           	   	break;
           	   case 2:
           	   	Tool::alertBack('警告','<font color="red">文件不能超过'.$this->file_max_size.'KB!</font>');
           	   	break;
           	   case 3:
           	   	Tool::alertBack('警告','<font color="red">只有部分文件被上传!</font>');
           	   	break;
           	   case 4:
           	   	Tool::alertBack('警告','<font color="red">请选择要上传文件!</font>');
           	   	break;
           	   default:
           	   	Tool::alertBack('警告','<font color="red">未知错误!</font>');
           }
       }	
	}
	
	/**
	 * 检查文件类型
	 */
	private function checkType()
	{
	    if(!in_array($this->file_type,$this->file_type_array))
	    {
	       Tool::alertBack('警告','<font color="red">上传类型不正确，仅支持png,jpg,gif.</font>');
	    }
	}
	
	/**
	 * 检查上传目录
	 */
	private function checkPath()
	{
	   if(!is_dir($this->path)||!is_writeable($this->path))
	   {
	      if(!mkdir($this->path))
	      {
	         Tool::alertBack('警告','<font color="red">上传主目录创建失败!</font>');
	      }
	   }
	  if(!is_dir($this->today)||!is_writeable($this->today))
	   {
	      if(!mkdir($this->today))
	      {
	         Tool::alertBack('警告','<font color="red">上传子目录创建失败!</font>');
	      }
	   }
	}

}