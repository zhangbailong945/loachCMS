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
        $sql="select id,admin_user,admin_pass,level from cms_Nav where id='$this->id' or admin_user='$this->admin_user' or level='$this->level' limit 1";
        return parent::getOne($sql);
    }   
    
    /**
     * 添加管理员-数据访问层
     */
    public function addNav()
    {
       $sql="insert into cms_Nav(admin_user,admin_pass,level,reg_time)values('$this->admin_user','$this->admin_pass','$this->level',NOW())";
       return parent::cud($sql);
    }
    /**
     * 修改管理员-数据访问层
     */
    public function updateNav()
    {
       $sql="update cms_Nav set admin_pass='$this->admin_pass',level='$this->level' where id='$this->id'";
       return parent::cud($sql);
    }
    /**
     * 删除管理员-数据访问层
     */
    public function deleteNav()
    {
       $sql="delete from cms_Nav where id='$this->id' limit 1;";
       return parent::cud($sql);
    }

}