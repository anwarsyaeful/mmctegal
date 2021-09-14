<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" class="nav-link nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block"><i>Welcome
                                    <?php echo $this->session->userdata('nama') ?></i> </div>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?php echo base_url('superadmin/dashboard') ?>"> MAJU MILK CENTER</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">MMC</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Menu Utama</li>
                        <li><a class="nav-link" href="<?php echo base_url('superadmin/dashboard') ?>"><i
                                    class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
                        <li><a class="nav-link" href="<?php echo base_url('superadmin/data_customer') ?>"><i
                                    class="fas fa-users"></i> <span>Data Users</span></a></li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-info-circle"></i> <span>Info
                                    MMC</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link"
                                        href="<?php echo base_url('superadmin/data_identitas') ?>">Contact Us</a></li>
                                <li><a class="nav-link"
                                        href="<?php echo base_url('superadmin/data_tentang') ?>">Profil</a></li>
                                <li><a class="nav-link" href="<?php echo base_url('superadmin/data_hubungi') ?>">Feed
                                        Back</a></li>
                            </ul>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-clipboard-list"></i>
                                <span>Menu</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link"
                                        href="<?php echo base_url('superadmin/kategori_menu') ?>">Kategori</a></li>
                                <li><a class="nav-link" href="<?php echo base_url('superadmin/data_menu') ?>">Daftar
                                        Menu</a></li>
                            </ul>

                        <li class="menu-header">Activity</li>
                            <li><a class="nav-link" href="<?php echo base_url('superadmin/setting_counter') ?>"><i class="fas fa-cogs"></i> <span>Setting Counter</span></a></li>
                        
                            <li><a class="nav-link" href="<?php echo base_url('superadmin/data_pengunjung') ?>"><i class="fas fa-street-view"></i> <span>Data Pengunjung</span></a></li>
                            
                            <li><a class="nav-link" href="<?php echo base_url('superadmin/transaksi/laporan') ?>"><i class="fas fa-money-check-alt"></i> <span>Laporan Penjualan</span></a></li>
                            
                           


                        <li class="menu-header">Settings</li>
                        <li><a class="nav-link" href="<?php echo base_url('auth/ganti_password') ?>"><i
                                    class="fas fa-lock"></i> <span>Ganti Password</span></a></li>
                        <li><a class="nav-link" href="<?php echo base_url('auth/logout') ?>"><i
                                    class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
                    </ul>
                </aside>
            </div>