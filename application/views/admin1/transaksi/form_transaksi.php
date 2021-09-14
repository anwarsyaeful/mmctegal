
       <!-- Template CSS -->
       <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla/assets/css/style.css') ?>">
       <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla/assets/css/components.css') ?>">



       <!-- Main Content -->
       <div class="main-content">
           <section class="section">
               <div class="section-header">
                   <h1>Dashboard Cabang Mejasem</h1>
               </div>

               <!-- /. ROW  -->

               <div class="row">
                   <div class="col-12">
                       <div class="card">
                           <div class="card-body">
                               <?php echo form_open('admin1/transaksi', array('class' => 'form-horizontal')); ?>

                               <div class="row">
                                   <div class="col-md-7">

                                       <div class="form-group" style="width: 70%;">
                                           <span class="d-flex">
                                               <label style="flex: 3;">Nama Barang </label>
                                               <input list="barang" id="nama" autocomplete="off" class="form-control" style="flex: 5;"
                                                   name="menu" placeholder="masukan nama barang" required>
                                           </span>
                                       </div>
                                       <div class="form-group" style="width: 70%;">
                                           <span class="d-flex">
                                               <label style="flex: 3;">Quantity</label>
                                               <input type="number" style="flex: 4;" min="0" autocomplete="off"
                                                   style="flex: 5;" name="qty" placeholder="QTY" class="form-control"
                                                   required></input>
                                               <button type="submit" name="submit"
                                                   class="btn btn-primary btn-sm">Tambah</button>
                                           </span>
                                       </div>
                                   </div>

                                   <div class="col-md-4">
                                       <div class="form-group" style="width: 90%;">
                                           <label style="flex: 2;">Total (IDR) </label>
                                           <span class="d-flex" <?php
                                            $total = 0;
                                            foreach ($detail as $r) { ?> <?php $total = $total + ($r->qty * $r->harga_mn);
                                                
                                            } ?>><input type="text" name="total2" value="<?php echo $total?>"
                                                   class="form-control" style="flex: 4;" readonly>

                                               <input type="hidden" id="total" name="total" value="<?php echo $total?>"
                                                   class="form-control" style="flex: 4;" readonly>
                                           </span>
                                       </div>

                                       <div class="form-group" style="width: 90%;">
                                           <label style=" flex: 2;">Bayar (IDR) </label>
                                           <span class="d-flex"><input type="text" autocomplete="off" id="jml_uang"
                                                   name="jml_uang" class="jml_uang form-control" style="flex: 4;">
                                               <input type="hidden" id="jml_uang2" name="jml_uang2" autocomplete="off"
                                                   class="form-control" style="flex: 4;">
                                           </span>
                                       </div>
                                       <div class="form-group" style="width: 90%;">
                                           <span class="d-flex">
                                               <label style="flex: 2;">Kembalian (IDR) </label>
                                               <input type="text" id="kembalian" name="kembalian" class="form-control"
                                                   style="flex: 4;" readonly>
                                           </span>
                                       </div>
                                   </div>
                                   </form>

                                   <datalist id="barang">
                                       <?php foreach ($barang->result() as $b) {
                                        echo "<option value='$b->nama_mn'>";
                                    } ?>

                                   </datalist>
                               </div>
                           </div>
                       </div>
                       <!-- /. PANEL  -->
                   </div>


                   <div class="col-md-12">
                       <div class="panel panel-default">
                           <div class="panel-body">
                               <div class="col-sm-offset-0 col-sm-5">
                                   <div>
                                       <a href="<?= base_url('admin1/transaksi/print_transaksi') ?>"
                                           class="btn btn-primary btn-sm">
                                           <span class="glyphicon glyphicon-print"></span> Print
                                       </a>

                                       <a href="<?= base_url('admin1/transaksi/selesai_belanja') ?>"
                                           class="btn btn-primary btn-sm">
                                           <span class="glyphicon glyphicon-send"></span> Selesai
                                       </a>
                                   </div>
                               </div>
                           </div>

                           <div class="table-responsive">
                               <table class="table table-striped table-bordered" id="example">
                                   <thead>
                                       <tr>
                                           <th>No.</th>
                                           <th>Nama Barang</th>
                                           <th>Qty</th>
                                           <th>Harga</th>
                                           <th>Sub Total</th>

                                       </tr>
                                   </thead>
                                   <tbody>

                                       <?php $no = 1;
                                            $total = 0;
                                            foreach ($detail as $r) { ?>
                                       <tr class="gradeU">
                                           <td><?php echo $no ?></td>
                                           <!-- <td><?php echo $r->nama_mn . ' - ' . anchor('admin1/transaksi/hapusitem/' . $r->t_detail_id, 'Hapus', array('style' => 'color:red;')) ?>
                                           </td> -->
                                           <td><?php echo $r->nama_mn ?> <a
                                                   href="<?= base_url() . 'admin1/transaksi/hapusitem/' . $r->t_detail_id ?>"
                                                   class="glyphicon btn-glyphicon glyphicon-trash img-circle text-danger"></i></a>
                                           <td><?php echo $r->qty ?></td>
                                           <td>Rp. <?php echo number_format($r->harga_mn, 2) ?></td>
                                           <td>Rp. <?php echo number_format($r->qty * $r->harga_mn, 2) ?>
                                           </td>

                                       </tr>
                                       <?php $total = $total + ($r->qty * $r->harga_mn);
                                                $no++;
                                            } ?>
                                       <tr class="gradeA">
                                           <td id="total" name="total" colspan="4">T O T A L</td>
                                           <td>Rp. <?php echo number_format($total, 2); ?></td>
                                       </tr>

                                   </tbody>
                               </table>
                           </div>
                           <br><br>

                       </div>
                       <!-- /. TABLE  -->
                   </div>
               </div>
       </div>
       </div>
       <!-- /. ROW  -->


       <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

       <script type="text/javascript">
$(function() {
    $('#jml_uang').on("input", function() {
        var total = $('#total').val();
        var jumuang = $('#jml_uang').val();
        var hsl = jumuang.replace(/[^\d]/g, "");
        $('#jml_uang2').val(hsl);
        $('#kembalian').val(hsl - total);
    })

});
       </script>
       <script type="text/javascript">
$(function() {
    $('.jml_uang').priceFormat({
        prefix: '',
        //centsSeparator: '',
        centsLimit: 0,
        thousandsSeparator: ','
    });
    $('#jml_uang2').priceFormat({
        prefix: '',
        //centsSeparator: '',
        centsLimit: 0,
        thousandsSeparator: ''
    });
    $('#kembalian').priceFormat({
        prefix: '',
        //centsSeparator: '',
        centsLimit: 0,
        thousandsSeparator: ','
    });
    $('.harjul').priceFormat({
        prefix: '',
        //centsSeparator: '',
        centsLimit: 0,
        thousandsSeparator: ','
    });
});
       </script>