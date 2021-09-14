 <!-- General CSS Files -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
           integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
           integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

       <!-- Template CSS -->
       <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla/assets/css/style.css') ?>">
       <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla/assets/css/components.css') ?>">


<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Detail Transaksi</h1>
        </div>

        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th width="20px">No</th>
                <th>Nama barang</th>
                <th>QTY</th>
                <th>Harga menu</th>



            </tr>
            <tbody>
                <?php 
				$no = 1;
				$total = 0;
				foreach ($dt as $r) : {?>

                <tr class="gradeU">
                    <td><?php echo $no++ ?></td>
                    <td><?php echo  $r->nama_mn ?></td>
                    <td><?php echo  $r->qty ?></td>
                    <td><?php echo $r->harga_mn ?></td>

                </tr>
                <?php $total = $total + ($r->qty * $r->harga_mn);
                                                $no++;
                                            } ?>

                <?php endforeach; ?>
                <tr>
                    <td colspan="3">Total</td>
                    <td class="">Rp.<?= number_format($total); ?></td>
                </tr>
            </tbody>
        </table>