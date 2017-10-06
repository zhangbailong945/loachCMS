<?php

/**
 * 管理员数据访问层 模型
 * @author loach
 *
 */
class ManagerModel extends Model{
    private $id;
    private $admin_user;
    private $admin_pass;
    private $level;
    private $last_ip;
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
    public function getManagerCount()
    {
       $sql="select count(*) from cms_manager";
       return parent::tableCount($sql);
    }
    
    /**
     * 获取所有的管理员-数据访问层
     * @return array 管理员集合
     */
    public function getAllManager($flag)
    {
      if($flag==true)
      {
        $sql="select m.id,m.admin_user,m.login_count,m.last_ip,m.last_time,l.level_name from cms_manager m,cms_level l where l.id=m.level order by m.id desc $this->limit";
        return parent::getAll($sql);
      }
      else 
      {
      	$sql="select m.id,m.admin_user,m.login_count,m.last_ip,m.last_time,l.level_name from cms_manager m,cms_level l where l.id=m.level order by m.id desc";
        return parent::getAll($sql);
      }
    }
    
    /**
     * 查找一个管理员-数据访问层
     */
    public function getOneManager()
    {
        $sql="select id,admin_user,admin_pass,level from cms_manager where id='$this->id' or admin_user='$this->admin_user' or level='$this->level' limit 1";
        return parent::getOne($sql);
    }   
    
    /**
     * 添加管理员-数据访问层
     */
    public function addManager()
    {
       $sql="insert into cms_manager(admin_user,admin_pass,level,reg_time)values('$this->admin_user','$this->admin_pass','$this->level',NOW())";
       return parent::cud($sql);
    }
    /**
     * 修改管理员-数据访问层
     */
    public function updateManager()
    {
       $sql="update cms_manager set admin_pass='$this->admin_pass',level='$this->level' where id='$this->id'";
       return parent::cud($sql);
    }
    /**
     * 删除管理员-数据访问层
     */
    public function deleteManager()
    {
       $sql="delete from cms_manager where id='$this->id' limit 1;";
       return parent::cud($sql);
    }

}