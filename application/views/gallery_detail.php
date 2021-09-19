 <?php
   foreach($gallery_detail as $gallery_detail){ ?>
    <section class="bg-light py-5">
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                  
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600"><?php echo $gallery_detail['title'];?></h1>
                  
                    <p class="feature-work-footer text-muted light-300"><?php echo $gallery_detail['description'];?></p>
                    
                      <p class="feature-work-body text-muted light-300">
                     Publisher : <?php echo $gallery_detail['author'];?> at <?php echo $gallery_detail['date_post'];?> | visited   <?php echo $gallery_detail['counter'];?> *<i class="bx-fw bx bx-user bx-xs"></i>
                    </p>
                </div>
                <div class="col-lg-6 offset-lg-1 align-left">
                    <div class="row"><img src="<?php echo base_url(); ?>assets/foto/<?php echo $gallery_detail["foto"]; ?>" alt="" onError="this.onerror=null;this.src='<?php echo base_url();?>assets/foto/foto.png';" class="img-fluid" width="500" height="1000">
                          </div>
                    
                </div>
            </div>
        </div>
    </section>
    <?php }?>