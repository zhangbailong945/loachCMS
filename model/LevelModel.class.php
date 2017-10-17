<?php

/**
 * 等级数据访问层 模型
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
     * 获取等级总记录数
     * @return int count 等级总记录
     */
    public function getLevelCount()
    {
       $sql="select count(*) from cms_level";
       return parent::tableCount($sql);
    }
    
    /**
     * 获取所有的等级等级-数据访问层
     * @return array 等级集合
     */
    public function getAllLevel($flag)
    {
      if($flag)
      {
         $sql="select id,level,level_name,level_info from cms_level order by id asc $this->limit";
         return parent::getAll($sql);
      }
      else 
      {
         $sql="select id,level,level_name,level_info from cms_level order by id asc";
         return parent::getAll($sql);
      }
    }   
    
    /**
     * 查找一个等级-数据访问层
     */
    public function getOneLevel()
    {
        $sql="select id,level_name,level_info from cms_level where id='$this->id' or level_name='$this->level_name' limit 1";
        return parent::getOne($sql);
    }   
    
    /**
     * 添加等级-数据访问层
     */
    public function addLevel()
    {
       $sql="insert into cms_level(level_name,level_info)values('$this->level_name','$this->level_info')";
       return parent::cud($sql);
    }
    /**
     * 修改等级-数据访问层
     */
    public function updateLevel()
    {
       $sql="update cms_level set level_name='$this->level_name',level_info='$this->level_info' where id='$this->id'";
       return parent::cud($sql);
    }
    /**
     * 删除等级-数据访问层
     */
    public function deleteLevel()
    {
       $sql="delete from cms_level where id='$this->id' limit 1;";
       return parent::cud($sql);
    }
    
}