<?php

/**
 * 管理员控制器层
 * @author loach
 *
 */
class ManagerAction extends Action{
   
	/**
	 * 构造函数,初始化数据访问层
	 * @param  $tpl 模板
	 */
	public function __construct(&$tpl)
	{
	   parent::__construct($tpl,new ManagerModel());
	}
	
	/**
	 * 管理员业务流程控制
	 */
	public function action()
	{
	   switch ($_GET['action'])
	   {
	   	case 'list':
	   		$this->getList();
	   		break;
	   	default:
	   		echo '非法操作!';
	   }
	}
	
	private function getList()
	{
	   $this->tpl->assign('add',true);
	   $this->tpl->assign('title','管理员列表');
	   $this->tpl->assign('allManager',$this->model->getAllManager());
	}

}