<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>后台首页</title>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="/oviio/Public/statics/aceadmin/css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="/oviio/Public/statics/aceadmin/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/oviio/Public/statics/font-awesome-4.4.0/css/font-awesome.min.css"/>
        <!--[if IE 7]>
        <link rel="stylesheet" href="/oviio/Public/statics/aceadmin/css/font-awesome-ie7.min.css"/>
        <![endif]-->
        <link rel="stylesheet" href="/oviio/Public/statics/aceadmin/css/ace.min.css"/>
        <!--[if lte IE 8]>
        <link rel="stylesheet" href="/oviio/Public/statics/aceadmin/css/ace-ie.min.css"/>
        <![endif]-->
        <script src="/oviio/Public/statics/aceadmin/js/ace-extra.min.js"></script>
        <!--[if lt IE 9]>
        <script src="/oviio/Public/statics/aceadmin/js/html5shiv.js"></script>
        <script src="/oviio/Public/statics/aceadmin/js/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="/oviio/Public/statics/css/base.css"/>
    
</head>
<body>
    <div class="navbar navbar-default" id="navbar">
        <script type="text/javascript">
            try {
                ace.settings.check('navbar', 'fixed')
            } catch (e) {
            }
        </script>
        <div class="navbar-container" id="navbar-container">
            <div class="navbar-header pull-left">
                <a href="<?php echo U('Admin/Index/index');?>" class="navbar-brand"><small><i class="icon-leaf"></i> 管理后台</small></a>
            </div>
            <div class="navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="light-blue"> 
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <!--                            <img class="nav-user-photo" src="/oviio/Public/statics/aceadmin/avatars/user.jpg" alt="Jason's Photo"/> -->
                            <span class="user-info"><small>欢迎光临,</small> <?php echo ($_SESSION['admin']['username']); ?></span>
                            <i class="icon-caret-down"></i>
                        </a>
                        <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li class="divider"></li>
                            <li><a href="<?php echo U('Admin/Rule/edit_admin',array('id'=>$_SESSION['admin']['id']));?>"><i class="fa fa-pencil-square-o"></i> 修改密码</a></li>
                            <li><a href="<?php echo U('Admin/Login/logout');?>"><i class="icon-off"></i> 退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-container" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.check('main-container', 'fixed')
            } catch (e) {
            }
        </script>
        <div class="main-container-inner">
            <a class="menu-toggler" id="menu-toggler" href="#"><span class="menu-text"></span></a>
            <div class="sidebar" id="sidebar">
                <script type="text/javascript">
                    try {
                        ace.settings.check('sidebar', 'fixed')
                    } catch (e) {
                    }
                </script>
                <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large"> 
                        <button class="btn btn-success"><i class="icon-signal"></i></button> 
                        <button class="btn btn-info"><i class="icon-pencil"></i></button> 
                        <button class="btn btn-warning"><i class="icon-group"></i></button> 
                        <button class="btn btn-danger"><i class="icon-cogs"></i></button>
                    </div>
                    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                        <span class="btn btn-success"></span>
                        <span class="btn btn-info"></span>
                        <span class="btn btn-warning"></span>
                        <span class="btn btn-danger"></span>
                    </div>
                </div>
                <!-- #sidebar-shortcuts -->
                <ul class="nav nav-list">
                    <?php if(is_array($nav_data)): foreach($nav_data as $key=>$v): if(empty($v['_data'])): ?><li class="b-nav-li">
                                <a href="<?php echo U($v['mca']);?>">
                                    <i class="fa fa-<?php echo ($v['ico']); ?> icon-test"></i> <span class="menu-text"><?php echo ($v['name']); ?></span>
                                </a>
                            </li>
                        <?php else: ?>
                            <li class="b-has-child">
                                <a href="#" class="dropdown-toggle b-nav-parent">
                                    <i class="fa fa-<?php echo ($v['ico']); ?> icon-test"></i> <span class="menu-text"><?php echo ($v['name']); ?></span><b class="arrow icon-angle-down"></b>
                                </a>
                                <ul class="submenu">
                                    <?php if(is_array($v['_data'])): foreach($v['_data'] as $key=>$n): ?><li class="b-nav-li">
                                            <a href="<?php echo U($n['mca']);?>"><i class="icon-double-angle-right"></i> <?php echo ($n['name']); ?></a>
                                        </li><?php endforeach; endif; ?>
                                </ul>
                            </li><?php endif; endforeach; endif; ?>
                </ul>
                <div class="sidebar-collapse" id="sidebar-collapse"><i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i></div>
                <script type="text/javascript">
                    try {
                        ace.settings.check('sidebar', 'collapsed')
                    } catch (e) {
                    }
                </script>
            </div>
            <div class="main-content">
                <div class="page-content">
    <!-- 导航栏开始 -->
    <div class="page-header">
        <h1>
            <i class="fa fa-home"></i>首页
        </h1>
    </div>
    <div class="col-xs-12">
        <div class="tabbable">
            后台首页
        </div>
    </div>
</div>
            </div>
        </div>
        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse"><i class="icon-double-angle-up icon-only bigger-110"></i></a>
    </div>
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
    <script src="/oviio/Public/statics/aceadmin/js/bootstrap.min.js"></script>
    <script src="/oviio/Public/statics/aceadmin/js/typeahead-bs2.min.js"></script> 
    <!--[if lte IE 8]>
    <script src="/oviio/Public/statics/aceadmin/js/excanvas.min.js"></script>
    <![endif]-->

    <script src="/oviio/Public/statics/aceadmin/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/oviio/Public/statics/aceadmin/js/jquery.ui.touch-punch.min.js"></script>
    <script src="/oviio/Public/statics/aceadmin/js/jquery.slimscroll.min.js"></script>
    <script src="/oviio/Public/statics/aceadmin/js/jquery.easy-pie-chart.min.js"></script>
    <script src="/oviio/Public/statics/aceadmin/js/jquery.sparkline.min.js"></script>
    <script src="/oviio/Public/statics/aceadmin/js/flot/jquery.flot.min.js"></script>
    <script src="/oviio/Public/statics/aceadmin/js/flot/jquery.flot.pie.min.js"></script>
    <script src="/oviio/Public/statics/aceadmin/js/flot/jquery.flot.resize.min.js"></script>
    <script src="/oviio/Public/statics/aceadmin/js/ace-elements.min.js"></script>
    <script src="/oviio/Public/statics/aceadmin/js/ace.min.js"></script>
    <script src="/oviio/Public/statics/js/base.js"></script>
    <!--ADD-->
    <script src="/oviio/Public/statics/layer/layer.js"></script>
<script src="/oviio/Public/statics/layer/extend/layer.ext.js"></script>        
    <script src="/oviio/Public/statics/js/jquery-form.js"></script>
    <script src="/oviio/Public/statics/js/common.js"></script>
    <script>
        $(function(){
            
            var pathname = window.location.pathname;

            $("li a").each(function () {
                var href = $(this).attr("href");
                if (pathname == href) {
                    $(this).parents("ul").parent("li").addClass("active");
                    $(this).parent("li").addClass("active");
                }
            });
        });
    </script>




</body>
</html>