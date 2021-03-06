<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="shareBike">
	<meta name="author" content="sun">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="yes">

	<title>供车页面</title>

	<!-- Bootstrap core CSS -->
	<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
	<link href="__PUBLIC__/css/font-awesome.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="__PUBLIC__/css/style.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-collapse-xs navbar-expand-md fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">
			<a class="navbar-brand" href="__APP__/Index/index">RIDER</a>

		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon fa fa-bars"></span>
		    </button>

		   	<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item" >
				  		<a class="nav-link nav-no-link" href="#">欢迎：<?php echo ($_SESSION['nickName']); ?></a>
				  	</li>
				  	<li class="nav-item">
						<a class="nav-link" href="__APP__/Index/index">首页</a>
				  	</li>
				  	 <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" id="pCenter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 个人中心 </a> 

                        <div class="dropdown-menu" aria-labelledby="pCenter"> 
                            <a class="dropdown-item" href="__APP__/User/personInfo">个人信息</a> 
                            <a class="dropdown-item" href="__APP__/User/borrowRecord">借车记录</a> 
                            <a class="dropdown-item" href="__APP__/User/offerRecord">供车记录</a> 
                        </div> 
                    </li>
				  	<li class="nav-item">
				  		<a class="nav-link" href="__APP__/Bike/borrowBike">借车</a>
				  	</li>
				  	<li class="nav-item">
				  		<a class="nav-link nav-action" href="#">供车</a>
				  	</li>

				  	<li class="nav-item">
				  		<a class="nav-link" href="__APP__/User/do_LoginOut">退出</a>
				  	</li>
				</ul>
		 	</div>
		</div>
	</nav>
	
	<div class="user-panl">
        <div class="container">
             <form>
                <div class="form-group">
                    <img id="pic" class="user-img" src="__ROOT__/Uploads/headPhotos/<?php echo ($_SESSION['userId']); ?>/<?php echo ($userPhoto); echo ($userExt); ?>"/>
                </div>
            </form>
        </div>
    </div>

	<div class="offer-panl">
		<div class="container">
	        <form class="offer-form" action="__URL__/do_offerBike" method="post" enctype="multipart/form-data">
	        	<!-- <h3 class="form-head"><i class="fa fa-car"></i>提供车辆</h3> -->
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
		            <div id="imgPreview" class="form-bike-img">
	                	<img src="__PUBLIC__/imgs/bike5.jpg" alt="照片预览">
	                </div>
	                <input id="doc-form-file" class="fileBtn" type='file'  name='photo' onchange='PreviewImage(this)' multiple>
            	</div>
	            	
	            <button type="submit" class="btn btn-purple">立即供车</button>
	        </form>
	    </div>
	</div>

	<script type="text/javascript">
		//清空刷新时input file里的内容
		var obj = document.getElementById('doc-form-file') ;
		obj.outerHTML=obj.outerHTML;
	</script>

	<!-- 尾部开始-->
    <div class="footer">
        <div class="footer_content">
            <p class="power">&copy;请勿侵权</p>
            <p>友情链接
                <a href="#">ofo小黄车</a>
                <a href="#">摩拜单车</a>
            </p>
        </div>
    </div>
    <!-- 尾部结束-->

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<script src="__PUBLIC__/js/jquery-3.2.1.min.js"></script>
	<script src="__PUBLIC__/js/common.js"></script>
	<script src="__PUBLIC__/js/fileUpload.js"></script>
    <!-- <script src="__PUBLIC__/js/jquery-3.2.1.slim.js"></script> -->
    <script src="__PUBLIC__/js/tether.min.js"></script>
    <script src="__PUBLIC__/js/popper.min.js"></script>
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>

	
	
</body>
</html>