<!DOCTYPE html>
<html lang="en">
<head>
   <?php if(!empty($unit_detail)){ ?>
      <?php
      foreach($unit_detail as $detail) ?>
        <title><?php $kategori = $detail["category"]; 
        echo ucwords(trim($kategori)); ?> Apartemen Kalibata City, <?php $judul = $detail["title"];
      echo ucwords(trim($judul));?></title>
        <?php }else{ ?>
<title>Jual Beli dan Sewa Apartemen Harian ,Mingguan & Bulanan Di Apartemen Kalibata City Jakarta ,Indonesia </title>
  <?php } ?>

 <meta name="description" content="Jual Beli dan Sewa Apartemen Harian ,Mingguan & Bulanan Di Apartemen Kalibata City Jakarta ,Indonesia.">
  <meta name="author" content="Jual ,Beli ,Sewa Apartemen Kalibata City">
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
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/desain/assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/desain/assets/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url(); ?>/desain/assets/bootstrap/js/bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>/desain/assets/script.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<script type="text/javascript">
        $(function(){
            $('.nav a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
            $('.nav a').click(function(){
                $(this).parent().addClass('active').siblings().removeClass('active')    
            })
        })
        </script>
<style>
ul.nav  a { cursor: pointer; }
.active { color:#f00;font-weight:bolder; }
</style>
<!-- Owl stylesheet -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/desain/assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/desain/assets/owl-carousel/owl.theme.css">
<script src="<?php echo base_url(); ?>/desain/assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/desain/assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/desain/assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>/desain/assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/desain/assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/desain/assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

</head>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
.top{
  position: fixed;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: transparent;
  bottom: 100px;
  right: 50px;
  text-decoration: none;
  text-align: center;
  line-height: 50px;
  color:#ffffff;
  z-index: 99;
  border: none;
  outline: none;
  color: white;
  cursor: pointer;
  padding: 15px;
}
.fa-chevron-circle-up{font-size: 30px;line-height: 50px;color:#fff;}
  </style>
<button onclick="topFunction()" id="top" title="Go to top" class="top"><i class="fas fa-chevron-circle-up"></i></button>
<script>
var mybutton = document.getElementById("top");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 60 || document.documentElement.scrollTop >60) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="<?php echo base_url(); ?>"><?php if(get_cookie('lang_is') === 'in'){ ?>
  Beranda
  <?php }else{ ?>
    Home
<?php } ?></a></li>
               <?php foreach($menu as $menu){ 
                          $menu_page = strtolower($menu["page"]);?> 
                            <li >
                            <a  href="<?php echo base_url(); ?>company/<?php echo strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '.', $menu['slug_sub_page']))); ?>"><?php echo ucwords($menu_page); ?></a>
                        </li><?php } ?>


                         <?php foreach($room_category as $room){ 
                                     ?> 
                <li>
                    <a  href="<?php echo base_url(); ?>unit/<?php echo $room['id_category']; ?>"><?php echo ucwords($room['category']); ?></a>
                        </li>
                       
                        <?php } ?>
            <li><a href="<?php echo base_url(); ?>contact">
              <?php if(get_cookie('lang_is') === 'in'){ ?>
  Bukutamu
  <?php }else{ ?>
    Contact
<?php } ?></a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>/desain/images/logo.png" alt="Realestate"></a>

              <ul class="pull-right">
                 <?php if(get_cookie('lang_is') === 'in'){ ?>
                <li>
                                  <form action="<?php echo base_url('lang_setter/set_to/english');?>" method="post">
                                  <select name='dropdown' onchange='this.form.submit()' class="btn-default">
                                  <option value="ID">Indonesia</option>
                                  <option value="EN">English</option>
                                  </select>
                                      <noscript><input type="submit" value="Submit"/></noscript></li>
                                      <?php }else{ ?>
                                         <li><form action="<?php echo base_url('lang_setter/set_to/indonesia');?>" method="post">
                                  <select name='dropdown' onchange='this.form.submit()' class="btn-default">
                                  <option value="EN">English</option>
                                  <option value="ID">Indonesia</option>
                                  </select>
                                  </form>
                                  </li>
                                   <?php } ?>
              </ul>
</div>
<!-- #Header Starts -->
</div>



<div class="">
    


       

      </div><!-- /slider-wrapper -->
</div>

<a class="wabutton" target="_blank" href="https://api.whatsapp.com/send?phone=081263922606&text=Hi,saya ingin memesan room ? https://sewajualapart.com"><img title="custom-chat-whatsaap-button" src="<?php echo base_url(); ?>assets/wa_chat.png" alt="Whatsapp Chat" width="40" height="40" /></a>
<style>
.wabutton{
width:110px;
height:70px;
position:fixed;
bottom:25px;
left:40px;
z-index:100;
}
</style>

<?php $this->load->view($main);?>
<div class="footer">
<div class="container">
<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>
                   <?php if(get_cookie('lang_is') === 'in'){ ?>
                    Navigasi
                    <?php }else{ ?>
                      Resources
                  <?php } ?>
                  </h4>
                   <ul class="row">
                    
                <?php foreach($mobile_menu as $mobile_menu){ 
                          $mobile_menu_page = strtolower($mobile_menu["page"]);?> 
                           <li class="col-lg-12 col-sm-12 col-xs-3">
                            <a  href="<?php echo base_url(); ?>company/<?php echo strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '.', $mobile_menu['slug_sub_page']))); ?>"><font color="gray"><?php echo ucwords($mobile_menu_page); ?></font></a>
                        </li> <?php } ?>
                         <?php foreach($mobile_room_category as $mobile_room_category){ 
                                     ?> 
                <li class="col-lg-12 col-sm-12 col-xs-3">
                    <a  href="<?php echo base_url(); ?>unit/<?php echo  $mobile_room_category['id_category']; ?>"><font color="gray"><?php echo ucwords($mobile_room_category['category']); ?></font></a>
                        </li>
                       
                        <?php } ?>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="<?php echo base_url(); ?>contact"><a href="<?php echo base_url(); ?>contact"><font color="gray">
              <?php if(get_cookie('lang_is') === 'in'){ ?>
  Bukutamu
  <?php }else{ ?>
    Contact
<?php } ?></font></a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>
                     <?php if(get_cookie('lang_is') === 'in'){ ?>
                    Lokasi Kami
                    <?php }else{ ?>
                      Our Location 
                  <?php } ?>
                </h4>
                   <p><b>Apartemen Kalibata City, Tower Jasmine, Rawajati,</b><br>
<span class="glyphicon glyphicon-map-marker"></span> 12740  Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta,Indonesia <br>
            </div>
            
          <div class="col-lg-3 col-sm-3">
                    <h4><?php if(get_cookie('lang_is') === 'in'){ ?>
                    Bagikan
                    <?php }else{ ?>
                      Share 
                  <?php } ?>
                 </h4>
                    <?php 
                  $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                                  "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  
                                  $_SERVER['REQUEST_URI']; 
                    //echo $link;
                  ?> 
                 
                 <a href="http://www.facebook.com/share.php?u=<?php echo $link; ?>" target="_blank">
                <img title="custom-fb-share" src="<?php echo base_url(); ?>assets/facebook.png" alt="" width="40" height="40" /></a>
                &nbsp;&nbsp;
                <a href="http://twitter.com/intent/tweet?url=<?php echo $link; ?>&amp;text=Jual ,Beli ,Sewa Apartemen Kalibata City&amp;hashtags=Jual ,Beli ,Sewa Apartemen Kalibata City" target="_blank">
                <img title="custom-twitter-button" src="<?php echo base_url(); ?>assets/twitter.png" alt="" width="40" height="40" />
                &nbsp;&nbsp;
                <a target="_blank" href="mailto:info@sewajualapart.com?subject=Jual ,Beli ,Sewa Apartemen Kalibata City&body=<?php echo $link; ?>"><img title="custom-email-button" src="<?php echo base_url(); ?>assets/email.png" alt="" width="50" height="45" /></a>
                &nbsp;&nbsp;<a target="_blank" href="whatsapp://send?text=<?php echo $link; ?>"><img title="custom-share-whatsaap-button" src="<?php echo base_url(); ?>assets/whatsapp.png" alt="" width="40" height="40" /></a>
            </div>
             <div class="col-lg-3 col-sm-3">
                    <h4><?php if(get_cookie('lang_is') === 'in'){ ?>
                    Kontak Kami
                    <?php }else{ ?>
                      Contact Us 
                  <?php } ?>
               </h4>
<span class="glyphicon glyphicon-envelope"></span> info@sewajualapart.com<br>
<span class="glyphicon glyphicon-earphone"></span> 081 263 922 606</p>
            </div>
        </div>
<p class="copyright">© Sewa Jual Apart <?php echo date("Y"); ?>. All Rights Reserved </p>
</div></div>
</body>
</html>


