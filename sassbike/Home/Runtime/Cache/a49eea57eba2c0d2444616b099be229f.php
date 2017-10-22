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

    <title>供车记录</title>

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
 $offerState=Array('未借出','已借出','已还车','已停供'); $bikeKinds=Array('自行车','电动车'); $sexKinds=Array('男式','女式'); ?>
    <div class="user-content-panl">
        <div class="container">
            <?php if(is_array($bikeInfo)): $i = 0; $__LIST__ = $bikeInfo;if( count($__LIST__)==0 ) : echo "还没有发布任何公告！" ;else: foreach($__LIST__ as $key=>$bikeInfo): $mod = ($i % 2 );++$i;?><div class="row">
                    <div class="col-md-4">                     
                        <div class="form-group">
                            <div id="imgPreview" class="alt-user-img">
                                <img id="pic" class="person-img" src="__ROOT__/Uploads/bikeImgs/<?php echo ($_SESSION['userId']); ?>/<?php echo ($bikeInfo["bikeImg"]); echo ($bikeInfo["bikeExtension"]); ?>" alt="车辆照片" title="点击可修改头像" />
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 info-div">
                        <ul class="row list-group-flush">
                            <div class="col-md-6">
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
                                    <label><?php echo ($sexKinds[$bikeInfo['sexKinds']]); ?></label>
                                    <label><?php echo ($bikeKinds[$bikeInfo['bikeKinds']]); ?></label>
                                </li>

                                <li class="list-group-item row">
                                    <label for="phone" class="col-form-label">车辆价格：</label>
                                   <label><?php echo ($bikeInfo["price"]); ?> 元/小时</label>
                                </li>

                                <li class="list-group-item row">
                                    <label for="phone" class="col-form-label">我的电话：</label>
                                    <label><?php echo ($bikeInfo["phone"]); ?></label>
                                </li>

                                <li class="list-group-item row">
                                    <label for="borrowNum" class=" col-form-label">车辆位置：</label>
                                    <label><?php echo ($bikeInfo["location"]); ?></label>
                                </li>
                            </div>

                            <div class="col-md-6">
                                <li class="list-group-item row">
                                    <label for="offerNum" class=" col-form-label">供车时间：</label>
                                    <label><?php echo ($bikeInfo["offerTime"]); ?></label>
                                </li>

                                <li class="list-group-item row">
                                    <label for="offerNum" class=" col-form-label">车辆状态：</label>
                                    <label><?php echo ($offerState[$bikeInfo['offerState']]); ?></label>
                                </li>

                                    <!--已借出  -->
                                <?php
 if($bikeInfo['offerState']==1){; ?>
                                <li class="list-group-item row">
                                    <label for="offerNum" class=" col-form-label">借者昵称：</label>
                                    <label><?php echo ($bikeInfo["borrowerNickName"]); ?></label>
                                </li>

                                <li class="list-group-item row">
                                    <label for="offerNum" class=" col-form-label">借者电话：</label>
                                    <label><?php echo ($bikeInfo["borrowerPhone"]); ?></label>
                                </li>

                                <li class="list-group-item row">
                                    <label for="offerNum" class=" col-form-label">借车时间：</label>
                                    <label><?php echo ($bikeInfo["borrowTime"]); ?></label>
                                </li>

                                    <!--已还车  -->
                                <?php  }elseif($bikeInfo['offerState']==2){ ?>
                                <li class="list-group-item row">
                                    <label for="offerNum" class=" col-form-label">借者昵称：</label>
                                    <label><?php echo ($bikeInfo["borrowerNickName"]); ?></label>
                                </li>

                                <li class="list-group-item row">
                                    <label for="offerNum" class=" col-form-label">借者电话：</label>
                                    <label><?php echo ($bikeInfo["borrowerPhone"]); ?></label>
                                </li>

                                <li class="list-group-item row">
                                    <label for="offerNum" class=" col-form-label">借车时间：</label>
                                    <label><?php echo ($bikeInfo["borrowTime"]); ?></label>
                                </li>

                                <li class="list-group-item row">
                                    <label for="offerNum" class=" col-form-label">还车时间：</label>
                                    <label><?php echo ($bikeInfo["backTime"]); ?></label>
                                </li>

                                <!--已停供  -->
                                <?php  }elseif($bikeInfo['offerState']==3){ ?>
                                <li class="list-group-item row">
                                    <label for="offerNum" class=" col-form-label">停供时间：</label>
                                    <label><?php echo ($bikeInfo["stopTime"]); ?></label>
                                </li>
                                <?php  } ?>
                            </div>
                            
                        </ul> 

                         <!--未借出  -->
                        <?php
 if($bikeInfo['offerState']==0){; ?>
                        <input type="submit" class="btn btn-purple" value="停止供车">

                         <!--已还车 & 已停供-->
                        <?php  }elseif($bikeInfo['offerState']==2 || $bikeInfo['offerState']==3){ ?>
                        <input type="submit" class="btn btn-purple" value="再次供车">
                        <?php  } ?>
                    </div>
                </div><?php endforeach; endif; else: echo "还没有发布任何公告！" ;endif; ?>
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