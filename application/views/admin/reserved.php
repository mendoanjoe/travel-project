                        <!-- Database Flight -->
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Orders Database</h5>
                                    <div class="table-responsive">
                                    <table id="dataFlight" class="table center-aligned-table">
                                            <thead>
                                                <tr>
                                                    <th>Profile</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Profile</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                            <?php foreach ($reserved->result() as $row){?>
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
                                                    <?php 
                                                    if($row->status == "Complete"){ ?>
                                                        <label class="badge badge-teal mx-auto">Complete</label>
                                                    <?php }else if($row->status == "Incomplete"){ ?>
                                                        <label class="badge badge-warning mx-auto">Incomplete</label>
                                                    <?php }else if($row->status == "Deleted"){ ?>
                                                        <label class="badge badge-danger mx-auto">Deleted</label>
                                                    <?php }else if($row->status == "Cancel"){ ?>
                                                        <label class="badge badge-info mx-auto">Cancel</label>
                                                    <?php } ?> 
                                                    </td>
                                                    <td>
                                                        <div class="btn-group dropdown">
                                                            <button type="button" class="btn btn-gradien dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Manage
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="<?php echo base_url('admin/reserved/view/'); ?><?php echo $row->transaction_code ?>">
                                                                    <i class="fa fa-reply text-primary fa-fw"></i>View</a>
                                                                <a class="dropdown-item" href="<?php echo base_url('admin/reserved/op/delete/'); ?><?php echo $row->transaction_code ?>">
                                                                    <i class="fa fa-times text-danger fa-fw"></i>Delete</a>
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

                            <!-- Modal Edit Seat -->
                            <div class="modal fade" id="orderView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Seat</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="login.php">
                                                <input type="hidden" class="form-control" name="flightid">
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Seat Available:</label>
                                                    <input type="number" min="0" class="form-control" name="flightseat">
                                                </div>
                                                <button type="submit" class="btn btn-primary float-right">
                                                    <i class="fa fa-save fa-fw"></i> Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>