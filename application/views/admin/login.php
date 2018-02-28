<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="shortcut icon" href="<?php echo base_url('/assets/'); ?>img/favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/'); ?>css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/'); ?>css/style.css">

    <!-- DataTable -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/'); ?>css/datatables/dataTables.bootstrap4.min.css">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <!-- Content -->
            <div class="main-panel w-100">
                <div class="content-wrapper">
                    <div class="row justify-content-center">
                        <!-- Database Flight -->
                        <div class="col-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Login</h5>
                                    <?php echo form_open('admin/login/act'); ?>
                                        <div class="form-group row">
                                            <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" name="email" placeholder="Enter email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control"name="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-gradien float-right">
                                        <?php echo form_close(); ?>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                            <a href="#" target="_blank">Firmansyah</a>. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
                            <i class="fa fa-heart text-danger fa-fw"></i>
                        </span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="<?php echo base_url('/assets/'); ?>js/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('/assets/'); ?>js/jquery/jquery-3.2.1.slim.min.js"></script>
    <script src="<?php echo base_url('/assets/'); ?>js/bootstrap/popper.min.js"></script>
    <script src="<?php echo base_url('/assets/'); ?>js/bootstrap/bootstrap.min.js"></script>

    <!-- DataTable -->
    <script src="<?php echo base_url('/assets/'); ?>js/jquery/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('/assets/'); ?>js/jquery/dataTables.bootstrap4.min.js"></script>

    <script src="<?php echo base_url('/assets/'); ?>js/default.js"></script>
</body>

</html>