<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>添加管理员</title>
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
    
        <link rel="stylesheet" href="/oviio/Public/statics/iCheck-1.0.2/skins/all.css">

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
    <style>
        .tishi{
            color: red;
        }
    </style>
    <!-- 导航栏开始 -->
    <div class="page-header">
        <h1>
            <i class="fa fa-home"></i> 首页
            &gt;
            权限管理
            &gt;
            添加管理员
        </h1>
    </div>
    <div class="col-xs-12">
        <div class="tabbable">
            <ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab">
                <li>
                    <a href="<?php echo U('Admin/Customer/index');?>">客户列表</a>
                </li>
                <li class="active">
                    <a href="<?php echo U('Admin/Customer/add');?>">添加客户</a>
                </li>
            </ul>
            <div class="tab-content">
                <form class="form-inline" method="post">
                    <table class="table table-striped table-bordered table-hover table-condensed">

                        <tr>
                            <th>客户姓名</th>
                            <td>
                                <input class="input-medium" type="text" name="name" id="name" onfocus="showTips('name','客户姓名必须填！')" onblur="checkuser('name','客户姓名不能为空')">
                                <span id="namespan"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>联系电话</th>
                            <td>
                                <input class="input-medium" type="text" name="phone" id="phone" onfocus="showTips('phone','联系电话必须填！')" onblur="checkphone('phone','联系电话不能为空')">
                                <span id="phonespan"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>所在城市</th>
                            <td>
                                <select name="province_id" id="province_id" style="width:150px;">
                                    <option>请选择</option>
                                    <?php if(is_array($province_list)): $i = 0; $__LIST__ = $province_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$province): $mod = ($i % 2 );++$i;?><option  value="<?php echo ($province["region_id"]); ?>"><?php echo ($province["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                <select name="city_id"  id="city_id" style="width:150px;" >
                                    <option>请选择</option>
                                    <?php if(is_array($city_list)): $i = 0; $__LIST__ = $city_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$city): $mod = ($i % 2 );++$i;?><option value="<?php echo ($city["region_id"]); ?>" selected="selected"><?php echo ($city["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                <select name="district_id"  id="district_id" style="width:150px;" >
                                    <option value="0">请选择</option>
                                    <?php if(is_array($dis_list)): $i = 0; $__LIST__ = $dis_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dis): $mod = ($i % 2 );++$i;?><option value="<?php echo ($dis["region_id"]); ?>" selected="selected"><?php echo ($dis["region_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>电子邮箱</th>
                            <td>
                                <input class="input-medium" type="email" name="email" id="email" onfocus="showTips('email','电子邮箱必须填！')" onblur="checkemail('email','电子邮箱不能为空')">
                                <span id="emailspan"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>车牌号码</th>
                            <td>
                                <input class="input-medium" type="text" name="car_id" id="car_id" onfocus="showTips('car_id','车牌号码必须填！')" onblur="checkcar('car_id','车牌号码不能为空')">
                                <span id="car_idspan"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>汽车品牌</th>
                            <td>
                                <select name="banner_id" id="banner_id" style="width:150px;">
                                    <option>请选择</option>
                                    <?php if(is_array($banner_list)): $i = 0; $__LIST__ = $banner_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$banner): $mod = ($i % 2 );++$i;?><option  value="<?php echo ($banner["id"]); ?>"><?php echo ($banner["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <th>型号</th>
                            <td>
                                <input class="input-medium" type="text" name="type" id="type" onfocus="showTips('type','汽车型号必须填！')" onblur="checkuser('type','汽车型号不能为空')">
                                <span id="typespan"></span>
                            </td>
                        </tr>
                        <tr>
                            <th>生产日期</th>
                            <td>
                                <input class="input-medium" type="text" name="data">
                            </td>
                        </tr>
                        <tr>
                            <th>车架号</th>
                            <td>
                                <input class="input-medium" type="text" name="vin" id="vin" onfocus="showTips('vin','车架号必须填！')" onblur="checkuser('vin','车架号不能为空')">
                                <span id="vinspan"></span>
                            </td>
                        </tr>


                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-success" type="submit" value="添加">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
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


    <script src="/oviio/Public/statics/iCheck-1.0.2/icheck.min.js"></script>
<script>
$(document).ready(function(){
    $('.xb-icheck').iCheck({
        checkboxClass: "icheckbox_minimal-blue",
        radioClass: "iradio_minimal-blue",
        increaseArea: "20%"
    });
});
</script>
    <script>

        $("#province_id").change(function(){

            var province_id=$(this).val();
            $.ajax({
                url:"<?php echo U('Admin/Customer/get_city');?>",
                Type:"GET",
                data:{'province_id':province_id},
                dataType:"json",
                success:function(data){
                    var city = data.city;
                    var option=$("<option></option>");
                    $(option).val("0");
                    $(option).html("请选择");
                    var option1=$("<option></option>");
                    $(option1).val("0");
                    $(option1).html("请选择");
                    $("#city_id").html(option);
                    $("#district_id").html(option1);
                    for(var i in city){
                        var option=$("<option></option>");
                        $(option).val(city[i]['region_id']);
                        $(option).html(city[i]['region_name']);
                        $("#city_id").append(option);
                    }
                }

            });
        });
    </script>
    <script>
        $("#city_id").change(function(){
            var city_id=$(this).val();
            $.ajax({
                url:"<?php echo U('Admin/Customer/get_district');?>",
                Type:"POST",
                data:{"city_id":city_id},
                dataType:"json",
                success:function(data){
                    var district = data.district;
                    var option=$("<option></option>");
                    $(option).val("0");
                    $(option).html("请选择");
                    $("#district_id").html(option);
                    for(var i in district){
                        var option=$("<option></option>");
                        $(option).val(district[i]['region_id']);
                        $(option).html(district[i]['region_name']);
                        $("#district_id").append(option);
                    }
                }
            });
        });
    </script>
    <script>
        function showTips(id,info){
            document.getElementById(id+"span").innerHTML="<font color='red'>*"+info+"</font>"
        }

        function checkuser(id,info){
            //1.获取用户输入的用户名数据
            var uValue=document.getElementById(id).value;
            //2.进行效验
            if(uValue==""){
                document.getElementById(id+"span").innerHTML="<font color='red'>*"+info+"</font>"
            }else{
                document.getElementById(id+"span").innerHTML=""
            }
        }

        function checkphone(id,info){
            //1.获取用户输入的用户名数据
            var uValue=document.getElementById(id).value;
            var reg = /^1[3|4|5|8][0-9]\d{4,8}$/;
            //2.进行效验
            if(uValue==""){
                document.getElementById(id+"span").innerHTML="<font color='red'>*"+info+"</font>"
            }else if(!(reg.test(uValue))){
                document.getElementById(id+"span").innerHTML="<font color='red'>*请输入正确的手机号</font>"
            }
            else{
                document.getElementById(id+"span").innerHTML=""
            }
        }

        function checkemail(id,info){
            //1.获取用户输入的电子邮箱数据
            var uValue=document.getElementById(id).value;
            var reg =  /^\w+\@+[0-9a-zA-Z]+\.(com|com.cn|edu|hk|cn|net)$/;
            //2.进行效验
            if(uValue==""){
                document.getElementById(id+"span").innerHTML="<font color='red'>*"+info+"</font>"
            }else if(!(reg.test(uValue))){
                document.getElementById(id+"span").innerHTML="<font color='red'>*请输入正确的电子邮箱</font>"
            }
            else{
                document.getElementById(id+"span").innerHTML=""
            }
        }
        
        function checkcar(id,info){
            //1.获取用户输入的车牌号码数据
            var uValue=document.getElementById(id).value;
            var xreg=/^[京津沪渝冀豫云辽黑湘皖鲁新苏浙赣鄂桂甘晋蒙陕吉闽贵粤青藏川宁琼使领A-Z]{1}[A-Z]{1}(([0-9]{5}[DF]$)|([DF][A-HJ-NP-Z0-9][0-9]{4}$))/;

            var creg=/^[京津沪渝冀豫云辽黑湘皖鲁新苏浙赣鄂桂甘晋蒙陕吉闽贵粤青藏川宁琼使领A-Z]{1}[A-Z]{1}[A-HJ-NP-Z0-9]{4}[A-HJ-NP-Z0-9挂学警港澳]{1}$/;
            //2.进行效验
            if(uValue==""){
                document.getElementById(id+"span").innerHTML="<font color='red'>*"+info+"</font>"
            }else if((uValue.length == 7 && creg.test(uValue))||(uValue.length == 8 && xreg.test(uValue))){
                document.getElementById(id+"span").innerHTML=""
            }
            else{
                document.getElementById(id+"span").innerHTML="<font color='red'>*请输入正确的车牌号</font>"
            }

        }


    </script>

</body>
</html>