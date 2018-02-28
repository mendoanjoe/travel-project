                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                            <p class="card-text text-right">Total Revenue</p>
                                            <div class="fluid-container">
                                                <h3 class="card-title font-weight-bold text-right mb-0">IDR. <?php echo $total_revenue; ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3">
                                        <i class="fa fa-dollar fa-tw" aria-hidden="true"></i> All Revenue
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                            <p class="card-text text-right">Orders</p>
                                            <div class="fluid-container">
                                                <h3 class="card-title font-weight-bold text-right mb-0"><?php echo $total_order; ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3">
                                        <i class="fa fa-info-circle fa-tw" aria-hidden="true"></i> Product sales
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                            <p class="card-text text-right">Flights</p>
                                            <div class="fluid-container">
                                                <h3 class="card-title font-weight-bold text-right mb-0"><?php echo $total_flight; ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3">
                                        <i class="fa fa-plane fa-tw" aria-hidden="true"></i> Data all flight
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                            <div class="card card-statistics">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <div class="float-right">
                                            <p class="card-text text-right">Routes</p>
                                            <div class="fluid-container">
                                                <h3 class="card-title font-weight-bold text-right mb-0"><?php echo $total_route; ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3">
                                        <i class="fa fa-road fa-tw" aria-hidden="true"></i> Data all route
                                    </p>
                                </div>
                            </div>
                        </div>                        
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Order Request</h5>
                                    <div class="table-responsive">
                                        <table id="dataFlight" class="table center-aligned-table">
                                            <thead>
                                                <tr>
                                                    <th>Profile</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Profile</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php foreach ($order_request->result() as $row){?>
                                                <tr>
                                                    <td>
                                                        <img class="img-sm rounded-circle" src="https://avatars1.githubusercontent.com/u/<?php echo rand(1000, 100000); ?>" alt="profile image">
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <p class="text-primary font-weight-bold mr-1 mb-0 no-wrap">[#<?php echo $row->transaction_code ?>]</p>
                                                            <p class="font-weight-bold mb-0 ellipsis"><?php echo $row->title ?> <?php echo $row->name ?></p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <button type="button" class="btn btn-gradien dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Manage
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="<?php echo base_url('admin/home/order/approve/'); ?><?php echo $row->transaction_code ?>">
                                                                    <i class="fa fa-check text-success fa-fw"></i>Approve</a>
                                                                <a class="dropdown-item" href="<?php echo base_url('admin/home/order/cancel/'); ?><?php echo $row->transaction_code ?>">
                                                                    <i class="fa fa-times text-danger fa-fw"></i>Cancel</a>
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