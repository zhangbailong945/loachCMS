<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LoachCMS后台管理中心</title>

    <!-- Bootstrap Core CSS -->
    <link href="{$template_admin}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{$template_admin}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{$template_admin}/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{$template_admin}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- bootstrapValidator css -->
    <link href="{$template_plugins}/bootstrapValidator/bootstrapValidator.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">loachCMS管理员登录中心</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="loginForm">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="请输入管理员账号" id="admin_user" name="admin_user" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="请输入管理员密码" id="admin_pass" name="admin_pass" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">记住我
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a id="login" class="btn btn-lg btn-success btn-block">登录</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{$template_admin}/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{$template_admin}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{$template_admin}/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- bootstrapValidator js-->
    <script src="{$template_plugins}/bootstrapValidator/bootstrapValidator.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{$template_admin}/js/sb-admin-2.js"></script>
    <!-- layer js -->
    <script src="{$template_plugins}/layer/layer.js"></script>
    <script type="text/javascript">
    $(function(){
        $("#loginForm").bootstrapValidator({
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
                        url:'manager.php?action=checkLoginManagerName', //验证地址
                        message:'管理名称不存在!',//提示信息
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
                            regexp:{
                                regexp:/^[a-zA-Z0-9_]+$/,
                                message:'管理员密码由字母数字或下划线组成!'                  
                            }
                            
                        }
     	           }
          }
        });
    	$("#login").click(doLogin);
    });
    //登录
    function doLogin()
    {
    	$("#loginForm").data('bootstrapValidator').validate();
        if(!$("#loginForm").data('bootstrapValidator').isValid())
        {
             return ;
        }
        else
        {
            
            
        	var jsonData ={
        		  'submit':'true',
  			      'admin_user':$.trim($("#admin_user").val()),
  			      'admin_pass':$.trim($("#admin_pass").val())			      
  	       };
	  	  $.ajax({
	  	      url: "login.php?action=login",
	  	      data: jsonData,
	  	      type: "post",
	  	      beforeSend:function(){
                   layer.load(2,{
                        shade:[0.8,'#393D49'],
                        shadeClose:true
                    });
              },
	  	      success: function(backdata) {
    	  	      alert(backdata);
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
    </script>
</body>

</html>
