<?php

/**
 * 导航控制器
 * @author Loach
 *
 */
class ListAction extends Action{
    
    public function __construct(&$tpl)
    {
        parent::__construct($tpl);

    }
    
    //获取前台的导航
    public function getNav()
    {
        if(isset($_GET['id']))
        {
            $navModel=new NavModel();
            $navModel->id=$_GET['id'];
            //获取主导航
            $nav=$navModel->getNavById();
            //获取自导航
            $childNav=$navModel->getChildNavIndex();
            if($nav)
            {
               $nav->cname?$cname='<li><a href="list.php?id='.$nav->cid.'">'.$nav->cname.'</a></li>':$cname='';
               $nav_name='<li><a href="list.php?id='.$nav->id.'">'.$nav->nav_name.'</a></li>';
               $this->tpl->assign('nav_name',$cname.$nav_name);
               $this->tpl->assign('child_nav',$childNav);
            }
            else 
            {
                Tool::alertBack('警告','此导航不存在!');
            }
        }
        else 
        {
            Tool::alertBack('警告','此导航不存在!');
        }
        
    }
    
    
}


?>