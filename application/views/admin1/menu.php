          <!-- General CSS Files -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
              crossorigin="anonymous">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
              integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
              crossorigin="anonymous">

          <!-- Template CSS -->
          <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla/assets/css/style.css') ?>">
          <link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla/assets/css/components.css') ?>">


<div class="main-content">
    <section class="section">

        <div class="section-header">
            <h1>Daftar Menu</h1>
        </div>

        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-hover" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="20px">No</th>
                                <th>Gambar</th>
                                <th>Kategori</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($menu as $mn) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td>
                                    <img width="50px" src="<?php echo base_url() . 'assets/upload/' . $mn->foto_mn ?>">
                                </td>
                                <td><?= $mn->nama_kat?></td>
                                <td><?php echo $mn->nama_mn; ?></td>
                                <td><?php echo $mn->ket_mn; ?></td>
                                <td><?php echo $mn->harga_mn; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
</section>
</div>