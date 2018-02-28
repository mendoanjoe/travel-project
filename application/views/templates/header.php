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
        <!-- Navigation -->
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

        <div class="container-fluid page-body-wrapper">