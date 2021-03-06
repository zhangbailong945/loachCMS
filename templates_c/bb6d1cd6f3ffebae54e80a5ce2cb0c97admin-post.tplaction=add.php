<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>loachCMS管理中心</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->vars['template_admin']; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $this->vars['template_admin']; ?>/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $this->vars['template_admin']; ?>/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo $this->vars['template_admin']; ?>/vendor/morrisjs/morris.css" rel="stylesheet">
    
    <!-- MetisMenu CSS -->
    <link href="<?php echo $this->vars['template_admin']; ?>/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        
    <!-- DataTables CSS -->
    <link href="<?php echo $this->vars['template_admin']; ?>/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo $this->vars['template_admin']; ?>/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $this->vars['template_admin']; ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- layer alert -->
    <!-- bootstrapValidator css -->
    <link href="<?php echo $this->vars['template_plugins']; ?>/bootstrapValidator/bootstrapValidator.css" rel="stylesheet" type="text/css">
    
    
    <!-- jQuery -->
    <script src="<?php echo $this->vars['template_admin']; ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $this->vars['template_admin']; ?>/js/uploadThumbnail.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">loachCMS v1.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>张三</strong>
                                    <span class="pull-right text-muted">
                                        <em>昨天</em>
                                    </span>
                                </div>
                                <div>你的快递到了！</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>李四</strong>
                                    <span class="pull-right text-muted">
                                        <em>昨天</em>
                                    </span>
                                </div>
                                <div>今晚加班！</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>王二</strong>
                                    <span class="pull-right text-muted">
                                        <em>昨天</em>
                                    </span>
                                </div>
                                <div>你的代码有bug!</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>阅读更多</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>任务1</strong>
                                        <span class="pull-right text-muted">40% 完成</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% 完成 </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>任务 2</strong>
                                        <span class="pull-right text-muted">20% 完成</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% 完成</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>任务 3</strong>
                                        <span class="pull-right text-muted">60% 完成</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% 完成 </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>查看更多</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>最新评论
                                    <span class="pull-right text-muted small">4分钟之前</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> 最新消息
                                    <span class="pull-right text-muted small">4分钟之前</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> 最新任务
                                    <span class="pull-right text-muted small">4分钟之前</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>S获取更多</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i><font color="blue"><?php echo $this->vars['admin_user']; ?></font>,[<?php echo $this->vars['level_name']; ?>]</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>系统设置</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="./login.php?action=quit"><i class="fa fa-sign-out fa-fw"></i>退出系统</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="../admin/index.php"><i class="fa fa-home fa-fw"></i>首页</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>管理员管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../admin/manager.php?action=list">管理员列表</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                       <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>等级管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../admin/level.php?action=list">等级列表</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>导航管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../admin/nav.php?action=list">导航列表</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li class="active">
                            <a href="#"><i class="fa fa-user fa-fw"></i>文章管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../admin/post.php?action=list">文章列表</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
					  <li><a href="#">文章管理</a></li>
					  <li class="active"><?php echo $this->vars['title']; ?></li>
					</ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						<a href="post.php?action=list" class="btn btn-primary btn-sm <?php if($this->vars['list']){ ?>active<?php } ?>" role="button">文章列表</a>
						<a href="post.php?action=add" class="btn btn-primary btn-sm <?php if($this->vars['add']){ ?>active<?php } ?>" role="button">发表文章</a>
						<?php if($this->vars['update']){ ?>
						<a href="post.php?action=update&id={id}" class="btn btn-primary btn-sm <?php if($this->vars['update']){ ?>active<?php } ?>" role="button">修改文章</a>
						<?php } ?>
                        </div>
                        <!-- /.panel-heading -->
                        
                        <!-- list body start -->
                        <?php if($this->vars['list']){ ?>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>管理员名称</th>
                                        <th>等级</th>
                                        <th>登录次数</th>
                                        <th>IP地址</th>
                                        <th>最近登录时间</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($this->vars['allPost']){ ?>
                                    <?php foreach($this->vars['allPost'] as $key=>$value) {?>
                                    <tr class="odd gradeX">
                                        <td class="center"><?php echo $value->id; ?></script></td>
                                        <td class="center"><?php echo $value->admin_user; ?></td>
                                        <td class="center"><?php echo $value->level_name; ?></td>
                                        <td class="center"><?php echo $value->login_count; ?></td>
                                        <td class="center"><?php echo $value->last_ip; ?></td>
                                        <td class="center"><?php echo $value->last_time; ?></td>
                                        <td>
										<button id="btnEdit" onclick="editManager(<?php echo $value->id; ?>)" type="button" class="btn btn-warning btn-xs"> 
										<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>修改 
										</button> 
										<button id="btnDel" type="button" onclick="deleteManager(<?php echo $value->id; ?>)" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#DeleteForm" onclick=""> 
										<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>删除 
										</button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    <?php }else{ ?>
                                    <tr><td colspan="7">对不起，还没有数据!</td></tr>
                                    <?php } ?>
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

                        </div>
                        <!--  
	                    <div class="panel-footer">
	                    
	                    </div>
	                    -->
	                    <?php } ?>
                        <!-- /.list-body end-->
                        
                        
                        <!-- add start -->
                        <?php if($this->vars['add']){ ?>
                        <div class="panel-body">
							<form data-toggle="validator" role="form" id="add" name="add">
								  <input type="hidden" id="level" value=""/>
								  
								  <div class="form-group">
								    <label for="title" class="control-label">文章名称</label>
								    <input type="text" class="form-control" id="title" name="title" placeholder="请输入文章名称" required>
								  </div>
								  
								  <div class="form-group">
                                   <label class="control-label">文章分类</label>
	                               <select class="form-control" name="admin_level" id="admin_level">
	                                 <option value="">---请选择分类---</option>
                                     <?php foreach($this->vars['levels'] as $key=>$value) {?>
						              <option value="<?php echo $value->level; ?>"><?php echo $value->level_name; ?></option>
						             <?php } ?>
									</select>
								  </div>
								  
								  <div class="form-group">
								    <label class="control-label">文章属性</label>
								    <div class="checkbox">
                                     <label><input type="checkbox" name="top" value="置顶" />置顶</label>
                                     <label><input type="checkbox" name="bold" value="加粗" />加粗</label>
                                     <label><input type="checkbox" name="recommand" value="推荐" />推荐</label>
                                     <label><input type="checkbox" name="link" value="跳转" />跳转</label>
                                     </div>
								  </div>
								  
								  <div class="form-group">
								    <label for="tag" class="control-label">文章标签</label>
								    <input type="text" class="form-control" id="tag" name="tag" placeholder="请输入文章标签" required>
								  </div>
								  
	
								  
								  <div class="form-group">
								    <label for="keyword" class="control-label">关键字</label>
								    <input type="text" class="form-control" id="keyword" name="keyword" placeholder="请输入关键字" required>
								  </div>
								  
								  <div class="form-group">
								    <label for="thumbnail" class="control-label">缩略图</label>
								    <div class="form-group">
								    <label><input type="text" readonly="readlony" class="form-control" id="thumbnail" name="thumbnail" placeholder="请输入关键字" required></label>
								    <label><input class="btn btn-primary btn-sm" onclick="uploadWindow('../templates/admin/uploadThumbnail.html','uploadThumbnail','400','200');" type="button" value="上传缩略图"/></label>
								    </div>
								    <div class="form-group">
								    <img name="pic" style="display:none;" />
								    </div>
								  </div>
								  
								  <div class="form-group">
								    <label for="source" class="control-label">文章来源</label>
								    <input type="text" class="form-control" id="source" name="source" placeholder="文章来源" required>
								  </div>
								  
								  <div class="form-group">
								    <label for="author" class="control-label">作者</label>
								    <input type="text" class="form-control" id="author" name="author" placeholder="文章来源" value="loach" required>
								  </div>
								  
								  <div class="form-group">
								    <label for="introduction" class="control-label">内容摘要</label>
								    <textarea class="form-control" rows="4" name="introduction" id="introduction">
								    
								    </textarea>
								  </div>
								  
								  <div class="form-group">
								    <label for="content" class="control-label">内容</label>
								      <!-- 加载编辑器的容器 -->
								    <script id="container" name="content" type="text/plain">

    			                    </script>
								    <!-- 配置文件 -->
								    <script type="text/javascript" src="<?php echo $this->vars['template_plugins']; ?>/ueditor/ueditor.config.js"></script>
								    <!-- 编辑器源码文件 -->
								    <script type="text/javascript" src="<?php echo $this->vars['template_plugins']; ?>/ueditor/ueditor.all.js"></script>
								    <!-- 实例化编辑器 -->
								    <script type="text/javascript">
							            var ue = UE.getEditor('container');
							            ue.ready(function() {
							        	ue.setHeight(300);
							        	//设置编辑器的内容
							        	// ue.setContent('hello');
							        	// //获取html内容，返回: <p>hello</p>
							        	// var html = ue.getContent();
							        	// //获取纯文本内容，返回: hello
							        	// var txt = ue.getContentTxt();
							           });
								    </script>
								  </div>
								  
								  <div class="form-group">
								    <label class="control-label">评论选项</label>
								    <div class="checkbox">
                                     <label><input type="radio" name="command" value="1" checked="checked" />允许评论</label>
                                     <label><input type="radio" name="command" value="0" />禁止评论</label>
                                     </div>
								  </div>
								  
								  <div class="form-group">
								    <label for="count" class="control-label">浏览次数</label>
								    <input type="text" class="form-control" id="count" name="count" placeholder="请输入文章标签" required>
								  </div>
								  
								  <div class="form-group">
                                   <label class="control-label">文章排序</label>
	                               <select class="form-control" name="sort" id="sort">
	                                 <option value="">---请选择排序---</option>
                                     <option value="1">---置顶一天---</option>
                                     <option value="7">---置顶一周---</option>
                                     <option value="30">---置顶一年---</option>
									</select>
								  </div>
								  
								  <div class="form-group">
								    <label for="money" class="control-label">消费金币</label>
								    <input type="text" class="form-control" id="money" name="money" placeholder="请输入文章标签" required>
								  </div>
								  
								  <div class="form-group">
                                   <label class="control-label">阅读权限</label>
	                               <select class="form-control" name="access" id="access">
	                               <option value="">---请选择权限---</option>
	                                 <option value="">公共浏览</option>
                                     <option value="1">初级会员</option>
                                     <option value="7">中级会员</option>
                                     <option value="30">高级会员</option>
                                     <option value="30">VIP会员</option>
									</select>
								  </div>
								  
								  <div class="form-group">
								    <label for="money" class="control-label">消费金币</label>
								    <input type="text" class="form-control" id="money" name="money" placeholder="请输入文章标签" required>
								  </div>
								  
								  <div class="form-group">
                                   <label class="control-label">标题颜色</label>
	                               <select class="form-control" name="color" id="color">
	                               <option value="">---请选择颜色---</option>
	                                 <option style="color:blank;">默认颜色</option>
                                     <option style="color:red;">血之狂涌</option>
                                     <option style="color:blue;">蔚蓝天空</option>
                                     <option style="color:orange;">橘色汪洋</option>
									</select>
								  </div>
								  
								  
								  
								  
								  <div class="form-group">
								    <button  class="btn btn-primary btn-sm" id="btnSave">新增管理员</button>
								    <button  class="btn btn-primary btn-sm" id="btnSet">重置</button>
								    <a href="post.php?action=list" class="btn btn-primary btn-sm active" role="button">返回列表</a>
								  </div>
							</form>
                        </div>
                        <!-- add end -->
                        <?php } ?>
                        
                        <!-- update start -->
                        <?php if($this->vars['update']){ ?>
                        <div class="panel-body">
							<form data-toggle="validator" role="form" id="update" name="update">
								<input type="hidden" id="level" value="<?php echo $this->vars['level']; ?>" />
								<input type="hidden" name="id" id="id" value="<?php echo $this->vars['id']; ?>" />
								  <div class="form-group">
								    <label for="admin_user"  class="control-label">管理员名称</label>
								    <input type="text" readonly="readonly" value="<?php echo $this->vars['admin_user']; ?>" class="form-control" id="admin_user" name="admin_user" placeholder="输入管理员名称" required>
								  </div>
								  
								  <div class="form-group">
								    <label for="admin_pass1" class="control-label">管理员密码</label>		
								        <input type="password" value="" data-minlength="6" class="form-control" id="admin_pass1" name="admin_pass1" placeholder="输入管理员密码" required>
								  </div>
								  
								  <div class="form-group">
								    <label for="admin_pass" class="control-label">确认管理员密码</label>		
								        <input type="password" value="" data-minlength="6" class="form-control" id="admin_pass" name="admin_pass" placeholder="再次输入管理员密码" required>
								  </div>
								  				  
								  <div class="form-group">
                                   <label class="control-label">权限</label>
	                               <select class="form-control" name="admin_level" id="admin_level">
	                                 <option value="">---请选择管理员等级---</option>
                                     <?php foreach($this->vars['levels'] as $key=>$value) {?>
						               <option value="<?php echo $value->level; ?>"><?php echo $value->level_name; ?></option>
						             <?php } ?>
									</select>
								  </div>
								  
								  <div class="form-group">
								    <button  class="btn btn-primary btn-sm" id="btnUpdate">修改管理员</button>
								    <button  class="btn btn-primary btn-sm" id="btnSet">重置</button>
								    <a href="manager.php?action=list" class="btn btn-primary btn-sm active" role="button">返回列表</a>
								  </div>
							</form>
                        </div>
                        <!-- update end -->
                        <?php } ?>
                        
                        
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>
        <!-- /#page-wrapper -->
        
    </div>
    <!-- /#wrapper -->


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $this->vars['template_admin']; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $this->vars['template_admin']; ?>/vendor/metisMenu/metisMenu.min.js"></script>
 
    <!-- DataTables JavaScript -->
    <script src="<?php echo $this->vars['template_admin']; ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo $this->vars['template_admin']; ?>/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo $this->vars['template_admin']; ?>/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $this->vars['template_admin']; ?>/js/sb-admin-2.js"></script>
    <!-- layer alert -->
    <script src="<?php echo $this->vars['template_plugins']; ?>/layer/layer.js"></script>
    <!-- bootstrapValidator js-->
    <script src="<?php echo $this->vars['template_plugins']; ?>/bootstrapValidator/bootstrapValidator.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <!-- admin_manager js -->
    <script src="<?php echo $this->vars['template_admin']; ?>/js/admin_manager.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
           'columnDefs':[{ "orderable":'desc', "targets":0}],
            'order':[[0,'desc']],
            responsive: true,
		    language:{
		        	"sProcessing":   "处理中...",
		            "sLengthMenu":   "显示 _MENU_ 项结果",
		            "sZeroRecords":  "没有匹配结果",
		            "sInfo":         "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
		            "sInfoEmpty":    "显示第 0 至 0 项结果，共 0 项",
		            "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
		            "sInfoPostFix":  "",
		            "sSearch":       "搜索:",
		            "sUrl":          "",
		            "sEmptyTable":     "表中数据为空",
		            "sLoadingRecords": "载入中...",
		            "sInfoThousands":  ",",
		            "oPaginate": {
		                "sFirst":    "首页",
		                "sPrevious": "上页",
		                "sNext":     "下页",
		                "sLast":     "末页"
		            },
		            "oAria": {
		                "sSortAscending":  ": 以升序排列此列",
		                "sSortDescending": ": 以降序排列此列"
		            }
		            
            }
            
        });
    });

    $(function(){
    	   $('#add').bootstrapValidator({
    	         message: '表单验证失败!',
    	         feedbackIcons: {/*input状态样式图片*/
    	             valid: 'glyphicon glyphicon-ok',
    	             invalid: 'glyphicon glyphicon-remove',
    	             validating: 'glyphicon glyphicon-refresh'
    	         },
    	         fields:{
        	         admin_user:{
        	               message:'管理员没有验证!',
        	               validators:{
	                       notEmpty:{
	                           message:'管理员名称不能为空!'
	                       },
	                       stringLength:{
	                            min:3,
	                            max:30,
	                            message:'管理员名称长度在3-30位之间!'
	                         },
	                         threshold:3,
	                         remote:{    //ajax验证 server result:{"valid",true or false}
                               url:'manager.php?action=checkManagerName', //验证地址
                               message:'管理名称已经存在!',//提示信息
                               delay:2000,//设置2秒发送一次ajax（每秒发送，服务器压力太大）
                               type:'POST',
                               dataType:'json'
		                     },
		                     regexp:{
                                regexp:/^[a-zA-Z0-9_]+$/,
                                message:'管理员名称由字母数字下划线组成!'
			                 }   
    	                  } 
    	               },
    	               admin_pass1:{
                           message:'管理员密码无效',
                           validators:{
                                notEmpty:{
                                    message:'管理员密码不能为空!'
                                },
                                stringLength:{
                                    min:6,
                                    max:30,
                                    message:'管理员密码长度必须在6-30之间!'
                                },
                                different:{
                                    field:'admin_user',
                                    message:'密码不能和管理员名称相同!'
                                },
                                regexp:{
                                    regexp:/^[a-zA-Z0-9_]+$/,
                                    message:'管理员密码由字母数字或下划线组成!'                  
                                }
                                
                            }
         	           },
    	               admin_pass:{
                          message:'管理员密码无效',
                          validators:{
                               notEmpty:{
                                   message:'管理员密码不能为空!'
                               },
                               stringLength:{
                                   min:6,
                                   max:30,
                                   message:'管理员密码长度必须在6-30之间!'
                               },
                               identical:{
                                   field:'admin_pass1',
                                   message:'两次密码不一致!'
                               },
                               different:{
                                   field:'admin_user',
                                   message:'密码不能和管理员名称相同!'
                               },
                               regexp:{
                                   regexp:/^[a-zA-Z0-9_]+$/,
                                   message:'管理员密码由字母数字或下划线组成!'                  
                               }
                               
                           }
        	           },
        	           admin_level:{
                          message:'请选择权限!',
                          validators:{
                              notEmpty:{
                                 message:'请选择管理员权限!'
                              }
                           }
            	       }            
        	      }
	         });

    	   $('#update').bootstrapValidator({
  	         message: '表单验证失败!',
  	         feedbackIcons: {/*input状态样式图片*/
  	             valid: 'glyphicon glyphicon-ok',
  	             invalid: 'glyphicon glyphicon-remove',
  	             validating: 'glyphicon glyphicon-refresh'
  	         },
  	         fields:{
  	               admin_pass1:{
                         message:'管理员密码无效',
                         validators:{
                              notEmpty:{
                                  message:'管理员密码不能为空!'
                              },
                              stringLength:{
                                  min:6,
                                  max:30,
                                  message:'管理员密码长度必须在6-30之间!'
                              },
                              different:{
                                  field:'admin_user',
                                  message:'密码不能和管理员名称相同!'
                              },
                              regexp:{
                                  regexp:/^[a-zA-Z0-9_]+$/,
                                  message:'管理员密码由字母数字或下划线组成!'                  
                              }
                              
                          }
       	           },
  	               admin_pass:{
                        message:'管理员密码无效',
                        validators:{
                             notEmpty:{
                                 message:'管理员密码不能为空!'
                             },
                             stringLength:{
                                 min:6,
                                 max:30,
                                 message:'管理员密码长度必须在6-30之间!'
                             },
                             identical:{
                                 field:'admin_pass1',
                                 message:'两次密码不一致!'
                             },
                             different:{
                                 field:'admin_user',
                                 message:'密码不能和管理员名称相同!'
                             },
                             regexp:{
                                 regexp:/^[a-zA-Z0-9_]+$/,
                                 message:'管理员密码由字母数字或下划线组成!'                  
                             }
                             
                         }
      	           },
      	           admin_level:{
                        message:'请选择权限!',
                        validators:{
                            notEmpty:{
                               message:'请选择管理员权限!'
                            }
                         }
          	       }            
      	      }
	         });
	         //提交表单
    		$("#btnSave").click(addManager);
    		//重置
    		$("#btnSet").click(resetFrom);
    		//编辑管理员
   
    		$('#btnUpdate').click(updateManager);
    

    });
    

    /**
     * 添加数据
     * @private
     */
     function addManager() 
     {
        $("#add").data('bootstrapValidator').validate();
        if(!$("#add").data('bootstrapValidator').isValid())
        {
             return ;
        }
        else
        {
        	var jsonData ={
        		  'submit':'true',
  			      'admin_user':$.trim($("#admin_user").val()),
  			      'admin_pass':$.trim($("#admin_pass").val()),
  			      'admin_level':$.trim($("#admin_level").val()) 			      
  	       };
	  	  $.ajax({
	  	      url: "manager.php?action=add",
	  	      data: jsonData,
	  	      type: "post",
	  	      beforeSend:function(){
                   layer.load(2,{
                        shade:[0.8,'#393D49'],
                        shadeClose:true
                    });
              },
	  	      success: function (backdata) {
	  	          if (backdata == 1) {
	  	              layer.msg('操作成功！', {icon: 1});
	  	              location.href='manager.php?action=list';
	  	          } else if (backdata == 0) {
	  	        	  layer.msg('操作失败！', {icon: 2});
	  	          } else {
	  	        	  layer.msg('防止数据不断增长，会影响速度，请先删掉一些数据再做测试',{icon: 3});
	  	          }
	  	      },error: function (error) {
	  	          console.log(error);
	  	      }
	  	  });
        }
     }
     //修改
     function updateManager()
     {
    	 $("#update").data('bootstrapValidator').validate();
         if(!$("#update").data('bootstrapValidator').isValid())
         {
              return ;
         }
         else
         {
         	var jsonData ={
         		  'submit':'true',
         		  'id':$.trim($("#id").val()),
   			      'admin_pass':$.trim($("#admin_pass").val()),
   			   'admin_level':$.trim($("#admin_level").val()) 			      
   	       };
 	  	  $.ajax({
 	  	      url: "manager.php?action=update",
 	  	      data: jsonData,
 	  	      type: "post",
 	  	      beforeSend:function(){
                    layer.load(2,{
                         shade:[0.8,'#393D49'],
                         shadeClose:true
                     });
               },
 	  	      success: function (backdata) {
 	  	          if (backdata == 1) {
 	  	              layer.msg('操作成功！', {icon: 1});
 	  	              location.href='manager.php?action=list';
 	  	          } else if (backdata == 0) {
 	  	        	  layer.msg('操作失败！', {icon: 2});
 	  	          } else {
 	  	        	  layer.msg('防止数据不断增长，会影响速度，请先删掉一些数据再做测试',{icon: 3});
 	  	          }
 	  	      },error: function (error) {
 	  	          console.log(error);
 	  	      }
 	  	  });
         }
     }

     function editManager(mid)
     {
        var url="manager.php?action=update&id="+mid;
        location.href=url;
     }

     function deleteManager(mid)
     {
          layer.confirm('你确定要删除吗?',{btn:['确定','取消']},function(){
        	  var url="manager.php?action=delete&id="+mid;
       	  	  $.ajax({
       	  	      url: url,
       	  	      type: "get",
       	  	      beforeSend:function(){
                          layer.load(2,{
                               shade:[0.8,'#393D49'],
                               shadeClose:true
                           });
                     },
       	  	      success: function (backdata) {
       	  	          if (backdata == 1) {
       	  	              layer.msg('操作成功！', {icon: 1});
       	  	              location.href='manager.php?action=list';
       	  	          } else if (backdata == 0) {
       	  	        	  layer.msg('操作失败！', {icon: 2});
       	  	          } else {
       	  	        	  layer.msg('防止数据不断增长，会影响速度，请先删掉一些数据再做测试',{icon: 3});
       	  	          }
       	  	      },error: function (error) {
       	  	          console.log(error);
       	  	      }
       	  	  });
           });
     }

     /**
      * 重置表单
      */
      function resetFrom() 
      {
	      $('#add').each(function (index) {
	          $('#add')[index].reset();
	          //ue.setContent('');
	      });
      }


    </script>

</body>

</html>
