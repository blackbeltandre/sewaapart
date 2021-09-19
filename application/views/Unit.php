<div class="inside-banner">
  <?php if(!empty($show_room_category_detail)){ ?>
  <div class="container"> 
      <?php
      foreach($show_room_category_detail as $detail) ?>
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
<div class="col-lg-12 col-sm-12">
<div class="row">
 <?php foreach($show_room_category_detail as $show_room_category_detail){ ?>
     <!-- properties -->
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="<?php echo base_url(); ?>/assets/foto/<?php echo $show_room_category_detail["foto"];?>" class="img-responsive" alt="properties">
          <div class="status sold"><?php echo $show_room_category_detail["author"];?></div>
        </div>
        <h4><a href="<?php echo base_url(); ?>unit/detail/<?php echo $show_room_category_detail["id_gallery"];?>/<?php echo $show_room_category_detail["id_category"];?>"><?php  $titlenya = strtoupper($show_room_category_detail["title"]);
          echo trim(ucwords(word_limiter($titlenya,4)));?></a></h4>
        <p class="price"><?php echo $show_room_category_detail["date_post"];?></p>
        <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="x dilihat"><?php echo $show_room_category_detail["counter"];?> </span> </div>
        <a class="btn btn-primary" href="<?php echo base_url(); ?>unit/detail/<?php echo $show_room_category_detail["id_gallery"];?>/<?php echo $show_room_category_detail["id_category"];?>">View Details</a>
      </div>
      </div>
    <?php }?>
     <br>
     <br>

</div>
</div>
 <?php echo $pagination; ?>
</div>
</div>
</div>

