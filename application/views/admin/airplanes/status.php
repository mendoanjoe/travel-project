<?php 
// model
$this->load->model('Admin_Model');
// get edit or post
$segs = $this->uri->segment_array();
$segs = end($segs);

$validate = FALSE;
// set data
$dataAirPlane = null;

if($segs != "view"){
    $dataAirPlane = $this->Admin_Model->airplane_by_id($segs);    
    if($dataAirPlane->result()){
        $validate = TRUE;
    }else{        
        redirect('admin/ticket','refresh');
    }
    // var_dump($validate);
}else{
    redirect('admin/ticket','refresh');
}
?>                                
                        <!-- Edit Status -->
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Edit Status</h5>
                                    <?php echo form_open('admin/airplane/op/update/status/'.$segs); ?>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Status:</label>
                                            <select class="form-control" name="airplanestatus">
                                                <option>Available</option>
                                                <option>Not Available</option>
                                                <option>Deleted</option>
                                            </select>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-primary float-right">
                                        <?php echo form_close(); ?>  
                                </div>
                            </div>
                        </div>