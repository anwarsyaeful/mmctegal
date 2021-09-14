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

            <!-- /. ROW  -->
            <table id="example" class="table table-striped table-bordered table-hover">
                <tr>
                    <th width="20px">No</th>
                    
                    <th>TANGGAL</th>
                    <th>TOTAL</th>
                    <th width="170px">ACTION</th>
                </tr>

                <?php 
				$no = 1;
				foreach ($tr as $r) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                   
                    <td><?php echo $r->waktu ?></td>
                    <td><?php echo $r->rega ?></td>
                    <td>
                        <a href="<?php echo base_url('admin1/transaksi/dTransaksi/'.$r->transaksi_id) ?>"
                            class="btn btn-sm btn-success mr-1"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>

                <?php endforeach; ?>
            </table>