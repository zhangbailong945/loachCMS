<?php

/**
 * 导航控制器层
 * @author loach
 *
 */
class NavAction extends Action{
   
	/**
	 * 构造函数,初始化数据访问层
	 * @param  $tpl 模板
	 */
	public function __construct(&$tpl)
	{
	   parent::__construct($tpl,new NavModel());
	}
	
	/**
	 * 导航业务流程控制
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
	   	case 'checkNavName':
	   	    $this->checkNavName();
	   	    break;
	   	case 'update':
	   		$this->update();
	   		break;
	   	case 'delete':
	   		$this->delete();
	   		break;
	   	case 'lookSubNav':
	   		$this->lookSubNav();
	   		break;
   		case 'addSubNav':
   		    $this->addSubNav();
   		    break;
	   	default:
	   		Tool::alertLocation('警告：','非法操作!',SITE_ADMIN_URL);
	   		break;
	   }
	}
	
	/**
	 * 显示导航列表-控制器
	 */
	private function getList()
	{
	   //parent::page(SITE_URL.'/admin/Nav.php?action=list',$this->model->getNavCount());
	   $this->tpl->assign('list',true);
	   $this->tpl->assign('title','导航列表');
	   $this->tpl->assign('allNav',$this->model->getAllNav(0));
	}
	
	/**
	 * 新增导航-控制器
	 */
	private function add()
	{
	   if(isset($_POST['submit']))
	   {
	   	  $this->model->pid=$_POST['id'];
	      $this->model->nav_name=trim($_POST['nav_name']);
	      $this->model->nav_info=trim($_POST['nav_info']);
	      if($this->model->addNav()>0)
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
	   $this->tpl->assign('add',true);
	   $this->tpl->assign('title','新增导航');
	}
	
/**
	 * 新增子导航-控制器
	 */
	private function addSubNav()
	{
	   if(isset($_POST['submit']))
	   {
	   	  $this->add();
	   }
	   
	   if(isset($_GET['id']))
	   {
	      $this->model->id=$_GET['id'];
	      $nav=$this->model->getOneNav();
	      $this->tpl->assign('sub',true);
	      $this->tpl->assign('addSub',true);
	      $this->tpl->assign('id',$nav->id);
	      $this->tpl->assign('parent_nav',$nav->nav_name);
	      
	   }
	   
	}
	
	/**
	 * 修改导航-控制器
	 */
	private function update()
	{		   
	   if(isset($_POST['submit']))
	   {
	   	  $this->model->id=trim($_POST['id']);
	      $this->model->nav_name=trim($_POST['nav_name']);
	      $this->model->nav_info=trim($_POST['nav_info']);	      
	      if($this->model->updateNav()>0)
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
	   if(isset($_GET['id']))
	   {
		   $this->tpl->assign('update',true);
		   $this->tpl->assign('title','修改导航');
		   $this->model->id=$_GET['id'];
		   $nav=$this->model->getOneNav();
		   $this->tpl->assign('id',$nav->id);
           $this->tpl->assign('nav_name',$nav->nav_name);
           $this->tpl->assign('nav_info',$nav->nav_info);
	   }
	}
	/**
	 * 删除导航-控制器
	 */
	private function delete()
	{
	    if(isset($_GET['id']))
        {
	         $this->model->id=$_GET['id'];
	         if($this->model->deleteNav()>0)
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
	
	/**
	 * 查看子导航列表
	 */
	private function lookSubNav()
	{
	  if(isset($_GET['id']))
	  {
		   $this->model->id=trim($_GET['id']);
		   $nav=$this->model->getOneNav();
		   $this->tpl->assign('sublist',true);
		   $this->tpl->assign('sub',true);
		   $this->tpl->assign('title','子导航列表');
		   $this->tpl->assign('parent_nav',$nav->nav_name);
		   $this->tpl->assign('id',$this->model->id);
		   $this->tpl->assign('allSubNav',$this->model->getAllSubNav(0));
		   
	  }
	  else
	  {
	       Tool::alertBack('提示','非法操作!');
	  }
	}
	
	/**
	 * 检查导航名称是否存在-控制器
	 */
	public function checkNavName()
	{
       if(isset($_POST['nav_name']))
       {
       	   $this->model->nav_name=$_POST['nav_name'];
		   if(!is_object($this->model->getOneNav()))
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
	


}