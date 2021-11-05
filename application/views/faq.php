<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#"><?php if(get_cookie('lang_is') === 'in'){ ?>
                    Beranda
                    <?php }else{ ?>
                     Home
                  <?php } ?></a> / <?php if(get_cookie('lang_is') === 'in'){ ?>
                     Contact Us
                    <?php }else{ ?>
          Bukutamu
                     
                  <?php } ?></span>
    <h2><?php if(get_cookie('lang_is') === 'in'){ ?>
                     Contact Us 
                    <?php }else{ ?>
                     Bukutamu
                  <?php } ?>
              </h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">


               <form role="form" class="contact-form row" name="contactform" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>contact/save" id="contactform1" >
                         <?php echo $this->session->flashdata('message'); ?>
                                        <input class="form-control" type="text" name="nama" placeholder="Name">
                                   <?php echo form_error('nama'); ?>
                               
                                        <input class="form-control" type="email" name="email" placeholder="Email address">
                                   <?php echo form_error('email'); ?>
                              
                                        <span class="la la-phone form-icon"></span>
                                        <input class="form-control" type="text" name="no_hp" placeholder="Phone number">
                                   
                                        <input class="form-control" type="text" name="website" placeholder="Website">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" type="text" name="title" placeholder="Message Title"> 
                            <textarea class="form-control light-300" rows="8" placeholder="Message" id="floatingtextarea" name="description"></textarea>

                    <button type="submit" class="btn btn-success" name="Submit"><?php if(get_cookie('lang_is') === 'in'){ ?>
                    Kirim Pesan
                    <?php }else{ ?>
                      Send Message
                  <?php } ?></button>
                            </form>
     
          


                
        </div>
  <div class="col-lg-6 col-sm-6 ">
  <div class="well"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.025479650958!2d106.85233297574!3d-6.257017632629225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f31fd7a4304b%3A0x2d8cf266c5c49280!2sApartemen%20kalibata%20city!5e0!3m2!1sid!2sid!4v1631906160301!5m2!1sid!2sid&amp;output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
  </div>
</div>
</div>
</div>

