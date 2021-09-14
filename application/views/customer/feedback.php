<main id="main">

    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>FeedBack Pengunjung</h2>
          <ol>
              <li><a href="<?php echo base_url('customer/dashboard') ?>">Home</a></li>
              <li>Feedback Page</li>
          </ol>
        </div>
      </div>
    </section>

    <form method="post" action="<?php echo base_url('customer/feedback/kirim_pesan') ?>">
        <div class="row m-5">
            <div class="col-md-7">
                <div class="alert alert-primary">
                    <i class="icofont-info-circle"></i> HUBUNGI KAMI
                </div>
                <?php echo $this->session->flashdata('pesan') ?>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                    <?php echo form_error('nama','<div class="text-danger small">','</div') ?>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                    <?php echo form_error('email','<div class="text-danger small">','</div') ?>
                </div>

                <div class="form-group">
                    <label>Tujuan</label>
                    <select name="cabang" class="form-control">
                        <option value="">-- Pilih Cabang --</option>
                        <!-- <option>Semua Cabang</option>
                        <option>Cabang Werkudoro</option> -->
                        <option>Cabang Mejasem</option>
                    </select>
                    <?php echo form_error('cabang', '<div class="text-danger small ml-3">','</div>') ?>
                </div>

                <div class="form-group">
                    <label>Pesan</label>
                    <textarea type="text" name="masukan" class="form-control" rows="5"></textarea>
                    <?php echo form_error('masukan','<div class="text-danger small">','</div') ?>
                </div>

                <button type="submit" class="btn btn-sm btn-success" style="margin-top: 2px">Kirim</button>

            </div>
        </div>

    </form>

    
  </main>