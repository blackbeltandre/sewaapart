<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<div class="col-md-12">
                        <div class="panel panel-primary" id="demo">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-users"></i></span><?php echo $title; ?></h3>
                                <div class="panel-toolbar text-right">
                                </div>
                            </div>
                              <form action="<?php echo base_url(); ?>backend/category_gallery/proses" method="post" enctype="multipart/form-data" class="form-horizontal bucket-form" data-validate="parsley">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Category Gallery</label></div>
                                        <div class="col-12 col-md-3"><input type="text" class="form-control" data-required="true" name="category" value="<?php echo set_value('category'); ?>" placeholder="Category Gallery">                        
                                <small class="form-text text-muted"><?php echo form_error('category'); ?></small></div>
                                    </div>
                                  <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Language  </label></div>
                                        <div class="col-12 col-md-3">
                                            <select name="lang" id="select" class="form-control" value="<?php echo set_value('lang'); ?>">
                                    <option value="">==Select==</option>
                                    <option value="EN">INGGRIS</option>
                                    <option value="ID">INDONESIA</option>
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
                                <br><br><br><br><br><br>
                            </div>
                        </div>
                         </form>
                      </div>
                    </div>