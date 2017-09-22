<?php

/**
 * 分页工具类
 * @author loach
 *
 */
class Pages{
	private $url; //分页地址
    private $total;//总记录
    private $pageSize;//每页显示多少条
    private $pageSum; //总页码数
    private $currentPage;//当前页码    
    private $limit; //分页条件
    private $bothNum; //当前页两边页码区块
    
    /**
     * 构造函数，初始化分页地址、总数、总页数、每页显示数
     * @param string $url 分页地址
     * @param int $total 总记录数
     * @param int $pageSize 每页显示数
     */
    public function __construct($url,$total,$pageSize)
    {
    	$this->url=$url;
        $this->total=$total;
        $this->pageSize=$pageSize;
        $this->pageSum=ceil($this->total/$this->pageSize);
        $this->currentPage=$this->setCurrentPage();
        $this->limit="limit ".($this->currentPage-1)*$this->pageSize.",$this->pageSize";
        $this->bothNum=3;
    }
    
    public function __get($key)
    {
       return $this->$key;
    }
    
    /**
     * 获取当前的分页地址
     */
    private function setUrl()
    {
       $url=$_SERVER["REQUEST_URI"];
       $par=parse_url($url);
       if(isset($par["query"]))
       {
          parse_str($par["query"],$query);
          unset($query["page"]);
          $url=$par["path"].'?'.http_build_query($query);
       }
       
       return $url;
    }
    
    /**
     * 设置当前页码
     * @return int currentPage 当前页码
     */
    private function setCurrentPage()
    {
       if(!empty($_GET['page']))
       {
          if($_GET['page']>0)
          {
              if($_GET['page']>$this->pageSum)
              {
                 return $this->pageSum;
              }
              else 
              {
                 return $_GET['page'];
              }
          }
          else
          {
             return 1;
          }
       }
       else
       {
           return 1;
       }
    }
    
    /**
     * 首页
     */
    private function first()
    {
        if($this->currentPage>($this->bothNum+1))
        {
            return '<li class="disabled"><a href="'.$this->url.'" aria-label="Previous"><span aria-hidden="true">首页</span></a></li>...';
        }
    }
    
    /**
     * 上一页
     */
    private function prev()
    {
        if($this->currentPage==1)
        {
           return '<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">上一页</span></a></li>';
        }
        else
        {
           return '<li><a href="'.$this->url.'&page='.($this->pageSum-1).'" aria-label="Previous"><span aria-hidden="true">上一页</span></a></li>';
        }
    }
    
    /**
     * 下一页
     */
    public function next()
    {
       if($this->currentPage>=$this->pageSum)
       {
          return '<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">下一页</span></a></li>';
       }
       else
       {
          return '<li><a href="'.$this->url.'&page='.($this->currentPage+1).'" aria-label="Previous"><span aria-hidden="true">下一页</span></a></li>';
       }
    }
    
    /**
     * 设置当前页两侧的页码
     */
    private function pageList()
    {
       $pageList='';
       for($i=$this->bothNum;$i>=1;$i--)
       {
          $page=$this->currentPage-$i;
          if($page<1)
          {
             continue;
          }
          $pageList.='<li><a href="'.$this->url.'&page='.$page.'" aria-label="Previous"><span aria-hidden="true">'.$page.'</span></a></li>';
       }
       $pageList.='<li class="active"><a href="#" aria-label="Previous"><span aria-hidden="true">'.$this->currentPage.'</span></a></li>';
       for($i=1;$i<=$this->bothNum;$i++)
       {
          $page=$this->currentPage+$i;
          if($page>$this->pageSum)
          {
             break;
          }
          $pageList.='<li><a href="'.$this->url.'&page='.$page.'" aria-label="Previous"><span aria-hidden="true">'.$page.'</span></a></li>';
       }
    }
    
    /**
     * 尾页
     */
    private function last()
    {
       if(($this->pageSum-$this->currentPage)>$this->bothNum)
       {
          return '...<li><a href="'.$this->url.'&page='.$this->pageSum.'" aria-label="Previous"><span aria-hidden="true">尾页</span></a></li>';
       }
    }
    
    /**
     * 获取分页列表
     */
    public function getPage()
    {
       $page='';
       $page.='<nav aria-label=".."><ul class="pagination">';
       $page.=$this->prev();
       $page.=$this->first();
       $page.=$this->pageList();
       $page.=$this->last();
       $page.=$this->next();
       $page.='</url></nav>';
       return $page;
    }
    
    
}