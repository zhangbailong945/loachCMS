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
	   	case 'checkManagerName':
	   	    $this->checkManagerName();
	   	    break;
	   	case 'checkLoginManagerName':
	   		$this->checkLoginManagerName();
	   		break;
	   	case 'update':
	   		$this->update();
	   		break;
	   	case 'delete':
	   		$this->delete();
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
	   //parent::page(SITE_URL.'/admin/manager.php?action=list',$this->model->getManagerCount());
	   $this->tpl->assign('list',true);
	   $this->tpl->assign('title','管理员列表');
	   $this->tpl->assign('allManager',$this->model->getAllManager(0));
	}
	
	/**
	 * 新增管理员-控制器
	 */
	private function add()
	{
	   if(isset($_POST['submit']))
	   {
	      $this->model->admin_user=trim($_POST['admin_user']);
	      $this->model->admin_pass=sha1(trim($_POST['admin_pass']));
	      $this->model->level=trim($_POST['admin_level']);
	      if($this->model->addManager()>0)
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
	   $this->tpl->assign('title','新增管理员');
	   $levelModel=new LevelModel();
	   $this->tpl->assign('levels',$levelModel->getAllLevel(0));
	}
	
	/**
	 * 修改管理员-控制器
	 */
	private function update()
	{		   
	   if(isset($_POST['submit']))
	   {
	   	  $this->model->id=trim($_POST['id']);
	      $this->model->admin_pass=sha1(trim($_POST['admin_pass']));
	      $this->model->level=trim($_POST['admin_level']);
	      
	      if($this->model->updateManager()>0)
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
		   $this->tpl->assign('title','修改管理员');
		   $this->model->id=$_GET['id'];
		   $manager=$this->model->getOneManager();
		   $levelModel=new LevelModel();
		   $this->tpl->assign('levels',$levelModel->getAllLevel(0));
		   $this->tpl->assign('id',$manager->id);
           $this->tpl->assign('admin_user',$manager->admin_user);
           $this->tpl->assign('admin_pass',$manager->admin_pass);
           $this->tpl->assign('level',$manager->level);
	   }
	}
	/**
	 * 删除管理员-控制器
	 */
	private function delete()
	{
	    if(isset($_GET['id']))
        {
	         $this->model->id=$_GET['id'];
	         if($this->model->deleteManager()>0)
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
	 * 检查管理员名称是否存在-控制器
	 */
	private function checkManagerName()
	{
       if(isset($_POST['admin_user']))
       {
       	   $this->model->admin_user=$_POST['admin_user'];
		   if(!is_object($this->model->getOneManager()))
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
	 *检查管理员登录账号是否存在
	 */
	public function checkLoginManagerName()
	{
		  if(isset($_POST['admin_user']))
	       {
	       	   $this->model->admin_user=$_POST['admin_user'];
			   if(!is_object($this->model->getOneManager()))
			   {
			      Tool::jsonType();
			      echo json_encode(array('valid'=>false));
			      exit();
			   }
			   else
			   {
			   	  Tool::jsonType();			     
			      echo json_encode(array('valid'=>true));
			      exit();
			   }
	       }
	}
	


}