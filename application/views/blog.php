 <section class="container overflow-hidden py-5">
        <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">

            <!-- Start Recent Work -->
            <?php 
                  foreach($list_article as $list_article){ ?>
             <div class="col-xl-6 col-md-4 col-sm-6 project ui branding">
                <a href="<?php echo base_url(); ?>article_detail/<?php echo strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '.', $list_article['slug_article']))); ?>" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="<?php echo base_url(); ?>assets/foto/<?php echo $list_article['foto']; ?>" width="400" height="400" alt="Card image">
                    <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                        <div class="service-work-content text-left text-light">
                            <span class="btn btn-outline-danger rounded-pill mb-lg-3 px-lg-4 light-300"><strong><?php echo word_limiter($list_article['title'],5); ?></strong></span>
                            <p class="card-text"><!-- <?php echo word_limiter($list_article['description'],5); ?> -->
                             <br>
                              <small><?php echo $list_article['date_post']; ?></small>
                            </p> 
                        </div>

                    </div>
                </a>

            </div><!-- End Recent Work -->
            <?php } ?>
            
        </div>
    </section>
     <div class="row">
            <div class="col-lg-12">
                <div class="page-navigation-wrap mt-4">
                    <div class="page-navigation mx-auto">
                       
                        <ul class="page-navigation-nav">
                          
<?php echo $pagination; ?>
                        </ul>
                       
                    </div>
                </div><!-- end page-navigation-wrap -->
            </div>