<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="shareBike">
	<meta name="author" content="sun">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="yes">

	<title>添加车辆</title>

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
					    <a class="nav-title active-title" data-toggle="collapse" data-parent="#admin-nav" href="#bike-nav" aria-expanded="false" aria-controls="bike-nav">
					     	<i class="fa fa-truck"></i>车辆管理
					    </a>
					    <div id="bike-nav" class="collapse show" role="tabpanel">
					      	<ul class="mb-3">
					      		<li>
					       		 	<a class="nav-a" href="__APP__/Bike/bikeList">
					       		 		车辆列表
					       		 	</a>
				       		 	</li>
				       		 	<li>
				       		 		<a class="nav-a active" href="__APP__/Bike/addBike">
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

			<?php $i=1; ?>
			<div class="col-lg-10">
				<div id="infoDiv" class="info-content">
					<div class="offer-panl">
						<div class="container">
					        <form class="offer-form" action="__URL__/do_addBike" method="post" enctype="multipart/form-data">
					        	<!-- <h3 class="form-head">添加车辆</h3> -->
					            <div class="row">
					            	<div class="form-group col-md-6">
						                <label class="col-form-label" for="bikeBrand">车辆品牌：</label>
						                <input type="text" class="form-control" id="bikeBrand" name="bikeBrand" autocomplete="off" aria-describedby="brandHelp" placeholder="如：飞鸽">
						                <small id="brandHelp" class="form-text text-muted"></small>
						            </div>

						             <div class="form-group col-md-6">
						                <label for="offerPhone" class="col-form-label">手机号：（必填）</label>
						                <input type="text" class="form-control" id="offerPhone" name="phone" autocomplete="off" placeholder="手机号">
						                <small id="offerPhoneHelp" class="form-text">请输入手机号</small>
						            </div>
					            </div>
					            
								<div class="row">
									<div class="form-group col-md-6">
						                <label for="price" class="col-form-label">租金：（元/小时）</label>
						                <input type="text" class="form-control" id="price" name="price" autocomplete="off" placeholder="若不填，则默认“面议”">
						            </div>

						            <div class="form-group col-md-6">
						                <label for="location" class="col-form-label">车辆位置：（必填）</label>
						                <input id="location" class="form-control" name="location"  placeholder="如：理工大西门">
						                <small id="locationHelp" class="form-text">请输入50字以内的位置信息</small>
						            </div>
								</div>

								<div class="form-group">
							      	<label for="howOld" class="col-form-label">新旧程度：</label>
							      	<select name="howOld" class="form-control">
							      		<option value="全新">全新</option>
							      		<option value="九成新">九成新</option>
							      		<option value="八成新">八成新</option> 
							      		<option value="七成新">七成新</option> 
							      		<option value="六成新">六成新</option> 
							      		<option value="五成新">五成新</option> 
							      		<option value="四成新">四成新</option>
							      		<option value="三成新">三成新</option> 
							      		<option value="二成新">二成新</option> 
							      		<option value="一成新">一成新</option>
							      	</select>
							    </div>

								<div class="row">
						            <div class="form-group col-md-6">
						                <label class="col-form-label">车辆类型1：</label>
						                <div class="form-check form-check-inline">
										  	<label class="form-check-label">
										    	<input class="form-check-input" type="radio" name="bikeKinds" value="bike" checked="checked"> 自行车
										  	</label>
										</div>
										<div class="form-check form-check-inline">
										  	<label class="form-check-label">
										    	<input class="form-check-input" type="radio" name="bikeKinds" value="elect"> 电动车
										  	</label>
										</div>
									</div>

									<div class="form-group col-md-6">
										<label class="col-form-label">车辆类型2：</label>
										<div class="form-check form-check-inline">
										  	<label class="form-check-label">
										    	<input class="form-check-input" type="radio" name="sexKinds" value="m" checked="checked"> 男式
										  	</label>
										</div>
										<div class="form-check form-check-inline">
										  	<label class="form-check-label">
										    	<input class="form-check-input" type="radio" name="sexKinds" value="f"> 女式
										  	</label>
										</div>
						            </div>
								</div>

					            <div class="form-group">
					            	<label for="bikeImg" class="col-form-label">上传车辆照片：</label>
						            
					                <input id="doc-form-file" class="fileBtn" type='file'  name='photo' multiple>
				            	</div>
					            	
					            <button id="addBikeBtn" type="submit" class="btn btn-purple">添加车辆</button>
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
    	//清空刷新时input file里的内容
		var obj = document.getElementById('doc-form-file') ;
		obj.outerHTML=obj.outerHTML;

    	$('#addBikeBtn').click(function(){
    		if($('#offerPhone').val()==='' || $('#location')===''){
    			alert("手机号或车辆位置未填完整！");
    			return false;
    		}
    	})
    </script>>
	
</body>
</html>