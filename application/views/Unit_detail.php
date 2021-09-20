<!-- banner -->
<div class="inside-banner">
  <?php if(!empty($unit_detail)){ ?>
  <div class="container"> 
      <?php
      foreach($unit_detail as $detail) ?>
    <span class="pull-right"><a href="<?php echo base_url(); ?>"><?php if(get_cookie('lang_is') === 'in'){ ?>
                    Beranda
                    <?php }else{ ?>
                     Home
                  <?php } ?>
                </a> / <?php echo $detail["category"];?></span>
    <h2><?php echo $detail["category"];?> 
  <?php if(get_cookie('lang_is') === 'in'){ ?>
                    Apartemen
                    <?php }else{ ?>
                      Apartment
                  <?php } ?>

                </h2>
</div>
<?php }else{ ?>
 <div class="container"> 
    <span class="pull-right"><a href="<?php echo base_url(); ?>"><?php if(get_cookie('lang_is') === 'in'){ ?>
                    Beranda
                    <?php }else{ ?>
                     Home
                  <?php } ?></a> / Unit</span>
    <h2> <?php if(get_cookie('lang_is') === 'in'){ ?>
                    Unit Tidak Ditemukan
                    <?php }else{ ?>
                      Unit Not Found
                  <?php } ?></h2>
</div>
  <?php } ?>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 hidden-xs">

<div class="hot-properties hidden-xs">
<?php if(!empty($related_unit)){ ?>
<?php
      foreach($related_unit as $related_units) ?>
        <h4><?php if(get_cookie('lang_is') === 'in'){ ?>
                    Unit Lainnya Untuk Di <u><strong><?php echo $related_units["category"];?></strong></u>
                    <?php }else{ ?>
                       Related Unit For <u><strong><?php echo $related_units["category"];?></strong> </u>
                  <?php } ?></h4>
                  <hr>
        <?php
      foreach($related_unit as $related_unit){ ?>
<div class="row">
                <div class="col-lg-4 col-sm-5">
                   <?php  
         $foto_arritem = explode(",",$related_unit["foto"]); 
         $count_arritem = count($foto_arritem)-1;
         for ($fotositem = 0; $fotositem <= 0; $fotositem ++) {
        $final_foto_item = $foto_arritem[$fotositem]; ?>
        <img src="<?php echo base_url(); ?>assets/foto/<?php echo $final_foto_item;?>" class="img-responsive img-circle" />
        <?php } ?>

                </div>
                <div class="col-lg-8 col-sm-7">
                  <h5><a href="<?php echo base_url(); ?>unit/detail/<?php echo $related_unit["id_gallery"];?>/<?php echo $related_unit["id_category"];?>"><font color="black"><span class="glyphicon glyphicon-pencil"></span> <?php echo strtoupper($related_unit["title"]);?></font></a></h5>
                  <p class="price feature-work-body text-muted light-300"><span class="glyphicon glyphicon-calendar"></span> <?php echo $related_unit["date_post"];?></p> </div>
              </div>
<?php }}else{ ?>
   <h4>
   <?php if(get_cookie('lang_is') === 'in'){ ?>
                    Belum Ada Unit Serupa
                    <?php }else{ ?>
                      No Related Unit To Display
                  <?php } ?>
                 </h4>
  <?php } ?>
</div>



<div class="advertisement">
  <?php if(!empty($not_related_unit)){ ?>
<?php
      foreach($not_related_unit as $not_related_units) ?>
        <h4>
          <?php if(get_cookie('lang_is') === 'in'){ ?>
                    Unit Lainnya Untuk Di <strong><u><?php echo $not_related_units["category"];?></u></strong>
                    <?php }else{ ?>
                       Related Unit For <strong><u><?php echo $not_related_units["category"];?></u></strong> 
                  <?php } ?>

                  </h4>
                  <hr>
        <?php
      foreach($not_related_unit as $not_related_unit){ ?>
   <?php  
         $foto_arritem = explode(",",$not_related_unit["foto"]); 
         $count_arritem = count($foto_arritem)-1;
         for ($fotositem = 0; $fotositem <= 0; $fotositem ++) {
        $final_foto_item = $foto_arritem[$fotositem]; ?>
        <img src="<?php echo base_url(); ?>assets/foto/<?php echo $final_foto_item;?>" class="img-responsive" />
        <?php } ?>
  <hr><h5><a href="<?php echo base_url(); ?>unit/detail/<?php echo $not_related_unit["id_gallery"];?>/<?php echo $not_related_unit["id_category"];?>"><font color="black"><span class="glyphicon glyphicon-pencil"> </span> <?php echo strtoupper($not_related_unit["title"]);?></font></a></h5>
                  <p class="price feature-work-body text-muted light-300"><span class="glyphicon glyphicon-calendar"></span> <?php echo $not_related_unit["date_post"];?> </p> 
<?php }}else{ ?>

  <?php } ?></div>

</div>

<div class="col-lg-9 col-sm-8 ">
<?php
      foreach($unit_detail as $details){ ?>
<h2><?php echo strtoupper($details["title"]);?></h2>
<div class="row">
  <div class="col-lg-8">
  <div class="property-images">
    <!-- Slider Starts -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators hidden-xs">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <?php
        $foto_active = explode(",",$details["foto"]); 
         $count_active = count($foto_active)-1;
        for ($fotosactive = 0; $count_active <= 0; $fotosactive ++) {
        $final_foto_active = $foto_active[$fotosactive];
        ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $count_active; ?>" class="active"></li>
      <?php } ?>
      <?php
        $foto_arrnum = explode(",",$details["foto"]); 
         $count_arrnum = count($foto_arrnum)-2;
        for ($fotosnum = 0; $fotosnum <= $count_arrnum; $fotosnum ++) {
        $final_fotosnum = $foto_arrnum[$fotosnum];
        ?>
         <li data-target="#myCarousel" data-slide-to="<?php echo $count_arrnum; ?>" class=""></li>
       <?php } ?>
       </ol>
      <div class="carousel-inner">
        <!-- Item 1 --> 
        <?php
        $foto_arr = explode(",",$details["foto"]); 
         $count_arr = count($foto_arr)-1;
        for ($fotos = 0; $fotos <= 0; $fotos ++) {
        $final_fotos = $foto_arr[$fotos];
        ?>
        <div class="item active">
                  <img src="<?php echo base_url(); ?>assets/foto/<?php echo $final_fotos;?>" class="properties" alt="properties"/>
        </div>
      <?php } ?>
      <?php  
         $foto_arritem = explode(",",$details["foto"]); 
         $count_arritem = count($foto_arritem)-1;
         for ($fotositem = 0; $fotositem <= $count_arritem; $fotositem ++) {
        $final_foto_item = $foto_arritem[$fotositem]; ?>
         <div class="item">
           <img src="<?php echo base_url(); ?>assets/foto/<?php echo $final_foto_item;?>" class="properties" alt="properties"/>
        </div><?php } ?>
        <!-- #Item 1 -->

     
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- #Slider Ends -->
  </div>

  <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Unit Detail</h4>
     <style>
div.gallery {
  margin: 5px;
  float: left;
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 100px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>                     
     <hr>
       <font color="black"><strong>Klik gambar untuk melihat ukuran penuh.</font></strong>

     <?php  
         $foto_arritem = explode(",",$details["foto"]); 
         $count_arritem = count($foto_arritem)-1;
         for ($fotositem = 0; $fotositem <= $count_arritem; $fotositem ++) {
        $final_foto_item = $foto_arritem[$fotositem]; ?>
     <center> 
  <div class="gallery"> 
  <a target="_blank" href="<?php echo base_url(); ?>assets/foto/<?php echo $final_foto_item;?>">
    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $final_foto_item;?>" width="600" height="400" alt="properties"/>
  </a>
</div>
</center><?php } ?>
<br>
<br>
<br>

      <p><?php echo $details["description"];?></p>
     <br><span class="glyphicon glyphicon-read"></span>
 <br><br> Tags :  <ul>
                            <?php
                                $data_tag = explode(",",$details["tags"]); 
                                   $count_tags = count($data_tag)-1;
                                   for ($tags = 0; $tags <= $count_tags; $tags ++) {
                                  ?><li class="btn btn-danger"><span class="glyphicon glyphicon-edit"></span> 
                                      <?php 
                                      $final_tags = strtolower($data_tag[$tags]);
                                     echo ucwords($final_tags); ?></li>
                                 <?php } ?>
                           </ul>
<p class="feature-work-body text-muted light-300">
                     Publisher : <?php echo $details['author'];?> at <?php echo $details['date_post'];?> | visited   <?php echo $details['counter'];?> *<i class="bx-fw bx bx-user bx-xs"></i>
                    </p>
  </div>
  <div><h4><span class="glyphicon glyphicon-map-marker"></span> Location</h4>
<div class="well"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.025479650958!2d106.85233297574!3d-6.257017632629225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f31fd7a4304b%3A0x2d8cf266c5c49280!2sApartemen%20kalibata%20city!5e0!3m2!1sid!2sid!4v1631906160301!5m2!1sid!2sid&amp;output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
  </div>

  </div>
  <div class="col-lg-4">
  <div class="col-lg-12  col-sm-6">
<div class="property-info">
<!-- <p class="price">$ 200,000,000</p> -->
  <p class="area"><span class="glyphicon glyphicon-map-marker"></span>
  <?php if(get_cookie('lang_is') === 'in'){ ?>
                    Lokasi
                    <?php }else{ ?>
                      Location
                  <?php } ?>
                  <br> <strong>DKI Jakarta </strong>,Jakarta Selatan ,<font color="black"><u>Indonesia</u></font></p>
  <div class="profile">
   <hr><span class="glyphicon glyphicon-user"></span>  <?php if(get_cookie('lang_is') === 'in'){ ?>
                    Detail Agen
                    <?php }else{ ?>
                      Agent Detail
                  <?php } ?>

  <p><font color="black"><strong>Jasen Sihite <br><u>081263922606</u></font></strong></p>
  </div>
</div>
 <hr>
    <h6><span class="glyphicon glyphicon-home"></span> <?php if(get_cookie('lang_is') === 'in'){ ?>
                    Bagikan
                    <?php }else{ ?>
                      Share 
                  <?php } ?></h6>
    <div class="listing-detail">
  
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
                &nbsp;&nbsp;<a target="_blank" href="whatsapp://send?text=<?php echo $link; ?>"><img title="custom-share-whatsaap-button" src="<?php echo base_url(); ?>assets/whatsapp.png" alt="" width="40" height="40" /></a> </div>

</div> <hr>
<div class="col-lg-12 col-sm-6 ">
<div class="enquiry">
  <h6><span class="glyphicon glyphicon-envelope"></span> <?php if(get_cookie('lang_is') === 'in'){ ?>
                    Dapatkan Penawaran Terbaik
                    <?php }else{ ?>
                      Get the Best Deals
                  <?php } ?>
                </h6>
  <a class="btn btn-primary" target="_blank" href="https://api.whatsapp.com/send?phone=081263922606&text=Hi,saya ingin memesan room ? https://sewajualapart.com"><?php if(get_cookie('lang_is') === 'in'){ ?>
                    Hubungi Agen
                    <?php }else{ ?>
                      Call Agent
                  <?php } ?>
                </a>
 </div>         
</div>
  </div>
    <?php } ?>

</div>
</div>
</div>
</div>
</div>

