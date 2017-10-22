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

    <title>车辆详细信息</title>

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
                    <img class="user-img" src="__ROOT__/Uploads/headPhotos/<?php echo ($_SESSION['userId']); ?>/<?php echo ($userPhoto); echo ($userExt); ?>"/>
                </div>
            </form>
        </div>
    </div>

    <?php
 $borrowState=Array('未还车','已还车'); ?>
    <div class="user-content-panl">
        <div class="container">
            <?php if(is_array($bikeInfo)): $i = 0; $__LIST__ = $bikeInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bikeInfo): $mod = ($i % 2 );++$i;?><div class="row">
                    <div class="col-md-4">                     
                        <div class="form-group">
                            <div id="imgPreview" class="alt-user-img">
                                <img id="pic" class="person-img" src="__ROOT__/Uploads/bikeImgs/<?php echo ($bikeInfo["userId"]); ?>/<?php echo ($bikeInfo["bikeImg"]); echo ($bikeInfo["bikeExtension"]); ?>" alt="车辆照片" />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 info-div">
                        <ul class="row list-group-flush">
                            <div class="col-md-6">
                                <li class="list-group-item row">
                                    <label for="userName" class="col-form-label">车辆主人：</label>
                                    <label><?php echo ($bikeInfo["nickName"]); ?></label>
                                </li>
                                <li class="list-group-item row">
                                    <label for="userName" class="col-form-label">车辆品牌：</label>
                                    <label><?php echo ($bikeInfo["brand"]); ?></label>
                                </li>
                                <li class="list-group-item row">
                                    <label for="otherName" class="col-form-label">新旧程度：</label>
                                    <label><?php echo ($bikeInfo["howOld"]); ?></label>
                                </li>

                                <li class="list-group-item row">
                                    <label class="col-form-label">车辆类型：</label>
                                    <label><?php echo ($bikeInfo["sexKinds"]); ?></label>
                                    <label><?php echo ($bikeInfo["bikeKinds"]); ?></label>
                                </li>

                                <li class="list-group-item row">
                                    <label for="phone" class="col-form-label">车辆价格：</label>
                                   <label><?php echo ($bikeInfo["price"]); ?> 元/小时</label>
                                </li>
                                
                                 <li class="list-group-item row">
                                    <label for="phone" class="col-form-label">车主电话：</label>
                                    <label><?php echo ($bikeInfo["phone"]); ?></label>
                                </li>
                            </div>

                            <div class="col-md-6">  
                                <li class="list-group-item row">
                                    <label for="borrowNum" class=" col-form-label">车辆位置：</label>
                                    <label><?php echo ($bikeInfo["location"]); ?></label>
                                </li>
                                <li class="list-group-item row">
                                    <label for="offerNum" class=" col-form-label">借车时间：</label>
                                    <label><?php echo ($bikeInfo["borrowTime"]); ?></label>
                                </li>

                                    <!--未还车  -->
                                <?php
 if($bikeInfo['borrowState']==0){ ?>
                                <li class="list-group-item row">
                                    <label for="offerNum" class=" col-form-label">车辆状态：</label>
                                    <label class="fontRed"><?php echo ($borrowState[$bikeInfo['borrowState']]); ?></label>
                                </li>

                                    <!--已还车  -->
                                <?php  }elseif($bikeInfo['borrowState']==1){ ?> 
                                    <li class="list-group-item row">
                                        <label for="offerNum" class=" col-form-label">车辆状态：</label>
                                        <label class="fontGreen"><?php echo ($borrowState[$bikeInfo['borrowState']]); ?></label>
                                    </li>

                                    <li class="list-group-item row">
                                        <label for="offerNum" class=" col-form-label">还车时间：</label>
                                        <label><?php echo ($bikeInfo["backTime"]); ?></label>
                                    </li>

                                    <li class="list-group-item row">
                                        <label class="col-form-label">借车时长:</label>
                                        <label><?php echo ($bikeInfo["allTime"]); ?></label><br/>
                                    </li>

                                    <li class="list-group-item row">
                                        <label class="col-form-label">预计花费:</label>
                                        <label><?php echo ($bikeInfo["allPrice"]); ?> 元</label><br/>
                                    </li>
                                <?php  } ?>
                            </div>
                        </ul> 

                        <?php  if($bikeInfo['borrowState']==0){ ?> 
                       <!--  <a href="__APP__/User/do_backBike?borrowId=<?php echo ($bikeInfo["borrowId"]); ?>" id="moreBtn" class="btn btn-red not-borrowed">    
                            立即还车
                            <i class="fa fa-angle-double-right"></i>
                        </a> -->
                         <input id="backBtn" type="button" class="btn btn-red" value="立即还车">
                        <?php
 } ?>

                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
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

    <script type="text/javascript">
        //执行立即借车操作
        jQuery(document).ready(function($){
            $('#backBtn').click(function(){
                var id='<?php echo ($bikeInfo["borrowId"]); ?>';
                var url='__URL__/do_backBike';
                $.get(url,{borrowId:id},function(data){
                    alert(data.info);
                    window.location=data.data.newUrl;
                });
            });
        })
    </script>
    
</body>
</html>