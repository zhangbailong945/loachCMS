<?php

class Action{
   
	protected $tpl;
	protected $model;

	protected function __construct(&$tpl,&$model=null)
	{
	   $this->tpl=$tpl;
	   $this->model=$model;
	}
	
    /**
     * 分页
     * @param int $total
     */
    protected  function page($url,$total)
    {
        $pages=new Pages($url,$total,PAGE_SIZE);
        $this->model->limit=$pages->limit;
        $this->tpl->assign('page',$pages->getPage());
        $this->tpl->assign('num',($pages->currentPage-1)*PAGE_SIZE);
    }
}