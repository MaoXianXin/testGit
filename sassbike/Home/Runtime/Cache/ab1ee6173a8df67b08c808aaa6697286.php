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

    <title>注册页面</title>

    <!-- Bootstrap core CSS -->
    <link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/css/font-awesome.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="__PUBLIC__/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- action="__APP__/User/do_register" method="post" -->
   <div class="container">
        <div class="register-panl">
            <form class="register-form">
                <!-- <h3 class="form-head">用户注册</h3> -->
                <!-- <hr> -->
                <div class="form-group">
                    <label for="rTelInput">用户名：</label>
                    <input type="tel" class="form-control" id="rTelInput" name="rTel" aria-describedby="rTelHelp" placeholder="手机号">
                    <small id="rTelHelp" class="form-text">请用手机号注册</small>
                </div>

                <div class="form-group">
                    <label for="nickName">昵称：</label>
                    <input type="text" class="form-control" id="nickName" name="nickName" aria-describedby="nickNameHelp" placeholder="昵称">
                    <small id="nickNameHelp" class="form-text">请填写昵称在20个字符以内</small>
                </div>

                <div class="form-group">
                    <label for="passwordInput1">密码：</label>
                    <input type="password" class="form-control" id="passwordInput1" name="rPsw"aria-describedby="rPswHelp1" placeholder="6-8位密码">
                    <small id="rPswHelp1" class="form-text">请填写6-8位密码</small>
                </div>
                <div class="form-group">
                    <label for="passwordInput2">确认密码：</label>
                    <input type="password" class="form-control" id="passwordInput2" aria-describedby="rPswHelp2" placeholder="6-8位密码">
                    <small id="rPswHelp2" class="form-text">请与第一次填写的密码保持一致</small>
                </div>
                <button type="button" id="registerBtn" class="btn btn-purple">立即注册</button>
                <a class="register-hint" href="__APP__/User/login">马上登录</a>
            </form>
        </div>
   </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="__PUBLIC__/js/jquery-3.2.1.min.js"></script>
    <script src="__PUBLIC__/js/common.js"></script>
    <!-- <script src="__PUBLIC__/js/jquery-3.2.1.slim.js"></script> -->
    <script src="__PUBLIC__/js/tether.min.js"></script>
    <script src="__PUBLIC__/js/popper.min.js"></script>
    <!-- <script src="__PUBLIC__/js/bootstrap.min.js"></script> -->
    <script src="__PUBLIC__/js/bootstrap.js"></script>
    <script src="https://cdn.bootcss.com/blueimp-md5/2.10.0/js/md5.js"></script>

     <script type="text/javascript">
        // jQuery(document).ready(function($){
             // 点击用户注册按钮
            $('#registerBtn').click(function(e){
                if($('#rTelInput').val()=='' || $('#nickName').val()=='' || $('#passwordInput1').val()=='' || $('#passwordInput2').val()==''){
                    alert('信息填写不完整！');
                    return false;
                }else{
                    //阻止表单默认提交事件
                    e.preventDefault();
                    var userName=$("#rTelInput").val();
                    var nickName=$("#nickName").val();
                    var userPassword=md5($("#passwordInput1").val());
                   
                    var url = "__APP__/User/do_register";
                    $.post(url, { 
                                    userName:userName,
                                    nickName:nickName,
                                    userPassword:userPassword
                                }, 
                        function(data){
                            alert(data.info);
                            window.location.reload();
                        }, 'json')
                }
            })
        // })
     </script>
    
</body>
</html>