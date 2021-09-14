<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POS - Point Of Sale</title>
    <!-- Bootstrap Styles-->
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="<?php echo base_url() ?>/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->

    <!-- Custom Styles-->
    <link href="<?php echo base_url() ?>/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
</head>

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
                        <a href="">MMC MEJASEM</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="">MMC</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Activity</li>
                        <!-- <li><a class="nav-link" href="<?php echo base_url('admin1/dashboard') ?>"><i
                                    class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li> -->
                        <li>
                            <a href="<?php echo base_url().'admin1/barang'?>"><i class="fas fa-clipboard-list"></i> Data Menu</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin1/transaksi'?>"><i class="fas fa-money-check-alt"></i> Transaksi
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-cart"></i> Data Transaksi</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo base_url().'admin1/transaksi/laporan'?>">Laporan</a>
                                </li>
                                 <li>
                                    <a href="<?php echo base_url().'admin1/transaksi/transaksi'?>">detail</a>
                                </li>
                               
                                <!-- <li>
                                    <a href="<?php echo base_url().'transaksi/pdf'?>" target="_blank">Laporan PDF</a>
                                </li> -->
                            </ul>
                        </li>
                        <li><a class="nav-link" href="<?php echo base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </aside>
            </div>

</body>

</html>