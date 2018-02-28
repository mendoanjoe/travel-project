<?php 
// model
$this->load->model('Admin_Model');
// get edit or post
$segs = $this->uri->segment_array();
$segs = end($segs);

$validate = FALSE;
// set data
$dataReserved = null;

if($segs != "view"){
    $dataReserved = $this->Admin_Model->reserved_by_id($segs);    
    if($dataReserved->result()){
        $validate = TRUE;
    }else{        
        $validate = FALSE;
    }
    // var_dump($validate);
}
?>                                                 
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Detail View [#234223]</h4>                  
                  <div class="row">
                    <?php
                        if($validate == TRUE){ foreach ($dataReserved->result() as $row){
                    ?>
                    <div class="col-md-6">
                      <address>
                        <blockquote class="blockquote">
                        <p class="font-weight-bold"><i class="fa fa-user text-black fa-fw"></i> <?php echo $row->title; ?> <?php echo $row->name; ?></p>                        
                        <p><i class="fa fa-university text-black fa-fw"></i> <?php echo $row->address; ?>,  <?php echo $row->citizenship; ?></p>
                        <p><i class="fa fa-phone text-black fa-fw"></i> <?php echo $row->phone; ?></p>
                        <br>
                        <h5><i class="fa fa-barcode text-black fa-fw"></i> Kode Booking :</h5>
                        <p class="font-weight-bold"><mark><?php echo $row->booking_code; ?></mark></p>
                        <br>
                        <h5><i class="fa fa-plane text-black fa-fw"></i> Penerbangan :</h5>
                        <?php foreach ($this->Admin_Model->airplane_by_id($row->airplane_code)->result() as $rows){?>
                        <p class="font-weight-bold"><?php echo $rows->name; ?></p>
                        <?php } ?>
                        <?php foreach ($this->Admin_Model->route_by_id($row->route_code)->result() as $rows){?>
                        <p><mark><?php echo $rows->departure_city; ?> (<?php echo $rows->departure_airport; ?>) - <?php echo $rows->arrival_city; ?> (<?php echo $rows->arrival_airport; ?>)</mark></p>
                        <?php } ?>
                        <br>
                        <h5><i class="fa fa-tag text-black fa-fw"></i> Price :</h5>
                        <p class="font-weight-bold"><mark>IDR. <?php echo $row->price; ?></mark></p>
                        <br>
                        <h5><i class="fa fa-tag text-black fa-fw"></i> Payment :</h5>
                        <?php foreach ($this->Admin_Model->bank_by_id($row->bank_code)->result() as $rows){?>
                        <p class="font-weight-bold"><mark><?php echo $rows->name; ?></mark></p>
                        <?php } ?>
                        <br>
                        <h5><i class="fa fa-tag text-black fa-fw"></i> Status :</h5>
                        <p class="font-weight-bold"><mark><?php echo $row->status; ?></mark></p>
                        </blockquote>
                      </address>
                    </div>
                    <?php }} ?>
                  </div>
                </div>
              </div>
            </div>