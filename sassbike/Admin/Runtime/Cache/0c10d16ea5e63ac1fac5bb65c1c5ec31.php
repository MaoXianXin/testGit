<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="shareBike">
	<meta name="author" content="sun">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="yes">

	<title>公告列表</title>

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
					       		 	<a class="nav-a active" href="__APP__/News/newsList">
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

			<?php $i=1; ?>
			<div class="col-lg-10">
				<div id="infoDiv" class="info-content">
					<table class="table table-hover">
						<thead class="table-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">公告ID</th>
								<th scope="col">标题</th>
								<th scope="col">内容</th>
								<th scope="col">发布时间</th>			
								<th scope="col" colspan="2">操作</th>
							</tr>
						</thead>
						
						<tbody>
							<?php if(is_array($newsInfo)): $i = 0; $__LIST__ = $newsInfo;if( count($__LIST__)==0 ) : echo "没有任何记录" ;else: foreach($__LIST__ as $key=>$newsInfo): $mod = ($i % 2 );++$i;?><tr>
									<th scope="row"><?php echo ($i); ?></th>
									<td><?php echo ($newsInfo["newsId"]); ?></td>
									<td><?php echo ($newsInfo["title"]); ?></td>
									<td><?php echo ($newsInfo["content"]); ?></td>
									<td><?php echo ($newsInfo["pubTime"]); ?></td>
									<td><a class="fontGreen" href="__APP__/News/alterNews?newsId=<?php echo ($newsInfo["newsId"]); ?>">编辑</a></td>
									<td><a class="fontRed" href="__APP__/News/do_deleteNews?newsId=<?php echo ($newsInfo["newsId"]); ?>">删除</a></td>
								</tr><?php endforeach; endif; else: echo "没有任何记录" ;endif; ?>
						</tbody>
					</table>

					<!-- 分页开始-->
		            <nav aria-label="Page navigation example">
						<ul class="pagination">
							<?php echo ($page); ?>
						</ul>
		            </nav>
		            <!-- 分页结束-->
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
	
</body>
</html>