<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{%sitename%}</title>
    <meta name="description" content="LoachBlog个人笔记,程序笔记,php笔记">
    <meta name="keywords" content="首页,LoachBlog,LoachBlog个人笔记">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{$templates}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$templates}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{$templates}/css/screen.css">
    <script type="text/javascript" src="{$templates}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{$templates}/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="{$templates}/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="{$templates}/js/jquery.more.js"></script>
    <script type="text/javascript" src="{$templates}/js/md5.js"></script>
    <script type="text/javascript" src="{$templates}/js/data.js"></script>
    <link rel="canonical" href="<?php echo $submit_Path;?>LoachBlog/LoachBlog/index">
    
</head>


<body class="home-template">

    <!-- start header -->
    <header class="main-header" style="background-image: url({$templates}/img/headerbg.jpg);" "="">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- start logo -->
                    <a class="branding" href="#" title="LoachBlog个人笔记"><img src="{$templates}/img/logo.png" alt="LoachBlog"></a>
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
                        <ul class="menu" id="menu">
					        <li class="nav-current" id="nav0" role="presentation"><a href="./">首页</a></li>
					        {if $navList}
					        {foreach $navList(key,value)}
					        <li role="presentation" id="nav{@value->sort}"><a href="list.php?id={@value->id}">{@value->nav_name}</a></li>
					        {/foreach}
					        {/if}
					     </ul>   
		            </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->