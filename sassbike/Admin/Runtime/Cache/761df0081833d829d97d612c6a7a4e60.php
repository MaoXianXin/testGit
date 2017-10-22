<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="shareBike">
	<meta name="author" content="sun">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="yes">

	<title>添加用户</title>

	<!-- Bootstrap core CSS -->
	<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
	<link href="__PUBLIC__/css/font-awesome.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="__PUBLIC__/css/style.css" rel="stylesheet">
</head>

<body>
	<nav class="admin-nav navbar navbar-collapse-xs navbar-expand-md">
		<div class="container">
			<a class="navbar-brand" href="#">
			<i class="fa fa-map-marker"></i>后台管理系统</a>

		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon fa fa-bars"></span>
		    </button>

		   	<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item" >
				  		<a class="nav-link nav-no-link" href="#">欢迎：<?php echo ($_SESSION['adminName']); ?></a>
				  	</li>
				  	
				  	<li class="nav-item">
				  		<a class="nav-link" href="#">退出</a>
				  	</li>
				</ul>
		 	</div>
		</div>
	</nav>
	
	<div class="info-panl container-fluid">
		<div class="row">
			<div class="col-lg-2  text-center">
				<div id="admin-nav" data-children=".item">
					<div class="item">
					    <a class="nav-title active-title" data-toggle="collapse" data-parent="#admin-nav" href="#user-nav" aria-expanded="true" aria-controls="user-nav">
					      	 <i class="fa fa-user"></i>用户管理
					    </a>
					    <div id="user-nav" class="collapse show" role="tabpanel">
				       		<ul class="mb-3">
				       			<li>
				       		 		<a class="nav-a" href="__APP__/Index/index">
				       		 			用户列表
				       		 		</a>
				       		 	</li>
				       		 	<li>
				       		 		<a class="nav-a  active" href="__APP__/Index/addUser">
				       		 			添加用户
				       		 		</a>
					       		 </li>
				       		</ul>
					    </div>
					</div>

					<div class="item">
					    <a class="nav-title" data-toggle="collapse" data-parent="#admin-nav" href="#bike-nav" aria-expanded="false" aria-controls="bike-nav">
					     	<i class="fa fa-truck"></i>车辆管理
					    </a>
					    <div id="bike-nav" class="collapse" role="tabpanel">
					      	<ul class="mb-3">
					      		<li>
					       		 	<a class="nav-a" href="__APP__/Bike/bikeList">
					       		 		车辆列表
					       		 	</a>
				       		 	</li>
				       		 	<li>
				       		 		<a class="nav-a" href="__APP__/Bike/addBike">
				       		 			添加车辆
				       		 		</a>
				       		 	</li>
				       		</ul>
					    </div>
	  				</div>

	  				<div class="item">
					    <a class="nav-title" data-toggle="collapse" data-parent="#admin-nav" href="#news-nav" aria-expanded="false" aria-controls="news-nav">
					     	<i class="fa fa-bell"></i></i>公告管理
					    </a>
					    <div id="news-nav" class="collapse" role="tabpanel">
					      	<ul class="mb-3">
					      		<li>
					       		 	<a class="nav-a" href="__APP__/News/newsList">
					       		 		公告列表
					       		 	</a>
				       		 	</li>
				       		 	<li>
					       		 	<a class="nav-a" href="__APP__/News/addNews">
					       		 		添加公告
					       		 	</a>
				       		 	</li>
				       		</ul>
					    </div>
	  				</div>
				</div>
			</div>

			<div class="col-lg-10">
				<div id="infoDiv" class="info-content">
					<div class="addUser-panl">
						 <form>
						 	<h3 class="form-head">添加用户</h3>
				            <div class="form-group row">
				                <label for="addTelInput" class="col-lg-2 col-md-2 col-sm-2 label-title">用户名：</label>
				                <label class="col-lg-6 col-md-6 col-sm-6">
				                	<input type="tel" class="form-control" id="addTelInput" name="addTel" aria-describedby="addTelHelp" placeholder="手机号">
				                </label>
				                <label class="col-lg-4 col-md-4 col-sm-4">
				                	<small id="addTelHelp" class="form-text">请填写手机号</small>
				                </label>
				            </div>

				            <div class="form-group row">
				                <label for="addNickName" class="col-lg-2 col-md-2 col-sm-2 label-title">昵称：</label>
				                <label class="col-lg-6 col-md-6 col-sm-6">
				                	<input type="text" class="form-control" id="addNickName" name="addNickName" aria-describedby="addNickNameHelp" placeholder="昵称">
				                </label>
				                <label class="col-lg-4 col-md-4 col-sm-4">
				                	<small id="addNickNameHelp" class="form-text">请填写昵称在20个字符以内</small>
				                </label>
				            </div>

				            <div class="form-group row">
				                <label for="addpsw1" class="col-lg-2 col-md-2 col-sm-2 label-title">密码：</label>
				                <label class="col-lg-6 col-md-6 col-sm-6">
				                	<input type="password" class="form-control" id="addpsw1" name="addpsw"aria-describedby="rPswHelp1" placeholder="6-8位密码">
				                </label>
				                <label class="col-lg-4 col-md-4 col-sm-4">
				                	<small id="addpswHelp1" class="form-text">请填写6-8位密码</small>
				                </label>
				            </div>

				            <div class="form-group row">
				                <label for="addpsw2" class="col-lg-2 col-md-2 col-sm-2 label-title">确认密码：</label>
				                <label class="col-lg-6 col-md-6 col-sm-6">
				                	<input type="password" class="form-control" id="addpsw2" aria-describedby="rPswHelp2" placeholder="6-8位密码">
				                </label>
				                <label class="col-lg-4 col-md-4 col-sm-4">
				                	<small id="addpswHelp2" class="form-text">请与第一次填写的密码保持一致</small>
				                </label>
				            </div>
				            <button type="submit" id="addUserBtn" class="btn btn-purple">立即添加</button>
				        </form>
					</div>
				</div>
			</div>

		</div>	
	</div>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<script src="__PUBLIC__/js/jquery-3.2.1.min.js"></script>
	<script src="__PUBLIC__/js/common.js"></script>
    <!-- <script src="__PUBLIC__/js/jquery-3.2.1.slim.js"></script> -->
    <script src="__PUBLIC__/js/tether.min.js"></script>
    <script src="__PUBLIC__/js/popper.min.js"></script>
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/blueimp-md5/2.10.0/js/md5.js"></script>

    <script type="text/javascript">
	    //添加用户 判断是否为空和发送POST请求
	    $('#addUserBtn').click(function(e){
	        if($('#rTelInput').val()=='' || $('#nickName').val()=='' || $('#addpsw1').val()=='' || $('#addpsw2').val()==''){
	            alert('信息填写不完整！');
	            return false;
	        }
	        else{
	            //阻止表单默认提交事件
	            e.preventDefault();
	            var userName=$("#addTelInput").val();
	            var nickName=$("#addNickName").val();
	            var userPassword=md5($("#addpsw1").val());
	           
	            var url = "__APP__/Index/do_addUser";
	            $.post(url, { 
	                            userName:userName,
	                            nickName:nickName,
	                            userPassword:userPassword
	                        }, 
	                function(data){
	                    alert(data.info);
	                    window.location.reload();
	                }, 'json')
	        }
	    })
    </script>
</body>
</html>