<!DOCTYPE html>
<HTML>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">    <title>@yield('title')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

    {!!  HTML::style('assets/css/css.css') !!}
    {!!  HTML::style('assets/css/bootstrap.css') !!}
    {!!  HTML::style('assets/css/bootstrap-theme.css') !!}
    {!!  HTML::script('assets/js/bootstrap.js') !!}
<script>
    $(document).ready(function() {
        $(".dropdown-toggle").dropdown();
    });
</script>
</head>

<body style="font-family: Homa">

<div class="" style="width:100%; height:250px ; background:url('assets/img/header2.jpg');    background-size: cover; ">

    <div   style="width:80%; height:100%;  float: left;">

        <div class="jumbotron" style="text-align: right;background: transparent">
            <h1>پخش دارو پاسارگاد</h1>
            <p>بزرگترین پخش دارو در جنوب کشور</p>
        </div>


    </div>


    <div style="width: 20%; height:100%;  float: right;">
        <img src="assets/img/logo.png" alt="Cinque Terre" width="200" height="200" style="display: block;margin-left: auto;margin-right: auto;margin-top: 10px; ">
    </div>

</div>

<nav class="navbar navbar-default" style="margin-bottom: 0px;">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <!--
                            <a class="navbar-brand navbar-right" href="#">��� ���� ���?� ���� ����ѐ��</a>
            -->


            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">درباره شرکت<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">بیشتر بدانید
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                    </ul>
                </li>
                <li><a href="#">تماس با ما</a></li>
                <li><a href="#">تامین کنندگان</a></li>
                <li><a href="#">مراکز پخش</a></li>
                <li><a href="#">معرفی شرکت</a></li>
                <li class="active"><a href="#">صفحه نخست<span class="sr-only">(current)</span></a></li>
            </ul>


        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<div style="width:100%; display: table; background: #e2e2e2">

    <div   class="sidebar" id="sidebar" >

        {{--<div  style="margin: 10px 10px 0px 10px; background: #e2e1e0; border-radius: 5px 5px 0px 0px; text-align: center; padding: 5px;">main menu</div>--}}


        <div class="main_menu_item firstitem" >چشم انداز<i class="material-icons" >keyboard_arrow_left</i></div>
        <div class="main_menu_item" >جوایز<i class="material-icons">keyboard_arrow_left</i></div>
        <div class="main_menu_item" >راهبرد ها<i class="material-icons">keyboard_arrow_left</i></div>
        <div class="main_menu_item" >گالری تصاویر<i class="material-icons">keyboard_arrow_left</i></div>
        <div class="main_menu_item" >آگهی ها<i class="material-icons">keyboard_arrow_left</i></div>




    </div>



    <div class="mainbar">
        
        <div class="maincontent" >
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرا            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرا            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا             مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرا            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرا            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا             مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرا            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرا            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد
            مطالب اصلی سایت اینجا قرار میگیرد

        </div>

    </div>

</div>

<div style="width:100%; height:100px ; background: #ff45a0">footer</div>


<?php
/**
 * Created by PhpStorm.
 * User: Ali
 * Date: 11/3/2015
 * Time: 10:46 AM
 */
?>
</body>
</HTML>
