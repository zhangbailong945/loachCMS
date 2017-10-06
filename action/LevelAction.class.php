<?php

/**
 * 等级控制器层
 * @author loach
 *
 */
class LevelAction extends Action{
   
	/**
	 * 构造函数,初始化数据访问层
	 * @param  $tpl 模板
	 */
	public function __construct(&$tpl)
	{
	   parent::__construct($tpl,new LevelModel());
	}
	
	/**
	 * 等级业务流程控制
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
	   	case 'checkLevelName':
	   	    $this->checkLevelName();
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
	 * 显示等级列表-控制器
	 */
	private function getList()
	{
	   //parent::page(SITE_URL.'/admin/Level.php?action=list',$this->model->getLevelCount());
	   $this->tpl->assign('list',true);
	   $this->tpl->assign('title','等级列表');
	   $this->tpl->assign('allLevel',$this->model->getAllLevel(0));
	}
	
	/**
	 * 新增等级-控制器
	 */
	private function add()
	{
	   if(isset($_POST['submit']))
	   {
	      $this->model->level_name=trim($_POST['level_name']);
	      $this->model->level_info=trim($_POST['level_info']);
	      if($this->model->addLevel()>0)
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
	   $this->tpl->assign('title','新增等级');
	}
	
	/**
	 * 修改等级-控制器
	 */
	private function update()
	{		   
	   if(isset($_POST['submit']))
	   {
	   	  $this->model->id=trim($_POST['id']);
	      $this->model->level_name=trim($_POST['level_name']);
	      $this->model->level_info=trim($_POST['level_info']);
	      
	      if($this->model->updateLevel()>0)
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
		   $this->tpl->assign('title','修改等级');
		   $this->model->id=$_GET['id'];
		   $level=$this->model->getOneLevel();
		   $this->tpl->assign('id',$level->id);
           $this->tpl->assign('level_name',$level->level_name);
           $this->tpl->assign('level_info',$level->level_info);
	   }
	}
	/**
	 * 删除等级-控制器
	 */
	private function delete()
	{
	    if(isset($_GET['id']))
        {
	         $this->model->id=$_GET['id'];
	         if($this->model->deleteLevel()>0)
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
	 * 检查等级名称是否存在-控制器
	 */
	public function checkLevelName()
	{
       if(isset($_POST['level_name']))
       {
       	   $this->model->level_name=$_POST['level_name'];
		   if(!is_object($this->model->getOneLevel()))
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