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

    <title>个人信息</title>

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
             <form>
                <div class="form-group">
                    <img class="user-img" src="__ROOT__/Uploads/headPhotos/<?php echo ($_SESSION['userId']); ?>/<?php echo ($userInfo["headPhoto"]); echo ($userInfo["extension"]); ?>"/>
                </div>
            </form>
        </div>
    </div>

    <div class="user-content-panl">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <form method="post" action="__URL__/upload" enctype="multipart/form-data">
                        <div class="form-group">
                            <div id="imgPreview" class="alt-user-img">
                                <img id="pic" class="person-img" src="__ROOT__/Uploads/headPhotos/<?php echo ($_SESSION['userId']); ?>/<?php echo ($userInfo["headPhoto"]); echo ($userInfo["extension"]); ?>" alt="用户头像" title="点击可修改头像" />
                            </div>
                            <input id="doc-form-file" class="fileBtn" type='file'  name='photo' onchange='PreviewImage(this)' multiple>
                            <input class="saveBtn btn btn-purple" type="submit" value="保存头像" width="300px">
                        </div>
                    </form>
                </div>

                <div class="col-md-8">
                     <form class="info-form" action="__URL__/do_saveInfo" method="post">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item row">
                            <label for="userName" class="col-form-label">用户名：</label>
                            <label class="col-form-label"><?php echo ($userInfo["username"]); ?></label>
                        </li>
                        <li class="list-group-item row">
                            <label for="otherName" class="col-form-label">昵&nbsp;&nbsp;&nbsp;&nbsp;称：</label>
                            <input type="text" class="form-control" id="otherName" name="nickName" value="<?php echo ($userInfo["nickName"]); ?>">
                        </li>

                        <li class="list-group-item row">
                            <label class="col-form-label">性&nbsp;&nbsp;&nbsp;&nbsp;别：</label>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="sex" id="boy" value="m"> 男
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="sex" id="girl" value="f"> 女
                                </label>
                            </div>
                        </li>

                        <li class="list-group-item row">
                            <label for="phone" class="col-form-label">手机号：</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo ($userInfo["phone"]); ?>">
                        </li>

                        <li class="list-group-item row">
                            <label for="borrowNum" class=" col-form-label">借车次数：</label>
                            <label class="col-form-label"><?php echo ($userInfo["borrowCount"]); ?></label> 次
                        </li>

                        <li class="list-group-item row">
                            <label for="offerNum" class=" col-form-label">供车次数：</label>
                            <label class="col-form-label"><?php echo ($userInfo["offerCount"]); ?></label> 次
                        </li>
                    </ul>
                
                    <input type="submit" class="btn btn-purple" value="保存修改">
               
                </form>
                </div>
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
    <!-- <script src="__PUBLIC__/js/jquery-3.2.1.slim.js"></script> -->
    <!-- <script src="__PUBLIC__/js/common.js"></script> -->
    <script src="__PUBLIC__/js/tether.min.js"></script>
    <script src="__PUBLIC__/js/popper.min.js"></script>
    <script src="__PUBLIC__/js/fileUpload.js"></script>
    <script src="__PUBLIC__/js/bootstrap.js"></script>

    <script type="text/javascript">
        //个人信息判断用户性别
        jQuery(document).ready(function($){
            $sex='<?php echo $userInfo['sex'];?>';
            if($sex==1){
                $('#girl').prop("checked",true);
            }
            else{
                $('#boy').prop("checked",true);
            }
        })


    </script>
</body>
</html>