<?php

/**
 * 管理员数据访问层 模型
 * @author loach
 *
 */
class NavModel extends Model{
     private $id;
     private $nav_name;
     private $nav_info;
     private $pid;
     private $sort;
     private $limit;
    
    public function __set($key,$value)
    {
       $this->$key=$value;
    }
    
    public function __get($key)
    {
       return $this->$key;
    }
    
    /**
     * 获取管理员总记录数
     * @return int count 管理员总记录
     */
    public function getNavCount()
    {
       $sql="select count(*) from cms_nav";
       return parent::tableCount($sql);
    }
    
    /**
     * 获取所有的管理员-数据访问层
     * @return array 管理员集合
     */
    public function getAllNav($flag)
    {
      if($flag==true)
      {
        $sql="select id,nav_name,nav_info,sort from cms_nav where pid=0 order by sort desc $this->limit";
        return parent::getAll($sql);
      }
      else 
      {
      	$sql="select id,nav_name,nav_info,sort from cms_nav where pid=0 order by sort desc";
      	return parent::getAll($sql);
      }
    }
    
    /**
     * 查找一个管理员-数据访问层
     */
    public function getOneNav()
    {
        $sql="select id,nav_name,nav_info from cms_nav where id='$this->id' or nav_name='$this->nav_name' limit 1";
        return parent::getOne($sql);
    }   
    
    /**
     * 添加管理员-数据访问层
     */
    public function addNav()
    {
       $sql="insert into cms_nav(nav_name,nav_info,pid,sort)values('$this->nav_name','$this->nav_info','$this->pid',".parent::nextId('cms_nav').")";
       return parent::cud($sql);
    }
    /**
     * 修改管理员-数据访问层
     */
    public function updateNav()
    {
       $sql="update cms_nav set nav_name='$this->nav_name',nav_info='$this->nav_info' where id='$this->id'";
       return parent::cud($sql);
    }
    /**
     * 删除管理员-数据访问层
     */
    public function deleteNav()
    {
       $sql="delete from cms_nav where id='$this->id' limit 1;";
       return parent::cud($sql);
    }

}