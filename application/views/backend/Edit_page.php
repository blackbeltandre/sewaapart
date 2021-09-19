<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
                       <div class="col-md-12">
                        <div class="panel panel-primary" id="demo">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-table22"></i></span>  Page</h3>
                                <div class="panel-toolbar text-right">
                                </div>
                            </div>
          <form action="<?php echo site_url('backend/page/update_page');?>" method="post" accept-charset="utf-8" role="form" enctype="multipart/form-data">
            <?php foreach ($single_page as $single_page){ ?>
                                    <div class="row form-group">
                                      <input type="hidden" name="id_page" value="<?php echo $single_page->id_page; ?>">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Page</label></div>
                                        <div class="col-12 col-md-3"><input type="text" class="form-control" data-required="true" name="page" value="<?php echo $single_page->page; ?>" placeholder="Page">                        
                                <small class="form-text text-muted"><?php echo form_error('page'); ?></small></div>
                                    </div>
                                   <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Language  </label></div>
                                        <div class="col-12 col-md-3">
                                            <select name="lang" id="select" class="form-control" value="<?php echo $single_page->lang; ?>">
                                              <?php if($single_page->lang =="EN"){ 
                                                ?>
                                    <option value="EN">INGGRIS</option>
                                    <option value="ID">INDONESIA</option>
                                    <?php }else{ ?>
                                      <option value="ID">INDONESIA</option>
                                    <option value="EN">INGGRIS</option>
                                    <?php } ?>
                               </select>
                                        <small class="help-block form-text"><?php echo form_error('lang'); ?></small></div>
                                    </div>
                              <div class="panel-toolbar text-center">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Save
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset Form
                                </button>
                                <br><br><br>
                            </div>
                        </div>
                         </form>
                      </div>
                    </div>
<?php } ?>
