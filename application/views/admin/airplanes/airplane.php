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
        $validate = FALSE;
    }
    // var_dump($validate);
}
?>                                  
                        <!-- Edit Tickets -->
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4"><?php
                                    if($validate == TRUE){
                                        echo 'Edit Airplane';
                                    }else {
                                        echo 'Add Airplane';                                        
                                    }
                                    ?></h5>
                                    <?php if($validate == TRUE){
                                        echo form_open('admin/airplane/op/update/'.$segs); 
                                    }else {
                                        echo form_open('admin/airplane/op/create');
                                    }
                                    ?>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Name:</label>
                                                    <input type="text" class="form-control" name="airplanename" <?php 
                                            if($validate == TRUE){
                                                foreach ($dataAirPlane->result() as $row){
                                                    echo 'value="'.$row->name.'"';
                                                }
                                            }
                                        ?> required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Flight Code</label>
                                                    <input type="text" class="form-control" name="flight_code" <?php 
                                            if($validate == TRUE){
                                                foreach ($dataAirPlane->result() as $row){
                                                    echo 'value="'.$row->flight_code.'"';
                                                }
                                            }
                                        ?> required>
                                                </div>
                                                <input type="submit" name="submit" class="btn btn-primary float-right">
                                        <?php echo form_close(); ?>   
                                </div>
                            </div>
                        </div>