                        <!-- Database Flight -->
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Ticket Database
                                        <a class="btn btn-gradien float-right" href="<?php echo base_url('admin/ticket/view'); ?>">
                                            <i class="fa fa-plus fa-fw"></i> Add Ticket</a>
                                    </h5>
                                    <div class="table-responsive">
                                        <table id="dataFlight" class="table center-aligned-table">
                                            <thead>
                                                <tr>
                                                    <th>Flight Code</th>
                                                    <th>Plane</th>
                                                    <th>Route</th>
                                                    <th>Cabin</th>
                                                    <th>Available Seat</th>
                                                    <th>Registered Seat</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Flight Code</th>
                                                    <th>Plane</th>
                                                    <th>Route</th>
                                                    <th>Cabin</th>
                                                    <th>Available Seat</th>
                                                    <th>Registered Seat</th>
                                                    <th>Price</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php 
                                            $this->load->model('Admin_Model');
                                            foreach ($tickets->result() as $row){?>
                                                <tr>
                                                <?php foreach ($this->Admin_Model->airplane_by_id($row->airplane_code)->result() as $rows){?>
                                                    <td><?php echo $rows->flight_code ?></td>                                            
                                                    <td><?php echo $rows->name ?></td>
                                                <?php } ?>
                                                <?php foreach ($this->Admin_Model->route_by_id($row->route_code)->result() as $rows){?>
                                                    <td><?php echo $rows->departure_city ?> - <?php echo $rows->arrival_city ?></td>
                                                <?php } ?>
                                                    <td><?php echo $row->cabin_total ?></td>
                                                    <td><?php echo $row->available_seat ?></td>
                                                    <td><?php echo $row->registered_seat ?></td>
                                                    <td>Rp. <?php echo $row->price ?></td>
                                                    <td>
                                                    <?php 
                                                    if($row->status == "Available"){ ?>
                                                        <label class="badge badge-teal mx-auto">Available</label>
                                                    <?php }else if($row->status == "Not Available"){ ?>
                                                        <label class="badge badge-warning mx-auto">Not Available</label>
                                                    <?php }else if($row->status == "Deleted"){ ?>
                                                        <label class="badge badge-danger mx-auto">Deleted</label>
                                                    <?php } ?>                                                        
                                                    </td>
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <button type="button" class="btn btn-gradien dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Manage
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="<?php echo base_url('admin/ticket/seat/'); ?><?php echo $row->uuid; ?>">
                                                                    <i class="fa fa-plus text-primary fa-fw"></i> Edit Seat</a>
                                                                <a class="dropdown-item" href="<?php echo base_url('admin/ticket/status/'); ?><?php echo $row->uuid; ?>">
                                                                    <i class="fa fa-plus text-teal fa-fw"></i> Edit Status</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item" href="<?php echo base_url('admin/ticket/view/'); ?><?php echo $row->uuid; ?>">
                                                                    <i class="fa fa-edit text-primary fa-fw"></i> Edit</a>
                                                                <a class="dropdown-item" href="<?php echo base_url('admin/ticket/op/delete/'); ?><?php echo $row->uuid; ?>">
                                                                    <i class="fa fa-times text-danger fa-fw"></i> Remove</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Database Route -->
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Route Database
                                        <a class="btn btn-gradien float-right" href="<?php echo base_url('admin/route/view'); ?>">
                                            <i class="fa fa-plus fa-fw"></i> Add Route</a>
                                    </h4>
                                    <table id="dataRoute" class="table center-aligned-table">
                                        <thead>
                                            <tr>
                                                <th>UUID</th>
                                                <th>DA</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($routes->result() as $row){ ?>
                                            <tr>
                                                <td><?php echo $row->uuid ?></td>
                                                <td><?php echo $row->departure_city ?> - <?php echo $row->arrival_city ?></td>
                                                <td>
                                                <?php 
                                                    if($row->status == "Available"){ ?>
                                                        <label class="badge badge-teal mx-auto">Available</label>
                                                    <?php }else if($row->status == "Not Available"){ ?>
                                                        <label class="badge badge-warning mx-auto">Not Available</label>
                                                    <?php }else if($row->status == "Deleted"){ ?>
                                                        <label class="badge badge-danger mx-auto">Deleted</label>
                                                    <?php } ?> 
                                                </td>
                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <button type="button" class="btn btn-gradien dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Manage
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="<?php echo base_url('admin/route/status/'); ?><?php echo $row->uuid ?>">
                                                                <i class="fa fa-plus text-teal fa-fw"></i> Edit Status</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="<?php echo base_url('admin/route/view/'); ?><?php echo $row->uuid ?>">
                                                                <i class="fa fa-edit text-primary fa-fw"></i> Edit</a>
                                                            <a class="dropdown-item" href="<?php echo base_url('admin/route/op/delete/'); ?><?php echo $row->uuid ?>">
                                                                <i class="fa fa-times text-danger fa-fw"></i> Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Database AirPlane -->
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Airplane Database
                                    <a class="btn btn-gradien float-right" href="<?php echo base_url('admin/airplane/view'); ?>">
                                            <i class="fa fa-plus fa-fw"></i> Add Airplane</a>
                                    </h4>
                                    <table id="dataAirPlane" class="table center-aligned-table">
                                        <thead>
                                            <tr>
                                                <th>UUID</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($airplanes->result() as $row){ ?>
                                            <tr>
                                                <td><?php echo $row->uuid ?></td>
                                                <td><?php echo $row->name ?></td>
                                                <td>
                                                <?php 
                                                    if($row->status == "Available"){ ?>
                                                        <label class="badge badge-teal mx-auto">Available</label>
                                                    <?php }else if($row->status == "Not Available"){ ?>
                                                        <label class="badge badge-warning mx-auto">Not Available</label>
                                                    <?php }else if($row->status == "Deleted"){ ?>
                                                        <label class="badge badge-danger mx-auto">Deleted</label>
                                                    <?php } ?> 
                                                </td>
                                                <td>
                                                    <div class="btn-group dropdown">
                                                        <button type="button" class="btn btn-gradien dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Manage
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="<?php echo base_url('admin/airplane/status/'); ?><?php echo $row->uuid ?>">
                                                                <i class="fa fa-plus text-teal fa-fw"></i> Edit Status</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="<?php echo base_url('admin/airplane/view/'); ?><?php echo $row->uuid ?>">
                                                                <i class="fa fa-edit text-primary fa-fw"></i> Edit</a>
                                                            <a class="dropdown-item" href="<?php echo base_url('admin/airplane/op/delete/'); ?><?php echo $row->uuid ?>">
                                                                <i class="fa fa-times text-danger fa-fw"></i> Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>