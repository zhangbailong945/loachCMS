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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>用户资料</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>系统设置</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>退出系统</a>
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
                            <a href="index.html"><i class="fa fa-home fa-fw"></i>首页</a>
                        </li>
                        
                        <li class="active">
                            <a href="#"><i class="fa fa-user fa-fw"></i>管理员管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="../admin/manager.php?action=list">管理员列表</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                       <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>管理员管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">管理员列表</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>管理员管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">管理员列表</a>
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
					  <li><a href="#">管理员管理</a></li>
					  <li class="active"><?php echo $this->vars['title']; ?></li>
					</ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						<a href="manager.php?action=list" class="btn btn-primary btn-sm active" role="button">管理员列表</a>
						<a href="manager.php?action=add" class="btn btn-primary btn-sm" role="button">新增管理员</a>
						<?php if($this->vars['update']){ ?>
						<a href="mananger.php?action=update&id={id}" class="btn btn-primary btn-sm" role="button">修改管理员</a>
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
                                    <?php if($this->vars['allManager']){ ?>
                                    <?php foreach($this->vars['allManager'] as $key=>$value) {?>
                                    <tr class="odd gradeX">
                                        <td class="center"><?php echo $value->id; ?></script></td>
                                        <td class="center"><?php echo $value->admin_user; ?></td>
                                        <td class="center"><?php echo $value->level_name; ?></td>
                                        <td class="center"><?php echo $value->login_count; ?></td>
                                        <td class="center"><?php echo $value->last_ip; ?></td>
                                        <td class="center"><?php echo $value->last_time; ?></td>
                                        <td>
										<button id="btnEdit" type="button" class="btn btn-warning btn-xs"> 
										<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>修改 
										</button> 
										<button id="btnDel" type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#DeleteForm" onclick=""> 
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
	                    <div class="panel-footer">
	                     <?php echo $this->vars['page']; ?>
	                    </div>
	                    <?php } ?>
                        <!-- /.list-body end-->
                        
                        
                        <!-- add start -->
                        <?php if($this->vars['add']){ ?>
                        <div class="panel-body">
                        	<form method="post" name="add">
							   <table cellspacing="0" class="left">
							     <tr><td class="left">管理员名称：</td><td><input type="text" name="admin_user" class="text"/>(*长度6-32之间*)</td></tr>
							     <tr><td class="left">密码：</td><td><input type="password" name="admin_pass" class="text"/>(*长度6-32之间*)</td></tr>
							     <tr><td class="left">确认密码：</td><td><input type="password" name="admin_pass1" class="text"/>(*确认密码必须一致*)</td></tr>
							     <tr><td class="left">等级：</td><td><select name="level">
						         <?php foreach($this->vars['levels'] as $key=>$value) {?>
						         <option value="<?php echo $value->id; ?>"><?php echo $value->level_name; ?></option>
						         <?php } ?>
							     </select></td></tr>
							     <tr><td colspan="2"><input type="submit" name="send" value="新增管理员" onclick="return checkAddForm();" class="submit"/> [<a href="manage.php?action=list">返回列表</a>] </td></tr>
							   </table>
							</form>
                        </div>
                        <!-- add end -->
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

    <!-- jQuery -->
    <script src="<?php echo $this->vars['template_admin']; ?>/vendor/jquery/jquery.min.js"></script>

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
    
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
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
    </script>

</body>

</html>
