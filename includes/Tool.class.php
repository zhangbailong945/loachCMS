<?php

class Tool{

	/**
	 * 操作成功
	 * @param string $message 消息
	 * @param URL $url 跳转地址
	 */
    public static function alertLocation($message,$url)
    {
        if(!empty($message))
        {
        	echo "<script type='text/javascript'>alert('$_info');location.href='$_url';</script>";
	        exit();
        }
        else
        {
            header("Location:".$_url);
    		exit();
        }
    }
    
    /**
     * 操作失败
     * @param string $message
     */
    public static function alertBack($message)
    {
        echo "<script type='text/javascript'>alert('$_info');history.back();</script>";
        exit();
    }
    
    /**
     * 转移html特殊字符串
     * @param mixed $data 需要转义的字符
     * @return mixed $str 转义后的字符
     */
    public static function htmlString($data)
    {
       $str='';
       if(is_array($data))
       {
          foreach($data as $key=>$value)
          {
             $str[$key]=Tool::htmlString($value);//递归
          }
       }
       else if(is_object($data))
       {
         $str=new stdClass();
         foreach($data as $key=>$value)
         {
             $str->$key=Tool::htmlString($value);//递归
         }
       }
       else
       {
          $str=htmlspecialchars($data);
       }
       
       return $str;
    }
    
    /**
     * 数据转义
     * @param unknown_type $data
     */
    public static function mysqlString($data)
    {
    	//如果PHP引擎有自动开启过滤功能，则直接返回数据
       //!GMQG?mysqli_real_escape_string($data):$data;
    }
    
/**
     * 获取客户端IP地址
     * @return string ip address
     */
    public static function getCustomerIp()
    {
        if(!empty($_SERVER["HTTP_CLIENT_IP"]))
        {
            $cip = $_SERVER["HTTP_CLIENT_IP"];
        }
        else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
        {
            $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        }
        else if(!empty($_SERVER["REMOTE_ADDR"]))
        {
            $cip = $_SERVER["REMOTE_ADDR"];
        }
        else
        {
            $cip = '';
        }
        preg_match("/[\d\.]{7,15}/", $cip, $cips);
        $cip = isset($cips[0]) ? $cips[0] : 'unknown';
        unset($cips);
        return $cip;
    }
    
    /**
     * 清理session
     */
    public static function cleanSession()
    {
        if(session_start())
        {
            session_destroy();
        }
    }
}