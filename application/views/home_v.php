
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"><!--  <a href="buysalerent.php" class="pull-right viewall">View All Listing</a> -->
    <h2>
    <?php if(get_cookie('lang_is') === 'in'){ ?>
                    All Unit
                    <?php }else{ ?>
                     Semua  Unit
                  <?php } ?>
               </h2>
    <div id="owl-example" class="owl-carousel">
      <?php foreach($show_room_by_cat as $show_room_by_cat){ ?>
      <div class="properties">
        <div class="image-holder">
          <?php  
         $foto_arritem = explode(",",$show_room_by_cat["foto"]); 
         $count_arritem = count($foto_arritem)-1;
         for ($fotositem = 0; $fotositem <= 0; $fotositem ++) {
        $final_foto_item = $foto_arritem[$fotositem]; ?>
        <img src="<?php echo base_url(); ?>assets/foto/<?php echo $final_foto_item;?>" class="img-responsive" />
        <?php } ?>
          <div class="status sold"><?php echo $show_room_by_cat["author"];?></div>
        </div>
        <h4><a href="<?php echo base_url(); ?>unit/detail/<?php echo $show_room_by_cat["id_gallery"];?>/<?php echo $show_room_by_cat["id_category"];?>"><?php 
         $titlenya = strtoupper($show_room_by_cat["title"]);
          echo trim(ucwords($titlenya));?></a></h4>
        <p class="price"><?php echo $show_room_by_cat["date_post"];?></p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="x dilihat"><?php echo $show_room_by_cat["counter"];?></span> </div>
        <a class="btn btn-primary" href="<?php echo base_url(); ?>unit/detail/<?php echo $show_room_by_cat["id_gallery"];?>/<?php echo $show_room_by_cat["id_category"];?>">
        <?php if(get_cookie('lang_is') === 'in'){ ?>
                    View Detail
                    <?php }else{ ?>
                      Lihat Detail
                  <?php } ?>
                </a></div>
     <?php } ?>
  </div>
  <div class="spacer">
    <div class="row">
      <div class="col-lg-6 col-sm-9 recent-view">

   
<?php
   foreach($about as $about){ ?>
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                  <h3><?php echo $about['title'];?></h3>
                  
                    <p class="feature-work-footer text-muted light-300"><?php echo $about['description'];?></p>
                    
                      <p class="feature-work-body text-muted light-300">
                     Publisher : <?php echo $about['author'];?> at <?php echo $about['date_post'];?> | visited   <?php echo $about['counter'];?> *<i class="bx-fw bx bx-user bx-xs"></i>
                    </p>
                </div>
                <div class="col-lg-6 offset-lg-1 align-left">
                    <div class="row"><img src="<?php echo base_url(); ?>assets/foto/<?php echo $about["foto"]; ?>" alt="" onError="this.onerror=null;this.src='<?php echo base_url();?>assets/foto/foto.png';" class="img-responsive">
                          </div>
                    
                </div>
            </div>
        </div>
    <?php }?>
      
      </div>
     
      </div>
    </div>
  </div>
</div>