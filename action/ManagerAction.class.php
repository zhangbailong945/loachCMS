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
	   	case 'add':
	   		$this->add();
	   		break;
	   	default:
	   		Tool::alertLocation('警告：','非法操作!',SITE_ADMIN_URL);
	   		break;
	   }
	}
	
	/**
	 * 显示管理员列表-控制器
	 */
	private function getList()
	{
	   parent::page(SITE_URL.'/admin/manage.php?action=list',$this->model->getManagerCount());
	   $this->tpl->assign('list',true);
	   $this->tpl->assign('title','管理员列表');
	   $this->tpl->assign('allManager',$this->model->getAllManager());
	}
	
	/**
	 * 新增管理员-控制器
	 */
	public function add()
	{
	   $this->tpl->assign('add',true);
	   $this->tpl->assign('title','新增管理员');
	}
	


}