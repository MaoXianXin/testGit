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

    <title>登录页面</title>

    <!-- Bootstrap core CSS -->
    <link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/css/font-awesome.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="__PUBLIC__/css/style.css" rel="stylesheet">
</head>

<body>
   
   <div class="container">
        <div class="login-panl">
            <form action="__URL__/do_login" method="post">
                <!-- <h3 class="form-head">用户登录</h3> -->
                <div class="form-group">
                    <label for="tel" class="col-form-label">手机号：</label>
                    <input type="tel" class="form-control" name="tel" id="tel" aria-describedby="telHelp" placeholder="请输入手机号">
                    <small id="telHelp" class="form-text">请输入手机号</small>
                </div>
                <div class="form-group">
                    <label for="psw" class="col-form-label">密码：</label>
                    <input type="password" class="form-control" name="password" id="psw" placeholder="6-8位密码" minlength="6"  maxlength="8">
                    <small id="pswHelp" class="form-text">请输入6-8位密码</small>
                </div>
                <div class="form-group">
                    <label for="psw" class="col-form-label">验证码：</label>
                    <input type="text" class="form-control" name="code" id="code" placeholder="4位数字验证码">
                    <small id="codeHelp" class="form-text">请输入4位数字验证码</small>
                    <img src='__APP__/Public/code' onclick="this.src=this.src+'?'+Math.random()" height="35" width="90"/>
                </div>
                <div class="form-group">
                    <button id="login" type="submit" class="btn btn-purple">登录</button>
                    <a class="login-hint" href="__APP__/User/register">立即注册</a>
                    <a class="login-hint" href="#">忘记密码</a>
                </div>
                 
            </form>                 
        </div>
   </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="__PUBLIC__/js/jquery-3.2.1.min.js"></script>
    <script src="__PUBLIC__/js/common.js"></script>
    <!-- <script src="__PUBLIC__/js/jquery-3.2.1.slim.js"></script> -->
    <!-- <script src="__PUBLIC__/js/Validform.js"></script> -->
    <script src="__PUBLIC__/js/tether.min.js"></script>
    <script src="__PUBLIC__/js/popper.min.js"></script>
    <!-- <script src="__PUBLIC__/js/bootstrap.min.js"></script> -->
    <script src="__PUBLIC__/js/bootstrap.js"></script>
    
</body>
</html>