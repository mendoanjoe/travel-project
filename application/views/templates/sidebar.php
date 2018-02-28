            <!-- Sidebar -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <!-- Profile -->
                    <li class="nav-item nav-profile">
                        <div class="nav-link">
                            <div class="profile-image">
                                <img src="<?php echo base_url('/assets/'); ?>img/face.jpg" alt="image" />
                                <span class="online-status online"></span>
                            </div>
                            <div class="profile-name">
                                <p class="name">Firmansyah Nuralif Rohman</p>
                                <p class="designation">Administrator</p>
                                <div class="badge badge-teal mx-auto mt-3">
                                    <i class="fa fa-circle text-white fa-tw" aria-hidden="true"></i> Online</div>
                            </div>
                        </div>
                    </li>
                    <!-- Menu Sidebar -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('admin/home') ?>">
                            <img class="menu-icon" src="<?php echo base_url('/assets/'); ?>img/menu/dashboard.svg" alt="menu icon">
                            <span class="menu-title">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('admin/ticket') ?>">
                            <img class="menu-icon" src="<?php echo base_url('/assets/'); ?>img/menu/airport.svg" alt="menu icon">
                            <span class="menu-title">Tickets</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('admin/reserved') ?>">
                            <img class="menu-icon" src="<?php echo base_url('/assets/'); ?>img/menu/booking.svg" alt="menu icon">
                            <span class="menu-title">Reserved</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('admin/setting') ?>">
                            <img class="menu-icon" src="<?php echo base_url('/assets/'); ?>img/menu/setting.svg" alt="menu icon">
                            <span class="menu-title">Setting</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">