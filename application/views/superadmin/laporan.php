       <!-- General CSS Files -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
           integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
           integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

       <!-- Template CSS -->
       <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla/assets/css/style.css') ?>">
       <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla/assets/css/components.css') ?>">

       <!-- Main Content -->
       <div class="main-content">
           <section class="section">
               <div class="section-header">
                   <h1>Dashboard Cabang Mejasem</h1>
               </div>
               <?php echo $this->session->flashdata('pesan') ?>
               <div class="row">
                   <div class="col-md-12">
                       <h4 class="page-header">
                           POS (Point of Sale) <small>Laporan Transaksi</small>
                       </h4><hr>
                   </div>
               </div>
               <!-- /. ROW  -->

               <div class="row">
                   <div class="col-md-12">
                       <div class="panel panel-default">
                           <div class="panel-body">
                               <form action="<?= base_url('admin1/transaksi/laporan') ?>" method="GET"
                                   class="form-inline">
                                   <div class="form-group">
                                        <a href="<?= base_url('superadmin/transaksi/excel') ?>"
                                           class="btn btn-success btn-sm" style="margin-bottom:8px; margin-right:5px">
                                           <span class="glyphicon glyphicon-print"></span><i class="fas fa-print"></i> Print laporan
                                       </a>
                                       
                                       <a onclick="return confirm('Yakin Data dihapus semua ?')" href="<?= base_url('superadmin/transaksi/hapus') ?>"
                                           class="btn btn-danger btn-sm" style="margin-bottom:8px">
                                           <span class="glyphicon glyphicon-trash"></span><i class="fas fa-trash"></i> Hapus data
                                       </a>
                                   </div>
                                    <br>
                                    
                                   
                               </form>
                           </div>
                       </div>
                       <!-- /. PANEL  -->
                   </div>

                   <div class="col-md-12">
                       <div class="panel panel-default">
                           <div class="panel-body">
                               <div class="table-responsive">
                                   <table class="table table-striped table-bordered" id="example">
                                       <thead>
                                           <tr class="table-primary">
                                               <th>No.</th>
                                               <th class="text-center">Tanggal Transaksi</th>
                                               <th>Nama barang</th>
                                               <th class="text-center">jumlah barang</th>
                                               <th class="text-center">Harga</th>
                                               <th class="text-center">Total Harga</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           <?php $no = 1;
                                                $total = 0;
                                                foreach ($record->result() as $r) { ?>
                                           <tr class="gradeU">
                                               <td class="text-center"><?php echo $no ?></td>
                                               <td class="text-center"><?php echo $r->tanggal ?></td>
                                               <td><?php echo $r->nama ?></td>
                                               <td class="text-center"><?= number_format($r->qty) ?></td>
                                               <td class="text-center"><?= number_format($r->harga_mn) ?></td>
                                               <td class="text-center"><?= number_format($r->total) ?></td>
                                           </tr>
                                           <?php $no++;
                                                    $total = $total + $r->total;
                                                } ?>
                                           <tr>
                                               <td colspan="5">Total</td>
                                               <td style="display: none;"></td>
                                               <td style="display: none;"></td>
                                               <td style="display: none;"></td>
                                               <td style="display: none;"></td>
                                               <td class="text-center">Rp.<?= number_format($total); ?></td>
                                           </tr>
                                       </tbody>
                                   </table>
                               </div>
                               <!-- /. TABLE  -->
                           </div>
                       </div>
                   </div>
               </div>