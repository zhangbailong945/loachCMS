<?php

/**
 * 
 * @author loach
 *模板解析类
 */
class Parser{
	
	  //模板内容
	  private $tpl;
	  /**
	   * 构造方法，初始化模板内容
	   * @param string $tplFile 模板文件
	   */
      public function __construct($tplFile)
      {
          //读取模板内容
          if(!$this->tpl=file_get_contents($tplFile))
          {
          	exit('Error:读取模板出错!');
          }
      }
      
      /**
       * 解析普通变量
       * =格式：{$name}
       */
      private function parseVar()
      {   
      	  $pattern='/\{\$([\w]+)\}/';
          if(preg_match($pattern,$this->tpl))
          {
              $this->tpl=preg_replace($pattern,"<?php echo \$this->vars['$1']; ?>",$this->tpl);
          }
      } 
      
      /**
       * 解析if else条件语句
       * =格式:{if}{else}{/if}
       */
      private function parseIf()
      {
      	 //{if} if开始
         $patternIf='/\{\if\s+\$([\w]+)\}/';
         //{/if} if结尾
         $patternEndIf='/\{\/if\}/';
         //{else}
         $patternElse='/\{else\}/';
         //首先检查是否有{if}开头
         if(preg_match($patternIf,$this->tpl))
         {
         	//然后判断是否有{/if}结尾
         	if(preg_match($patternEndIf,$this->tpl))
         	{
         	    //替换{if}开头
         	    $this->tpl=preg_replace($patternIf,"<?php if(\$this->vars['$1']){ ?>",$this->tpl);
         	    //替换{/if}结尾
         	    $this->tpl=preg_replace($patternEndIf,"<?php } ?>",$this->tpl);
         	    //替换{else}
         	    $this->tpl=preg_replace($patternElse,"<?php }else{ ?>",$this->tpl);
         	}
         	else
         	{
         	   exit('Parser Error:没有if结尾!');
         	}
         }
         
      }
      
      /**
       * 解析模板变量foreach标签
       * =格式:{foreach $array($key,$value)}{@key},{@value}{/foreach}
       */
      private function parseForeach()
      {
         //foreach模板变量开始标签格式：{foreach $array(key,value)}
         $patternStart='/\{foreach\s+\$([\w]+)\(([\w]+),([\w]+)\)\}/';
         //foreach模板变量结束标签格式：{/foreach}
         $patternEnd='/\{\/foreach\}/';
         //foreach模板变量中的循环变量@key,@value
         $patternVar='/\{\@([\w]+)\}/';
         //首先判断是否有foreach开头
         if(preg_match($patternStart,$this->tpl))
         {
            //然后判断是否有foreach结尾
            if(preg_match($patternEnd,$this->tpl))
            {
               //替换模板变量{foreach $array($key,$value)}
               $this->tpl=preg_replace($patternStart,"<?php foreach(\$this->vars['$1'] as \$$2=>\$$3) {?>",$this->tpl);
               //替换模板变量{/foreach}
               $this->tpl=preg_replace($patternEnd,"<?php } ?>",$this->tpl);
               //替换变量@key,@value
               $this->tpl=preg_replace($patternVar,"<?php echo \$$1; ?>",$this->tpl);
            }
            else 
            {
                exit('Parser Error:foreach没有结尾标签!');
            }
         }
      }
      
      /**
       * 解析include语句
       * =格式:{include "index.php"}
       */
      private function parseInclude()
      {
         $pattern='/\{include \"(.*)\"\}/';
         //判断模板变量是否存在
         if(preg_match($pattern,$this->tpl,$file))
         {
         	//判断文件为空或者不存在
         	if(empty($file[1])||!file_exists($file[1]))
         	{
         	   exit('Parse Include Error:文件导入出错!');
         	}
         	//否则，存在就替换
         	$this->tpl=preg_replace($pattern,"<?php include '{$file[1]}'; ?>",$this->tpl);
         	
         }
      }
      
      /**
       * 解析注释变量
       * =格式:{#}xxxxx{#}
       */
      private function parseCommon()
      {
      	 $pattern='/\{#\}(.*)\{#\}/';
      	 //判断是否有个注释语句
         if(preg_match('/\{#\}/',$this->tpl))
         {
            $this->tpl=preg_replace($pattern,"<?php /* $1 */ ?>",$this->tpl);
         }
      }
      
      /**
       * 解析系统变量
       */
      private function parseConfigVar()
      {
          $pattern='/\{%([\w]+)%\}/';
          //检测是否含有系统变量
          if(preg_match($pattern,$this->tpl))
          {
              $this->tpl=preg_replace($pattern,"<?php echo \$this->config['$1'];?>",$this->tpl);
          }
      }
      
      /**
       * 编译模板文件，并生成编译文件
       * @param $tplFile 模板文件
       */
      public function compile($tplFile)
      {
      	//解析注释变量{#}注释语句{#}
      	$this->parseCommon();
      	//解析模板变量{include "index.php"}
      	$this->parseInclude();
      	//解析系统变量
      	$this->parseConfigVar();
      	//解析模板变量{$name}
      	$this->parseVar();
      	//解析模板变量{if}{/if}{else}
      	$this->parseIf();
      	//解析模板变量{foreach $array($key,$value)}@key,@value{/foreach}
      	$this->parseForeach();
      	//生成编译文件
      	if(!file_put_contents($tplFile,$this->tpl))
      	{
      		exit('Error:编译文件生成失败!');
      	}
      }
     
      
}

























