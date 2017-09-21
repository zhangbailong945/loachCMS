<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $this->config['sitename'];?></title>
    <meta name="description" content="LoachBlog个人笔记,程序笔记,php笔记">
    <meta name="keywords" content="首页,LoachBlog,LoachBlog个人笔记">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="<?php echo $this->vars['templates']; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->vars['templates']; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->vars['templates']; ?>/css/screen.css">
    <script type="text/javascript" src="<?php echo $this->vars['templates']; ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->vars['templates']; ?>/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="<?php echo $this->vars['templates']; ?>/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->vars['templates']; ?>/js/jquery.more.js"></script>
    <script type="text/javascript" src="<?php echo $this->vars['templates']; ?>/js/md5.js"></script>
    <script type="text/javascript" src="<?php echo $this->vars['templates']; ?>/js/data.js"></script>
    

    <link rel="canonical" href="<?php echo $submit_Path;?>LoachBlog/LoachBlog/index">
    
</head>


<body class="home-template">

    <!-- start header -->
    <header class="main-header" style="background-image: url(<?php echo $this->vars['templates']; ?>/img/headerbg.jpg);" "="">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- start logo -->
                    <a class="branding" href="#" title="LoachBlog个人笔记"><img src="<?php echo $this->vars['templates']; ?>/img/logo.png" alt="LoachBlog"></a>
                    <h1><font color="#ffffff">LoachBlog</font> 个人笔记</h1>
                    <!-- end logo -->
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <!-- start navigation -->
    <nav class="main-navigation">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="navbar-header">
                        <span class="nav-toggle-button collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                        </span>
                    </div>
                    <div class="navbar-collapse collapse" id="main-menu" aria-expanded="false" style="height: 1px;">
                        <ul class="menu">
					        <li class="nav-current" role="presentation"><a href="LoachBlog/LoachBlog/index">首页</a></li>
					        <li role="presentation"><a href="LoachBlog/LoachBlog/category">笔记分类</a></li>
					        <li role="presentation"><a href="LoachBlog/LoachBlog/date">时光轴</a></li>					        
<li role="presentation"><a href="LoachBlog/LoachBlog/archives">笔记归档</a></li>					        
<li role="presentation"><a href="LoachBlog/LoachBlog/about">关于我</a></li>
					     </ul>   
		            </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->