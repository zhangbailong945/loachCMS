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
}