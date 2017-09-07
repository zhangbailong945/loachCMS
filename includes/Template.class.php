<?php

/**
 * 
 * 模板类
 * @author loach
 *
 */
class Template{
   //存储变量
	private $vars = array();
	//存储系统变量
	private $config=array();
	
	/**
	 * 构造方法，检测是否存在
	 */
    public function __construct()
    {
    	//验证目录是否存在
		if(!is_dir(TPL_DIR)||!is_dir(TPL_C_DIR)||!is_dir(CACHE_DIR))
		{
		    exit('Error:模板文件夹或者模板编译文件夹或者模板缓存文件夹没有创建!');
		}
		//获取系统变量
		$config=simplexml_load_file(ROOT_PATH.'/config/config.xml');
		$sites=$config->xpath('/root/site');
		//foreach，将xml配置转换为数组
		foreach ($sites as $site)
		{
		   $this->config["$site->name"]=$site->value;
		}
    }
    
    /**
     * 显示模板
     * @param string $file
     */
    public function display($file)
    {
       //给includes进来的tpl传一个模板对象
       $tpl=$this;
       //设置模板路径
       $tplFile=TPL_DIR.$file;
       //判断模板文件是否存在
       if(!file_exists($tplFile))
       {
       	   exit('Error:模板文件不存在!');
       }
       
        //是否加入参数
        $file_query='';
		if (!empty($_SERVER["QUERY_STRING"]))
	    {
			$file_query.= $_SERVER["QUERY_STRING"];
		}
       //设置编译文件的文件名
       $parFile=TPL_C_DIR.md5($file).$file.'.php';
       //缓存文件
       $cacheFile=CACHE_DIR.md5($file).$file.$file_query.'.html';
       //判断文件是否存在,模板文件是否修改过
       if(!file_exists($parFile)||filemtime($parFile)<filemtime($tplFile))
       {
       	  //生成编译文件
       	  //引入模板解析类
         require ROOT_PATH.'/includes/Parser.class.php';
         $parser=new Parser($tplFile);
         //生成编译文件
         $parser->compile($parFile);
       }
       //载入编译文件
       include $parFile;
       //如果开启了缓存
       if (IS_CACHE) 
       {
       	  file_put_contents($cacheFile,ob_get_contents());
       	/*
			//缓存文件和编译文件都要存在
			if (file_exists($cacheFile) && file_exists($parFile)) 
			{
				//判断模板文件是否修改过，判断编译文件是否修改过
				if (filemtime($parFile) >= filemtime($tplFile) && filemtime($cacheFile) >= filemtime($parFile)) 
				{					
					//载入缓存文件
					include $cacheFile;
					exit();
				}
			}
			*/
		}
       
    }
    
      /**
       * 设置模板变量
       * @param string $var
       * @param mixd $value
       */
      public function assign($var,$value)
      {
          if(isset($var)&&!empty($var))
          {
          	$this->vars[$var]=$value;
          }
          else
          {
            exit('Error:请设置变量名!');
          }
      }

}




















