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

    <title>借车记录</title>

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
                        <a class="nav-link" href="__APP__/Bike/offerBike">供车</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="__APP__/User/do_LoginOut">退出</a>
                </ul>
            </div>

        </div>
    </nav>

    <div class="user-panl">
        <div class="container">
             <form method="GET" action="#">
                <div class="form-group">
                    <img id="pic" class="user-img" src="__ROOT__/Uploads/headPhotos/<?php echo ($_SESSION['userId']); ?>/<?php echo ($userPhoto); echo ($userExt); ?>"/>
                </div>
            </form>
        </div>
    </div>

    <?php
 $borrowState=Array('未还车','已还车'); $empty='<div class="empty">你还没有任何借车记录！</div>'; ?>
    <div class="user-content-panl">
        <div class="bike-list">
            <div class="container"> 
                <!-- <h2><i class="fa fa-bicycle"></i>借车记录</h2> -->
                <div class="bikeLinks">
                    <a href="__URL__/borrowRecord?borrowState=0" id="allBike" class="backBike active">所有车辆</a>
                    <a href="__URL__/borrowRecord?borrowState=1" id="noBack" class="backBike">未还车辆</a>
                    <a href="__URL__/borrowRecord?borrowState=2" id="hadBack" class="backBike">已还车辆</a>
                </div>
                <hr>

                <div class="row"> 
                     <?php if(is_array($bikeInfo)): $i = 0; $__LIST__ = $bikeInfo;if( count($__LIST__)==0 ) : echo "$empty" ;else: foreach($__LIST__ as $key=>$bikeInfo): $mod = ($i % 2 );++$i;?><div class="col-sm-6 col-md-6 col-lg-3">    
                            <div class="card">
                                <img class="card-img-top" src="__ROOT__/Uploads/bikeImgs/<?php echo ($bikeInfo["userId"]); ?>/<?php echo ($bikeInfo["bikeImg"]); echo ($bikeInfo["bikeExtension"]); ?>" alt="车辆照片">
                                <div class="card-body">
                                    <div class="card-text">
                                    <?php
 if($bikeInfo[borrowState]==0){ ?>
                                        <label class="col-form-label">车辆状态：</label>
                                        <label class="fontRed"><?php echo ($borrowState[$bikeInfo[borrowState]]); ?></label><br/>

                                        <label class="col-form-label">车辆主人：</label>
                                        <label><?php echo ($bikeInfo["nickName"]); ?></label><br/>

                                        <label class="col-form-label">车辆品牌：</label>
                                        <label><?php echo ($bikeInfo["brand"]); ?></label><br/>

                                        <label class="col-form-label">车辆价格：</label>
                                        <label><?php echo ($bikeInfo["price"]); ?> 元/小时</label><br/>

                                        <label class="col-form-label">车辆位置：</label>
                                        <label><?php echo ($bikeInfo["location"]); ?></label><br/>

                                        <label class="col-form-label">借车时间:</label>
                                        <label><?php echo ($bikeInfo["borrowTime"]); ?></label><br/>                                     
                                    <?php
 }elseif($bikeInfo[borrowState]==1){ ?>
                                        <label class="col-form-label">车辆状态：</label>
                                        <label class="fontGreen"><?php echo ($borrowState[$bikeInfo[borrowState]]); ?></label><br/>

                                        <label class="col-form-label">借车时间:</label>
                                        <label><?php echo ($bikeInfo["borrowTime"]); ?></label><br/>

                                        <label class="col-form-label">还车时间:</label>
                                        <label><?php echo ($bikeInfo["backTime"]); ?></label><br/>

                                        <label class="col-form-label">借车时长:</label>
                                        <label><?php echo ($bikeInfo["allTime"]); ?></label><br/>

                                        <label class="col-form-label">预计花费:</label>
                                        <label><?php echo ($bikeInfo["allPrice"]); ?> 元</label><br/>
                                    <?php  } ?>
                                    </div>
                                    
                                    <?php
 if($bikeInfo[borrowState]==0){ ?>
                                        <a href="__APP__/User/moreBorrowInfo?borrowId=<?php echo ($bikeInfo["borrowId"]); ?>" id="moreBtn" class="btn btn-red not-borrowed">    详细信息
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>

                                    <?php
 }elseif($bikeInfo[borrowState]==1){ ?>
                                        <a href="__APP__/User/moreBorrowInfo?borrowId=<?php echo ($bikeInfo["borrowId"]); ?>" id="moreBtn" class="btn btn-purple not-borrowed">    详细信息
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>
                                    <?php
 } ?>
                                </div>
                            </div>
                        </div><?php endforeach; endif; else: echo "$empty" ;endif; ?>
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
    <script src="__PUBLIC__/js/jquery-3.2.1.slim.js"></script>
    <script src="__PUBLIC__/js/tether.min.js"></script>
    <script src="__PUBLIC__/js/popper.min.js"></script>
    <!-- <script src="__PUBLIC__/js/bootstrap.min.js"></script> -->
     <script src="__PUBLIC__/js/bootstrap.js"></script>

    <script type="text/javascript">
        var url = window.location.search;
        var borrowState = url.substring(url.lastIndexOf('=')+1, url.length);
      
        if(borrowState==0){
            $("#noBack").removeClass("active");
            $("#hadBack").removeClass("active");
            $("#allBike").addClass("active");
        }else if(borrowState==1){
            $("#allBike").removeClass("active");
            $("#hadBack").removeClass("active");
            $("#noBack").addClass("active");
           
        }else if(borrowState==2){
            $("#allBike").removeClass("active");
            $("#noBack").removeClass("active");
            $("#hadBack").addClass("active");
           
        }
   
    </script>>
</body>
</html>