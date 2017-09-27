<?php

/**
 * 管理员数据访问层 模型
 * @author loach
 *
 */
class LevelModel extends Model{
    private $id;
    private $level_name;
    private $level_info;
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
    public function getLevelCount()
    {
       $sql="select count(*) from cms_level";
       return parent::tableCount($sql);
    }
    
    /**
     * 获取所有的管理员等级-数据访问层
     * @return array 等级集合
     */
    public function getAllLevel()
    {
      $sql="select id,level_name from cms_level order by id asc";
      return parent::getAll($sql);
    }
    
    /**
     * 查找一个管理员-数据访问层
     */
    public function getOneManager()
    {
        $sql="select id,admin_user,admin_pass,level from cms_manager where id='$this->id' or admin_user='$this->admin_user' or level='$this->level' limit 1";
        return parent::getOne($sql);
    }

}