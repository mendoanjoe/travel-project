<?php 
// model
$this->load->model('Admin_Model');
// get edit or post
$segs = $this->uri->segment_array();
$segs = end($segs);

$validate = FALSE;
// set data
$dataTicket = null;

if($segs != "seat"){
    $dataTicket = $this->Admin_Model->ticket_by_id($segs);    
    if($dataTicket->result()){
        $validate = TRUE;
    }else{        
        redirect('admin/ticket','refresh');
    }
    // var_dump($validate);
}else{
    redirect('admin/ticket','refresh');
}
?>                             
                        <!-- Edit Seat -->
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Edit Seat</h5>
                                    <?php echo form_open('admin/ticket/op/update/seat/'.$segs); ?>
                                        <input type="hidden" class="form-control" name="flightid">
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Seat Available:</label>
                                            <?php
                                                foreach ($dataTicket->result() as $row){
                                                    echo '<input type="number" min="0" class="form-control" name="flightseat" value="'.$row->available_seat.'">';
                                                }
                                            ?>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-primary float-right">
                                        <?php echo form_close(); ?>  
                                </div>
                            </div>
                        </div>