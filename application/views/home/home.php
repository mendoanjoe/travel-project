<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('/assets/'); ?>img/favicon.ico">

    <title>Antavaya Travel</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/'); ?>css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/'); ?>css/style.css">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/offcanvas/offcanvas.css" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <!-- Logo -->
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="<?php echo base_url(); ?>">
                <img src="https://upload.wikimedia.org/wikipedia/id/thumb/9/9c/AntaVaya_logo.svg/500px-AntaVaya_logo.svg.png" alt="iTravel" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="<?php echo base_url(); ?>">
                <img src="https://upload.wikimedia.org/wikipedia/id/thumb/9/9c/AntaVaya_logo.svg/500px-AntaVaya_logo.svg.png" alt="logo" />
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
        <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Why book with AntaVaya Travel?</h1>
          <p>Be more flexible with various payment methods from ATM Transfer, Credit Card, to Internet Banking.
          Competitive price from extensive network budget hotels to 5 star hotels such as Ibis, Amaris, Santika Hotel with best price guarantee.
          You're guaranteed a hotel stay, period. In the event of overbooked rooms or problems with your booking, we'll recommend a similar hotel for you at no additional costs. Or your money back.</p>
        </div>
      </div>
            <div class="row">
            
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fa fa-plane text-primary fa-fw"></i> Where do you want to go?</h4>
                            <form class="form-sample">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">From:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control">
                                                    <option>Jakarta</option>
                                                    <option>Bandung</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Departure:</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">To:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control">
                                                    <option>Bali</option>
                                                    <option>Singapura</option>
                                                    <option>Bangkok</option>
                                                    <option>Jepang</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Passengers</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" name="submit" class="btn btn-primary float-right">
                            </form>
                        </div>
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
    <script src="https://getbootstrap.com/docs/4.0/examples/offcanvas/offcanvas.js"></script>
</body>

</html>