<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>后台管理登录</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- basic styles -->
        <link href="/oviio/Public/statics/aceadmin/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/oviio/Public/statics/aceadmin/css/font-awesome.min.css" />

        <!--[if IE 7]>
          <link rel="stylesheet" href="/oviio/Public/statics/aceadmin/css/font-awesome-ie7.min.css" />
        <![endif]-->

        <!-- page specific plugin styles -->

        <!-- fonts -->



        <!-- ace styles -->

        <link rel="stylesheet" href="/oviio/Public/statics/aceadmin/css/ace.min.css" />
        <link rel="stylesheet" href="/oviio/Public/statics/aceadmin/css/ace-rtl.min.css" />

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="/oviio/Public/statics/aceadmin/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
        <script src="/oviio/Public/statics/aceadmin/js/html5shiv.js"></script>
        <script src="/oviio/Public/statics/aceadmin/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-layout">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <i class="icon-leaf green"></i>
                                    <span class="red"></span>
                                    <span class="white">后台管理系统</span>
                                </h1>
                                <!--                                <h4 class="blue">&copy; Company Name</h4>-->
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header blue lighter bigger">
                                                <i class="icon-coffee green"></i>
                                                登录您的账号密码
                                            </h4>

                                            <div class="space-6"></div>

                                            <form method="post" action="<?php echo U();?>">
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" name="username" placeholder="用户名" />
                                                            <i class="icon-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" name="password" placeholder="密码" />
                                                            <i class="icon-lock"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" name="verify" placeholder="验证码" />
                                                        </span>
                                                    </label>
                                                    
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <img class="verifyimg reloadverify" title="点击切换" alt="点击切换" src="<?php echo U('Login/verify');?>">
                                                        </span>
                                                    </label>

                                                    <div class="space"></div>

                                                    <div class="clearfix">
                                                        <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                            <i class="icon-key"></i>
                                                            登录
                                                        </button>
                                                    </div>

                                                    <div class="space-4"></div>
                                                </fieldset>
                                            </form>
                                        </div><!-- /widget-main -->

                                    </div><!-- /widget-body -->
                                </div><!-- /login-box -->
                            </div><!-- /position-relative -->
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div><!-- /.main-container -->

        <!-- basic scripts -->
        <!--[if !IE]> -->
        <script src="/oviio/Public/statics/js/jquery-1.10.2.min.js"></script>
        <!-- <![endif]-->
        <!--[if IE]>
        <script src="/oviio/Public/statics/js/jquery-1.10.2.min.js"></script>
        <![endif]-->
        <!--[if !IE]> -->
        <script type="text/javascript">
            window.jQuery || document.write("<script src='/oviio/Public/statics/aceadmin/js/jquery-2.0.3.min.js'>" + "<" + "script>");
        </script>
        <!-- <![endif]-->
        <!--[if IE]>
        <script type="text/javascript">
            window.jQuery || document.write("<script src='/oviio/Public/statics/aceadmin/js/jquery-1.10.2.min.js'>"+"<"+"script>");
        </script>
        <![endif]-->
        <script type="text/javascript">
            if ("ontouchend" in document)
                document.write("<script src='/oviio/Public/statics/aceadmin/js/jquery.mobile.custom.min.js'>" + "<" + "script>");
        </script>
        <script>
            $(function () {
                var verifyimg = $(".verifyimg").attr("src");
                $(".reloadverify").click(function () {
                    if (verifyimg.indexOf('?') > 0) {
                        $(".verifyimg").attr("src", verifyimg + '&random=' + Math.random());
                    } else {
                        $(".verifyimg").attr("src", verifyimg.replace(/\?.*$/, '') + '?' + Math.random());
                    }
                });
            })
        </script>

        <script src="/oviio/Public/statics/layer/layer.js"></script>
<script src="/oviio/Public/statics/layer/extend/layer.ext.js"></script>        
        <script src="/oviio/Public/statics/js/jquery-form.js"></script>
        <script src="/oviio/Public/statics/js/common.js"></script> 
    </body>
</html>