<?php

/**
 * 后台登录类--控制器
 * @author loach
 *
 */
class LoginActon extends Action{
   
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
	       if($this->model->adminLogin())
	       {
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
}