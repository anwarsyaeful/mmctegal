<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Edit Kategori Menu</h1>
          </div>

		  <div class="card">
		   	<div class="card-body">

		   		<?php foreach($kategori_menu as $kat) : ?>

		   		<form method="POST" action="<?php echo base_url('superadmin/kategori_menu/update_kategori_aksi') ?>" enctype="multipart/form-data">
		   		<div class="row">
		   			<div class="col-md-6">

		   				<div class="form-group">
		   					<label>Nama Kategori</label>
		   					<input type="hidden" name="id_kat" value="<?php echo $kat->id_kat ?>">
		   					<input type="text" name="nama_kat" class="form-control" value="<?php echo $kat->nama_kat ?>">
		   					<?php echo form_error('nama_kat','<div class="text-small text-danger">','</div>') ?>
		   				</div>

						<button type="submit" class="btn btn-sm btn-primary">Simpan</button>

		   			</div>
		   		</div>
		   		</form>
		   	<?php endforeach; ?>
		   	</div>
		  </div>

		</section>
</div>