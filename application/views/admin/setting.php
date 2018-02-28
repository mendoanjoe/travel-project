<?php 
// model
$this->load->model('Admin_Model');
$dataSetting = $this->Admin_Model->admin_by_id(60001);   
?>
                        <!-- Setting -->
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Admin Setting</h5>
                                    <?php echo form_open('admin/setting/save'); ?>
                                            <div class="form-group">
                                              <label>Email address</label>
                                              <?php foreach ($dataSetting->result() as $row){?>
                                              <input type="email" name="setting_email" class="form-control" value="<?php echo $row->email; ?>">
                                              <?php } ?>
                                            </div>
                                            <div class="form-group">
                                              <label>Password</label>
                                              <?php foreach ($dataSetting->result() as $row){?>
                                              <input type="password" name="setting_password" class="form-control" value="<?php echo base64_decode($row->password); ?>">
                                              <?php } ?>
                                            </div>
                                            <input type="submit" name="submit" class="btn btn-primary float-right">
                                        <?php echo form_close(); ?>  
                                </div>
                            </div>
                        </div>