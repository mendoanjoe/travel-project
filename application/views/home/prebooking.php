
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('/assets/'); ?>img/favicon.ico">

    <title>Offcanvas template for Bootstrap</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/'); ?>css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/'); ?>css/style.css">

    <!-- DataTable -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/'); ?>css/datatables/dataTables.bootstrap4.min.css">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/offcanvas/offcanvas.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <!-- Logo -->
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="<?php echo base_url(); ?>">
                    <img src="http://www.bootstrapdash.com/demo/star-admin-free/jquery/images/logo.svg" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="<?php echo base_url(); ?>">
                    <img src="#" alt="logo" />
                </a>
            </div>

            <!-- Menu Top -->
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('admin/logout'); ?>">
                            <span class="menu-title">Logout</span>
                            <img class="menu-icon" src="<?php echo base_url('/assets/'); ?>img/menu/logout.svg" alt="menu icon">
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>

    <div class="container-fuid">
        <div class="content-wrapper">
            <div class="row">
            <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Flight from Jakarta to Bali / Denpasar</h5>
                                    <blockquote class="blockquote">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                  </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Flight from Jakarta to Bali / Denpasar</h5>
                                    <blockquote class="blockquote">
                                    <div class="table-responsive">
                                        <table id="dataFlight" class="table center-aligned-table">
                                            <thead>
                                                <tr>
                                                    <th>Airline</th>
                                                    <th>Depart</th>
                                                    <th>Arrive</th>
                                                    <th>Duration</th>
                                                    <th>Cabin</th>
                                                    <th>Price per person</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Airline</th>
                                                    <th>Depart</th>
                                                    <th>Arrive</th>
                                                    <th>Duration</th>
                                                    <th>Cabin</th>
                                                    <th>Price per person</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td><img width="50px" class="m-2" src="https://tvlk.imgix.net/imageResource/2015/12/17/1450349861201-09ec8f298222a73d66e8e96aa3b918f0.png?auto=compress%2Cformat&cs=srgb&fm=png&ixlib=java-1.1.1&q=75" />  Garuda Indonesia</td>
                                                    <td>18:19</td>
                                                    <td>21:32</td>
                                                    <td>1h 34m</td>
                                                    <td>15Kg</td>
                                                    <td>IDR. 1.000.000<br>
                                                    <a class="btn btn-gradien" href="http://[::1]/ukk/admin/ticket/view">Select</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                  </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">Price Details</h5>
                                    <blockquote>
                                        <p class="mx-2"><span class="font-weight-bold">Flight (x3):</span>  <mark>IDR. 121.021.219</mark></p>
                                        <p class="mx-2"><span class="font-weight-bold">Baggage: </span> <mark>IDR. 500.000</mark></p>
                                        <p class="mx-2"><span class="font-weight-bold">Price you pay: </span> <mark>IDR. 500.000</mark></p>
                                    </blockquote>
                                </div>
                            </div>
                            <button type="button" class="btn btn-warning btn-fw w-100 mt-3">Continue to Booking</button>
                        </div>
            </div>
        </div>
    </div>

        <footer class="footer">
                    <div class="container-fluid clearfix">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                            <a href="https://github.com/mendoanjoe/" target="_blank">Firmansyah</a>. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
                            <i class="fa fa-heart text-danger fa-fw"></i>
                        </span>
                    </div>
                </footer>
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
    <script src="https://getbootstrap.com/docs/4.0/examples/offcanvas/offcanvas.js"></script>
  </body>
</html>
