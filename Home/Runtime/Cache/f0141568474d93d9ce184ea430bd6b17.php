<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <title>登录</title>
    <!--<link href='__PUBLIC__/assets/stylesheets/application-a07755f5.css' rel="stylesheet' type="text/css" />-->
	  <link rel="stylesheet" type="text/css" href="__PUBLIC__/assets/stylesheets/application-a07755f5.css" />
      <!--<script>-->
         <!--var t = getCookie("favicon");-->
      <!--</script>-->  
  </head>
  <body class='login'>
  <script src='__PUBLIC__/assets/jquery/jquery-3.1.1.js'>
  </script>
    <div class='wrapper'>
      <div class='row'>
        <div class='col-lg-12'>
          <div class='brand text-center'>
            <h1>
              <!--<div class='logo-icon'>-->
                <img src='__PUBLIC__/assets/images/sysu.jpg' width="34" height="38">
              <!--</div>-->
              中山大学志愿者服务系统
            </h1>
          </div>
        </div>
      </div>
      <div class='row'>
        <div class='col-lg-12'>
          <form action='__URL__/doLogin' method='post' name='myForm'>
            <fieldset class='text-center'>
              <legend><strong>登录</strong></legend>
              <!--<div class='form-group'>-->
                <!--<strong onchange="getCookie(favicon)">-->
                  <!--<img src='" + t + "' alt='图片' style='width:50px; height:50px; border-radius:50%; overflow:hidden;' />-->
                <!--</strong>-->
              <!--</div>-->
              <div class='form-group'>
                <input id="username" class='form-control' placeholder='用户名' type='text' name='username'>
              </div>
              <div class='form-group'>
                <input id="password" class='form-control' placeholder='密码' type='password' name='password'>
              </div>
              <div class='text-center'>
                <div class='checkbox'>
                  <label>
                    <input type='checkbox'>
                   在此电脑上记住我
                  </label>
                </div>
                 <button type="submit">登录</button>
                <!--<button type="button" onclick="javascript:window.location.href='register.html'">注册</button>-->
              </div>
              <!--<a href="forgetpw.html">忘记密码</a>-->
            </fieldset>
          </form>
        </div>
      </div>
    </div>

  </body>
</html>