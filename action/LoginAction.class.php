<?php

/**
 * 后台登录类--控制器
 * @author loach
 *
 */
class LoginAction extends Action{
   
	public function __construct(&$tpl)
	{
	    parent::__construct($tpl,new ManagerModel());
	}
     
	/**
	 * 后台登录--控制器
	 */
	public function action()
	{
	    switch($_GET['action'])
	    {
	    	case 'login':
	    		$this->adminLogin();
	    		break;
	    	case 'adminCode':
	    		$this->checkAdminCode();
	    		break;
	    	case 'quit':
	    		$this->adminQuit();
	    		break;
	    }
	}
	
	/**
	 * 管理员后台登录--控制器
	 */
	private function adminLogin()
	{
	   if(isset($_POST['submit']))
	   {
	       $this->model->admin_user=trim($_POST['admin_user']);
	       $this->model->admin_pass=sha1(trim($_POST['admin_pass']));
	       $admin=$this->model->adminLogin();
	       if(is_object($admin))
	       {
	       	   $_SESSION['admin']['admin_user']=$admin->admin_user;
	       	   $_SESSION['admin']['level_name']=$admin->level_name;	       	   
	           echo 1;
		       exit();
	       }
	       else
	       {
	          echo 0;
		      exit();
	       }
	   }
	}
	
	/**
	 * 检查验证码
	 */
	private function checkAdminCode()
	{
	   if(isset($_POST['authcode']))
	   {
	       $customerCode=strtolower(trim($_POST['authcode']));
	       $serverCode=trim($_SESSION['admincode']);
	       if($customerCode==$serverCode)
		   {
		      Tool::jsonType();
		      echo json_encode(array('valid'=>true));
		      exit();
		   }
		   else
		   {
		   	  Tool::jsonType();
		      echo json_encode(array('valid'=>false));
		      exit();
		   }
	   }
	}
	
	/**
	 *退去后台管理--控制器
	 */
	private function adminQuit()
	{
	   Tool::cleanSession();
	   Tool::alertLocation('提示','退出管理成功!','login.php');
	}
	
	
	
}