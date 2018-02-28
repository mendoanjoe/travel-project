<?php 
// model
$this->load->model('Admin_Model');
// get edit or post
$segs = $this->uri->segment_array();
$segs = end($segs);

$validate = FALSE;
// set data
$dataTicket = null;
$dataAirPlane = $this->Admin_Model->airplanes();
$dataRoute = $this->Admin_Model->routes();

if($segs != "view"){
    $dataTicket = $this->Admin_Model->ticket_by_id($segs);    
    if($dataTicket->result()){
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
                                        echo 'Edit Ticket';
                                    }else {
                                        echo 'Add Ticket';                                        
                                    }
                                    ?>
                                    </h5>
                                    <?php if($validate == TRUE){
                                        echo form_open('admin/ticket/op/update/'.$segs); 
                                    }else {
                                        echo form_open('admin/ticket/op/create');
                                    }
                                    ?>
                                                <div class="row m-2">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Airplane:</label>
                                                            <select class="form-control" name="airplane_code" required>
                                                            <?php 
                                                             foreach ($dataAirPlane->result() as $row){
                                                                if($validate == TRUE){
                                                                    foreach ($dataTicket->result() as $rows){
                                                                        if($rows->airplane_code === $row->uuid){
                                                                            echo '<option value="'.$row->uuid.'" selected>'.$row->name.'</option>';
                                                                        }else{
                                                                            echo '<option value="'.$row->uuid.'">'.$row->name.'</option>';
                                                                        }
                                                                    }
                                                                }else{
                                                                    echo '<option value="'.$row->uuid.'">'.$row->name.'</option>';
                                                                }                                                                 
                                                             }
                                                            ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Departure Date:</label>
                                                            <input type="date" class="form-control" name="departure_date" <?php 
                                            if($validate == TRUE){
                                                foreach ($dataTicket->result() as $row){
                                                    echo 'value="'.$row->departure_date.'"';
                                                }
                                            }else{
                                                echo 'value="'.date("Y-m-d").'"';
                                            }
                                        ?> required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Departure Time:</label>
                                                            <input type="time" class="form-control" name="departure_time" <?php 
                                            if($validate == TRUE){
                                                foreach ($dataTicket->result() as $row){
                                                    echo 'value="'.$row->departure_time.'"';
                                                }
                                            }else{
                                                echo 'value="'.date("H:i").'"';
                                            }
                                        ?> required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Arrive Date:</label>
                                                            <input type="date" class="form-control" name="arrive_date" <?php 
                                            if($validate == TRUE){
                                                foreach ($dataTicket->result() as $row){
                                                    echo 'value="'.$row->arrive_date.'"';
                                                }
                                            }else{
                                                echo 'value="'.date("Y-m-d").'"';
                                            }
                                        ?> required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Arrive Time:</label>
                                                            <input type="time" class="form-control" name="arrive_time" <?php 
                                            if($validate == TRUE){
                                                foreach ($dataTicket->result() as $row){
                                                    echo 'value="'.$row->arrive_time.'"';
                                                }
                                            }else{
                                                echo 'value="'.date("H:i").'"';
                                            }
                                        ?> required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Category:</label>
                                                            <select class="form-control" name="flight_category" required>
                                                                <option>Direct</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Route:</label>
                                                            <select class="form-control" name="route_code" required>
                                                            <?php 
                                                             foreach ($dataRoute->result() as $row){
                                                                if($validate == TRUE){
                                                                    foreach ($dataTicket->result() as $rows){
                                                                        if($rows->route_code === $row->uuid){
                                                                            echo '<option value="'.$row->uuid.'" selected>'.$row->departure_city.' ('.$row->departure_airport.') - '.$row->arrival_city.' ('.$row->arrival_airport.')</option>';
                                                                        }else{
                                                                            echo '<option value="'.$row->uuid.'">'.$row->departure_city.' ('.$row->departure_airport.') - '.$row->arrival_city.' ('.$row->arrival_airport.')</option>';
                                                                        }
                                                                    }
                                                                }else{
                                                                    echo '<option value="'.$row->uuid.'">'.$row->departure_city.' ('.$row->departure_airport.') - '.$row->arrival_city.' ('.$row->arrival_airport.')</option>';
                                                                }
                                                             }
                                                            ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Cabin (Kg):</label>
                                                            <input type="number" min="0" class="form-control" name="cabin_total" <?php 
                                            if($validate == TRUE){
                                                foreach ($dataTicket->result() as $row){
                                                    echo 'value="'.$row->cabin_total.'"';
                                                }
                                            }else{
                                                echo 'value="15"';
                                            }
                                        ?> required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Available Seat:</label>
                                                            <input type="number" min="0" class="form-control" name="available_seat" <?php 
                                            if($validate == TRUE){
                                                foreach ($dataTicket->result() as $row){
                                                    echo 'value="'.$row->available_seat.'"';
                                                }
                                            }else{
                                                echo 'value="0"';
                                            }
                                        ?> required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Price:</label>
                                                            <input type="number" min="0" class="form-control" name="flightprice" <?php 
                                            if($validate == TRUE){
                                                foreach ($dataTicket->result() as $row){
                                                    echo 'value="'.$row->price.'"';
                                                }
                                            }else{
                                                echo 'value="0"';
                                            }
                                        ?> required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" min="0" class="form-control" name="registered_seat" <?php 
                                            if($validate == TRUE){
                                                foreach ($dataTicket->result() as $row){
                                                    echo 'value="'.$row->registered_seat.'"';
                                                }
                                            }else{
                                                echo 'value="0"';
                                            }
                                        ?>>
                                                <input type="submit" name="submit" class="btn btn-primary float-right">
                                                    <?php echo form_close(); ?>                                    
                                </div>
                            </div>
                        </div>