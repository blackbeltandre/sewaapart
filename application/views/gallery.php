<section class="py-5 mb-5">
        <div class="container">
            <div class="recent-work-header row text-center pb-5">
                <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Our Product</h2>
            </div>
            <div class="row gy-5 g-lg-5 mb-4">

                <!-- Start Recent Work -->
                   <?php foreach($list_gallery as $list_gallery){ ?>
                  <div class="col-md-4 mb-3">
                    <a href="<?php echo base_url(); ?>product_detail/<?php echo strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '.', $list_gallery['slug_gallery']))); ?>" class="recent-work card border-5 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="<?php echo base_url(); ?>assets/foto/<?php echo $list_gallery['foto']; ?>" width="400" height="400" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-light">
                                <h3 class="card-title btn btn-outline-danger text-dark rounded-pill btn-block shadow px-4 py-2"><center><?php echo $list_gallery['title']; ?></center></h3><hr>
                                <p class="card-text text-dark "><?php echo $list_gallery['date_post']; ?></p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
              <?php } ?>

            </div>
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