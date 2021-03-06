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

	<title>借车页面</title>

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
				  		<a class="nav-link nav-action" href="#">借车</a>
				  	</li>
				  	<li class="nav-item">
				  		<a class="nav-link" href="__APP__/Bike/offerBike">供车</a>
				  	</li>

				  	<li class="nav-item">
				  		<a class="nav-link" href="__APP__/User/do_LoginOut">退出</a>
				  	</li>
				</ul>
		 	</div>
		</div>
	</nav>

	<div class="borrow-panl">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="content-box">
						<form method="GET" action="#">
							<div class="form-group form-search-group">
								<input type="text" class="form-control form-search" placeholder="搜一搜，马上有车" name="">
								<input type="Submit" class="btn btn-search" value="搜索" name="">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php  $empty='<div class="empty">暂时没有可借车辆！</div>'; ?>

	<div class="bike-list borrowBikeList">
		<div class="container"> <!--container-fluid代表平铺-->
			<!-- <h2><i class="fa fa-bicycle"></i>借车记录</h2> -->
			<div class="row"> 
		 		<!--加上一个“no-gutters”类名就会是两列之间没有空隙-->
		 		<!--align-items-end向下对齐 center向上对齐 默认向上对齐  -->
				
	 		    <?php if(is_array($bikeInfo)): $i = 0; $__LIST__ = $bikeInfo;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$bikeInfo): $mod = ($i % 2 );++$i;?><div class="col-sm-6 col-md-6 col-lg-3">    
                        <div class="card">
                            <img class="card-img-top" src="__ROOT__/Uploads/bikeImgs/<?php echo ($bikeInfo["userId"]); ?>/<?php echo ($bikeInfo["bikeImg"]); echo ($bikeInfo["bikeExtension"]); ?>" alt="车辆照片">
                            <div class="card-body">
                                <!-- <h5 class="card-title">车辆信息</h5> -->
                               
                                <div class="card-text">
                                	<label class="col-form-label">车辆主人：</label>
					      			<span><?php echo ($bikeInfo["nickName"]); ?></span><br/>

                                	<label class="col-form-label">车辆类型：</label>
                                	<span><?php echo ($bikeInfo["sexKinds"]); ?>
                                			<?php echo ($bikeInfo["bikeKinds"]); ?>
                                	</span><br/>

					      			<label class="col-form-label">租车价格：</label>
					      			<span><?php echo ($bikeInfo["price"]); ?> 元/小时</span><br/>

					      			<label class="col-form-label">车辆位置：</label>
					      			<span><?php echo ($bikeInfo["location"]); ?></span><br/>

					      			<label class="col-form-label">发布时间：</label><br/>
					      			<span><?php echo ($bikeInfo["offerTime"]); ?></span><br/>
                                </div>
                            
                                <a href="__APP__/Bike/moreBikeInfo?offerId=<?php echo ($bikeInfo["offerId"]); ?>" id="moreBtn" class="btn btn-purple not-borrowed">详情<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div><?php endforeach; endif; else: echo "$empty" ;endif; ?>
			</div>
		</div>

		<!-- 分页开始-->
        <nav aria-label="Page navigation example">
			<ul class="pagination">
				<?php echo ($page); ?>
			</ul>
        </nav>
        <!-- 分页结束-->
	</div>

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
    <!-- <script src="__PUBLIC__/js/jquery-3.2.1.slim.js"></script> -->
    <script src="__PUBLIC__/js/tether.min.js"></script>
    <script src="__PUBLIC__/js/popper.min.js"></script>
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>

	
	
</body>
</html>