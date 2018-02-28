<?php 
// model
$this->load->model('Admin_Model');
// get edit or post
$segs = $this->uri->segment_array();
$segs = end($segs);

$validate = FALSE;
// set data
$dataRoute = null;

if($segs != "view"){
    $dataRoute = $this->Admin_Model->route_by_id($segs);    
    if($dataRoute->result()){
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
                                        echo 'Edit Route';
                                    }else {
                                        echo 'Add Route';                                        
                                    }
                                    ?></h5>
                                    <?php if($validate == TRUE){
                                        echo form_open('admin/route/op/update/'.$segs); 
                                    }else {
                                        echo form_open('admin/route/op/create');
                                    }
                                    ?>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Departure City:</label>
                                                    <input type="text" class="form-control" name="departure_city" <?php 
                                            if($validate == TRUE){
                                                foreach ($dataRoute->result() as $row){
                                                    echo 'value="'.$row->departure_city.'"';
                                                }
                                            }
                                        ?> required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Departure Airport:</label>
                                                    <input type="text" class="form-control" name="departure_airport" <?php 
                                            if($validate == TRUE){
                                                foreach ($dataRoute->result() as $row){
                                                    echo 'value="'.$row->departure_airport.'"';
                                                }
                                            }
                                        ?> required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Arrival City:</label>
                                                    <input type="text" class="form-control" name="arrival_city" <?php 
                                            if($validate == TRUE){
                                                foreach ($dataRoute->result() as $row){
                                                    echo 'value="'.$row->arrival_city.'"';
                                                }
                                            }
                                        ?> required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Arrival Airport:</label>
                                                    <input type="text" class="form-control" name="arrival_airport" <?php 
                                            if($validate == TRUE){
                                                foreach ($dataRoute->result() as $row){
                                                    echo 'value="'.$row->arrival_airport.'"';
                                                }
                                            }
                                        ?> required>
                                                </div>
                                                <input type="submit" name="submit" class="btn btn-primary float-right">
                                        <?php echo form_close(); ?>   
                                </div>
                            </div>
                        </div>