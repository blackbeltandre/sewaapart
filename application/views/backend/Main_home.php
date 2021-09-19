<?php 

 if($this->session->userdata('isLogin') == FALSE || $pengguna->level_login !=1)
    {
      redirect('backend/login/login_form'); 

}
      ?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Jual Beli dan Sewa Apartemen Harian ,Mingguan & Bulanan Di Apartemen Kalibata City Jakarta ,Indonesia.">
  <meta name="author" content="PT.Payung Anak Bangsa">
<meta name="description" content="Jual Beli dan Sewa Apartemen Harian ,Mingguan & Bulanan Di Apartemen Kalibata City Jakarta ,Indonesia">
<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="Jual Beli dan Sewa Apartemen Harian ,Mingguan & Bulanan Di Apartemen Kalibata City Jakarta ,Indonesia.">
<meta itemprop="description" content="Dapatkan Hunian Apartemen Terbaik Di Jakarta Selatan ,Dengan Akses Terbaik Ke Semua Wilayah Jakarta">
<meta itemprop="image" content="<?php echo base_url(); ?>assets/foto/icon.png">
<!-- Facebook Meta Tags -->
<meta property="og:url" content="https://sewajualapart.com">
<meta property="og:type" content="Jual Beli dan Sewa Apartemen Harian ,Mingguan & Bulanan Di Apartemen Kalibata City Jakarta ,Indonesia.">
<meta property="og:title" content="Dapatkan Hunian Apartemen Terbaik Di Jakarta Selatan ,Dengan Akses Terbaik Ke Semua Wilayah Jakarta">
<meta property="og:description" content="Dapatkan Hunian Apartemen Terbaik Di Jakarta Selatan ,Dengan Akses Terbaik Ke Semua Wilayah Jakarta">
<meta property="og:image" content="<?php echo base_url(); ?>assets/foto/icon.png">
<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="Jual Beli dan Sewa Apartemen Harian ,Mingguan & Bulanan Di Apartemen Kalibata City Jakarta ,Indonesia.">
<meta name="twitter:title" content="Jual Beli dan Sewa Apartemen Harian ,Mingguan & Bulanan Di Apartemen Kalibata City Jakarta ,Indonesia.">
<meta name="twitter:description" content="Jual Beli dan Sewa Apartemen Harian ,Mingguan & Bulanan Di Apartemen Kalibata City Jakarta ,Indonesia.">
<meta name="twitter:image" content="<?php echo base_url(); ?>assets/foto/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/desain_backend/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/desain_backend/assets/css/loader-style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/desain_backend/assets/css/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/desain_backend/assets/js/progress-bar/number-pb.css">
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript">
        $(window).load(function() { $("#loading").fadeOut("slow"); })
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/foto/icon.png">
<style>
#Back-to-top {
    text-align: center;
    z-index: 9999;
    position: fixed;
    bottom: 40px;
    right: 30px;
    cursor: pointer;
    display: none;
    opacity: 0.7; 
    }
#Back-to-top:hover {
    opacity: 1;
    }
  #loading {
position: fixed;
  left: 0px;
    top: 0px;
      width: 100%;
        height: 100%;
z-index: 9999;
   background: url(<?php echo base_url('assets/foto/loading.gif'); ?>) 50% 50% no-repeat #fff;
    }
     }
</style> 

</head>

<body>
     <div id="loading"></div>
    </div>
    <nav role="navigation" class="navbar navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="entypo-menu"></span>
                </button>
                <button class="navbar-toggle toggle-menu-mobile toggle-left" type="button">
                </button>

                <div id="logo-mobile" class="visible-xs">
                   <h1 color:="" ff0000="" font:=""><a href="<?php echo base_url("backend/home"); ?>"><font size="3" color="white" > <strong>sewajualapart.com <strong></font></a>
               <!--  <span>v1.0</span> -->
            </h1>
                </div>
            </div>
            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <div id="nt-title-container" class="navbar-left running-text visible-lg">
                    <ul class="date-top">
                        <li class="entypo-calendar" style="margin-right:5px"></li>
                      <li ><?php
                    $tgl=date('l, d-m-Y');
                    echo $tgl;
                    ?></li>
                    </ul>

                    <ul id="digital-clock" class="digital">
                        <li class="entypo-clock" style="margin-right:5px"></li>
                        <li id='jam'><script type="text/javascript">
                    window.setTimeout("waktu()",1000);  
                    function waktu() {   
                    var tanggal = new Date();  
                    setTimeout("waktu()",1000);  
                    document.getElementById("jam").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
                    }
                    </script></li>
                    </ul>
                    
                </div>

                <ul style="margin-right:0;" class="nav navbar-nav navbar-right">
                    <li>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img class="admin-pic img-circle" src="<?php echo base_url(); ?>assets/foto/<?php echo $pengguna->foto; ?>" alt="<?php echo $pengguna->foto; ?>" onError="this.onerror=null;this.src='<?php echo base_url();?>assets/foto/no_photo.png';"><?php echo strtoupper($pengguna->name); ?> <b class="caret"></b>
                        </a>
                        <ul style="margin-top:14px;" role="menu" class="dropdown-setting dropdown-menu">
                            <li>
                                <a href="#">
                                    <span class="entypo-user"></span>&#160;&#160;My Profile</a>
                            </li>
                          
                            <li>
                                <form action="<?php echo base_url(); ?>backend/login/logout" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="username" value="<?php echo $pengguna->username; ?>" ?>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="entypo-logout"></i>&#160;&#160;<input class="btn btn-primary " type="submit" value="Logout">
                                    </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- /END OF TOP NAVBAR -->

    <!-- SIDE MENU -->
    <div id="skin-select">
        <div id="logo">
           <h1 color:="" ff0000="" font:=""><a href="<?php echo base_url("backend/home"); ?>"><font size="3" color="white" > <strong>sewajualapart.com <strong></font></a>
               <!--  <span>v1.0</span> -->
            </h1>
        </div>

        <a id="toggle">
            <span class="entypo-menu"></span>
        </a>
        <div class="skin-part">
            <div id="tree-wrap">
                <div class="side-bar">
                    <ul class="topnav menu-left-nest">
                        <li>
                            <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                                <span class="widget-menu"></span>
                                <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                            </a>
                        </li>
                         <li>
                            <a class="tooltip-tip ajax-load" href="<?php echo base_url("backend/home"); ?>" title="Dashboard">
                                <i class="icon-window"></i>
                                <span>Dashboard</span>

                            </a>
                        </li>
                        <!-- <li>
                            <a class="tooltip-tip ajax-load" href="#" title="Master Article">
                                <i class="icon-document-edit"></i>
                                <span>Master Article</span>

                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="<?php echo base_url("backend/category_article/cek"); ?>" title="Category Article"><i class="entypo-doc-text"></i><span>Category Article </span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="<?php echo base_url("backend/article/cek"); ?>" title="Article"><i class="entypo-newspaper"></i><span>Article</span></a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a class="tooltip-tip ajax-load" href="#" title="Master Page">
                                <i class="icon-feed"></i>
                                <span>Master Page</span>

                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="<?php echo base_url("backend/page/cek"); ?>" title="Master Page"><i class="icon-media-record"></i><span>Page </span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="<?php echo base_url("backend/sub_page/cek"); ?>" title="Sub Page"><i class="entypo-clock"></i><span>Sub Page</span></a>
                                </li>
                            </ul>
                        </li>
                        
                         <li>
                            <a class="tooltip-tip ajax-load" href="#" title="Master Unit ">
                                <i class="icon-monitor"></i>
                                <span>Master Unit</span>

                            </a>
                            <ul>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="<?php echo base_url("backend/category_gallery/cek"); ?>" title="Category Unit "><i class="icon-media-record"></i><span>Category Unit  </span></a>
                                </li>
                                <li>
                                    <a class="tooltip-tip2 ajax-load" href="<?php echo base_url("backend/gallery/cek"); ?>" title="Unit "><i class="entypo-clock"></i><span>Unit </span></a>
                                </li>
                            </ul>
                        </li>
                       
                        <li>
                            <a class="tooltip-tip ajax-load" href="<?php echo base_url("backend/slide/cek"); ?>" title="Master Slide">
                                <i class="icon-preview"></i>
                                <span>Master Slide</span>
                            </a>
                        </li>
                         <li>
                            <a class="tooltip-tip ajax-load" href="<?php echo base_url("backend/faq/index"); ?>" title="Master Guestbook">
                                <i class="icon-mail"></i>
                                <span>Guestbook</span>
                            </a>
                        </li>

                        <li>
                            <a class="tooltip-tip ajax-load" href="<?php echo base_url("backend/webmaster/cek"); ?>" title="Master User">
                                <i class="icon-user"></i>
                                <span>Master User</span>
                            </a>
                        </li>

                         <li>
                                <form action="<?php echo base_url(); ?>backend/login/logout" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="username" value="<?php echo $pengguna->username; ?>" ?>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="entypo-logout"></i>&#160;&#160;<input class="btn btn-primary " type="submit" value="Logout">
                                    </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            <div class="row">
                <div id="paper-top">
                    <div class="col-sm-3">
                        <h2 class="tittle-content-header">
                            <i class="icon-window"></i> 
                            <span>Dashboard
                            </span>
                        </h2>

                    </div>

                    <div class="col-sm-7">
                        <div class="devider-vertical visible-lg"></div>
                        <div class="tittle-middle-header">

                            <div class="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <span class="tittle-alert entypo-info-circled"></span>
                                Welcome back,&nbsp;
                                <strong><?php echo $pengguna->name; ?>!</strong>&nbsp;&nbsp;Your last sign in at <?php echo $pengguna->latest_session; ?>
                            </div>


                        </div>

                    </div>
                   
            <!--/ TITLE --><!-- BREADCRUMB -->
            <ul id="breadcrumb">
                <li>
                    <span class="entypo-home"></span>
                </li>
                <li><i class="fa fa-lg fa-angle-right"></i>
                </li>
                <li><a href="<?php echo base_url("backend/home"); ?>" title="HOME">HOME</a>
                </li>
                <li><i class="fa fa-lg fa-angle-right"></i>
                </li>
                <li><a title="<?php echo $title; ?>"><?php echo strtoupper($title); ?></a>
                </li>
            </ul>
           <div class="content-wrap">
                <div class="row">
             <div class="col-sm-12"> 
                  <?php $this->load->view($main);?>
             </div>
                </div>
                    </div>
                <!-- /END OF CONTENT -->
                <div id='Back-to-top'>
                <img alt='Scroll to top' src='<?php echo base_url(); ?>assets/foto/backtotop.png'/>
                </div>
                <!-- FOOTER -->
                <div class="footer-space"></div>
                <div id="footer">
                    <div class="devider-footer-left"></div>
                    <div class="time">
                        <p id="spanDate"></p>
                        <p id="clock"></p>
                    </div>
                    <div class="copyright">© Sewa Jual Apart v1.0 <?php echo date('Y'); ?> Made with
                        <span class="entypo-heart"></span> Powered by PAB Development Team </a> All Rights Reserved</div>
                    <div class="devider-footer"></div>
                </div>
                <!-- / END OF FOOTER -->


            </div>
        </div>
    </div>
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/desain_backend/assets/js/progress-bar/src/jquery.velocity.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/desain_backend/assets/js/progress-bar/number-pb.js"></script>
    <script src="<?php echo base_url(); ?>assets/desain_backend/assets/js/progress-bar/progress-app.js"></script>



    <!-- MAIN EFFECT -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/desain_backend/assets/js/preloader.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/desain_backend/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/desain_backend/assets/js/app.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/desain_backend/assets/js/load.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/desain_backend/assets/js/main.js"></script>




    <!-- GAGE -->



    <script src="<?php echo base_url(); ?>assets/desain_backend/assets/js/jhere-custom.js"></script>
    <script type='text/javascript'>
$(function() { $(window).scroll(function() {
    if($(this).scrollTop()>400) {
        $('#Back-to-top').fadeIn();
        }
    else { $('#Back-to-top').fadeOut();}
    });
    $('#Back-to-top').click(function() {
        $('body,html')
        .animate({scrollTop:0},300)
        .animate({scrollTop:40},200)
        .animate({scrollTop:0},130)
        .animate({scrollTop:15},100)
        .animate({scrollTop:0},70);
        });
});
</script>
   



</body>

</html>

