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

	<title>首页</title>

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
			<i class="fa fa-map-marker"></i>Navbar</a>

		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon fa fa-bars"></span>
		    </button>

		   	<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul id="indexNav" class="navbar-nav ml-auto">
					
				  	<li class="nav-item">
						<a class="nav-link nav-action" href="#">首页</a>
				  	</li>

					<?php
 if ($_SESSION['userId']){ ?>
					<li class="nav-item hasLogin">
				  		<a class="nav-link nav-no-link" href="#">欢迎：<?php echo ($_SESSION['nickName']); ?></a>
				  	</li>
				  	<li class="nav-item dropdown hasLogin"> 
                        <a class="nav-link dropdown-toggle" href="#" id="pCenter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 个人中心 </a> 

                        <div class="dropdown-menu" aria-labelledby="pCenter"> 
                            <a class="dropdown-item" href="__APP__/User/personInfo">个人信息</a> 
                            <a class="dropdown-item" href="__APP__/User/borrowRecord">借车记录</a> 
                            <a class="dropdown-item" href="__APP__/User/offerRecord">供车记录</a> 
                        </div> 
                    </li>
                    
				  	<li class="nav-item hasLogin">
				  		<a class="nav-link" href="__APP__/Bike/borrowBike">借车</a>
				  	</li>
				  	<li class="nav-item hasLogin">
				  		<a class="nav-link" href="__APP__/Bike/offerBike">供车</a>
				  	</li>
				  	<li class="nav-item hasLogin">
				  		<a class="nav-link" href="__APP__/User/do_LoginOut">退出</a>
				  	</li>
				
					<?php
 }else{ ?>
				  	<li class="nav-item noLogin">
				  		<a class="nav-link" href="__APP__/User/login">登录</a>
				  	</li>
				  	<li class="nav-item noLogin">
				  		<a class="nav-link" href="__APP__/User/register">注册</a>
				  	</li>
				  	<?php
 } ?>
				  	
				</ul>
		 	</div>
		</div>
	</nav>

	<div class="home-panl">
		<div class="row">
			<div class="col-md-12">
				<div class="content-box">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  	<ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  	</ol>
					  	<div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="__PUBLIC__/imgs/img1.jpg" alt="First slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="__PUBLIC__/imgs/img2.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="__PUBLIC__/imgs/img3.jpg" alt="Third slide">
						    </div>
					  	</div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid"> <!--container-fluid代表平铺-->
		<div class="about-panl">
			<!-- <h1 class="form-head">
				<i class="fa fa-group"></i> 
				关于我们
			</h1> -->
			<div class="row">
			    <div class="col-md-4">
			    	<div class="specialty-1-img">
			    		<img src="__PUBLIC__/imgs/img4">
			    	</div>
			    	<h3>特色一</h3>
			      	<p class="specialty-intro">
				      	是一个专门针对学校的自行车共享网站,
						是一个专门针对学校的自行车共享网站,
			      	</p>
			    </div>
			    <div class="col-md-4">
			      	<div class="specialty-1-img">
			    		<img src="__PUBLIC__/imgs/img5">
			    	</div>
			    	<h3>特色二</h3>
			      	<p class="specialty-intro">
				      	是一个专门针对学校的自行车共享网站,
						是一个专门针对学校的自行车共享网站,
			      	</p>
			    </div>
			    <div class="col-md-4">
			      	<div class="specialty-1-img">
			    		<img src="__PUBLIC__/imgs/img6">
			    	</div>
			    	<h3>特色三</h3>
			      	<p class="specialty-intro">
				      	是一个专门针对学校的自行车共享网站,
						是一个专门针对学校的自行车共享网站,
			      	</p>
			    </div>
	  		</div>
		</div>
	</div>
	
	<div class="container-fluid"> <!--container-fluid代表平铺-->
		<div id="ajaxServer"  class="news-panl">
			<h1 class="form-head">
				<i class="fa fa-bullhorn"></i>
				最新公告
			</h1>
			
			<div class="row">
                <div class="col-md-12">
                    <?php if(is_array($newslist)): $i = 0; $__LIST__ = $newslist;if( count($__LIST__)==0 ) : echo "还没有发布任何公告！" ;else: foreach($__LIST__ as $key=>$newslist): $mod = ($i % 2 );++$i;?><div class="news-content">
                            <h4 class="news-head"><?php echo ($newslist["title"]); ?></h4>

                            <a class="more-info" href="#">详情</a>
                            <div class="news-info">
                                <?php echo ($newslist["content"]); ?>
                            </div>
                            <p class="info-time"><?php echo ($newslist["pubTime"]); ?></p>
                        </div><?php endforeach; endif; else: echo "还没有发布任何公告！" ;endif; ?>
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
	<!-- <script src="__PUBLIC__/js/server.js"></script> -->
	<script src="__PUBLIC__/js/common.js"></script>
    <!-- <script src="__PUBLIC__/js/jquery-3.2.1.slim.js"></script> -->
    <script src="__PUBLIC__/js/tether.min.js"></script>
    <script src="__PUBLIC__/js/popper.min.js"></script>
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
 	
	
</body>
</html>