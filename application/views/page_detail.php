<!-- banner -->
<div class="inside-banner">

       <?php if(!empty($page_detail)){ ?>
  <div class="container"> 
      <?php
      foreach($page_detail as $detail) ?>
    <span class="pull-right"><a href="<?php echo base_url(); ?>"><?php if(get_cookie('lang_is') === 'in'){ ?>
                    Home
                    <?php }else{ ?>
                     
                     Beranda
                  <?php } ?></a> / <?php echo $detail["title"];?></span>
    <h2><?php echo $detail["title"];?> </h2>
</div>
<?php }else{ ?>
 <div class="container"> 
    <span class="pull-right"><a href="<?php echo base_url(); ?>"><?php if(get_cookie('lang_is') === 'in'){ ?>
                    Home

                    <?php }else{ ?>
                     Beranda
                  <?php } ?></a></span>
    <h2><?php if(get_cookie('lang_is') === 'in'){ ?>
                    Content Not Found
                    <?php }else{ ?>
                     
                     Content Tidak Ditemukan
                  <?php } ?></h2>
</div>
  <?php } ?>
</div>
<!-- banner -->


<div class="container">
<div class="properties-listing spacer">
<div class="row">
<div class="col-lg-12 col-sm-12 ">

<?php
   foreach($page_detail as $page_detail){ ?>
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                  
                   <!--  <h2 class="feature-work-heading h2 py-3 semi-bold-600"><?php echo $page_detail['title'];?></h2> -->
                  
                    <p class="feature-work-footer text-muted light-300"><?php echo $page_detail['description'];?></p>
                    
                      <p class="feature-work-body text-muted light-300">
                     Publisher : <?php echo $page_detail['author'];?> at <?php echo $page_detail['date_post'];?> | visited   <?php echo $page_detail['counter'];?> *<i class="bx-fw bx bx-user bx-xs"></i>
                    </p>
                </div>
                <div class="col-lg-6 offset-lg-1 align-left">
                    <div class="row"><img src="<?php echo base_url(); ?>assets/foto/<?php echo $page_detail["foto"]; ?>" alt="" onError="this.onerror=null;this.src='<?php echo base_url();?>assets/foto/foto.png';" class="img-responsive">
                          </div>
                    
                </div>
            </div>
        </div>
    <?php }?>
            </div>
        </div>
        </div>
        </div>
