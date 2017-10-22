<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="shareBike">
	<meta name="author" content="sun">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="yes">

	<title>添加公告</title>

	<!-- Bootstrap core CSS -->
	<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
	<link href="__PUBLIC__/css/font-awesome.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="__PUBLIC__/css/style.css" rel="stylesheet">
</head>

<body>
	<nav class="admin-nav navbar navbar-collapse-xs navbar-expand-md">
		<div class="container">
			<a class="navbar-brand" href="__APP__/User/UserList">
			<i class="fa fa-map-marker"></i>后台管理系统</a>

		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon fa fa-bars"></span>
		    </button>

		   	<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item" >
				  		<a class="nav-link nav-no-link" href="#">欢迎：<?php echo ($_SESSION['adminNum']); ?></a>
				  	</li>
				  	
				  	<li class="nav-item">
				  		<a class="nav-link" href="__APP__/Index/do_adminLoginOut">退出</a>
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
					    <a class="nav-title" data-toggle="collapse" data-parent="#admin-nav" href="#user-nav" aria-expanded="true" aria-controls="user-nav">
					      	 <i class="fa fa-user"></i>用户管理
					    </a>
					    <div id="user-nav" class="collapse" role="tabpanel">
				       		<ul class="mb-3">
				       			<li>
				       		 		<a class="nav-a" href="__APP__/User/userList">
				       		 			用户列表
				       		 		</a>
				       		 	</li>
				       		 	<li>
				       		 		<a class="nav-a" href="__APP__/User/addUser">
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
					    <a class="nav-title active-title" data-toggle="collapse" data-parent="#admin-nav" href="#news-nav" aria-expanded="false" aria-controls="news-nav">
					     	<i class="fa fa-bell"></i></i>公告管理
					    </a>
					    <div id="news-nav" class="collapse show" role="tabpanel">
					      	<ul class="mb-3">
					      		<li>
					       		 	<a class="nav-a" href="__APP__/News/newsList">
					       		 		公告列表
					       		 	</a>
				       		 	</li>
				       		 	<li>
					       		 	<a class="nav-a active" href="__APP__/News/addNews">
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
					<div class="offer-panl">
						<div class="container">
					        <form class="offer-form" action="__APP__/News/do_addNews" method="post" enctype="multipart/form-data">
					        	<!-- <h3 class="form-head">添加公告</h3> -->
					            <div class="form-group col-md-7">
						            <label for="newsTitle" class="col-form-label">标题：</label>
						            <input type="text" class="form-control" id="newsTitle" name="title" maxlength="120" autocomplete="off">
						            <small id="newsTitleHelp" class="form-text">120字以内</small>
						        </div>

					            <div class="form-group col-md-7">
							    	<label for="newsContent" class="col-form-label">公告内容：</label>
							    	<textarea class="form-control" id="newsContent" name="content" rows="6" cols="100"></textarea>
							    	<small id="newsContentHelp" class="form-text">600字以内</small>
							  	</div>
							  	<div class="form-group col-md-7">
							  		<button type="submit" id="addNewsBtn" class="btn btn-purple">立即添加</button>
							  	</div>
					        </form>
					    </div>
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
    <script src="__PUBLIC__/js/jquery-3.2.1.slim.js"></script>
    <script src="__PUBLIC__/js/tether.min.js"></script>
    <script src="__PUBLIC__/js/popper.min.js"></script>
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    	$('#addNewsBtn').click(function(e){
	        if($('#newsTitle').val()=='' || $('#newsContent').val()==''){
	            alert('信息填写不完整！');
	            return false;
	        }
    	})
    </script>
	
</body>
</html>