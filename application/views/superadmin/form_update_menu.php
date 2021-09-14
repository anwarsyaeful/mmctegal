<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Edit Data Menu</h1>
          </div>

		  <div class="card">
		   	<div class="card-body">

		   		<form method="POST" action="<?php echo base_url('superadmin/data_menu/update_menu_aksi') ?>" enctype="multipart/form-data">
		   		<div class="row">
		   			<div class="col-md-6">
		   				<div class="form-group">
		   					<label>Kategori</label>
		   					<input type="hidden" name="id_mn" value="<?= $menu->id_mn ?>">
		   					<select name="id_kat" class="form-control">
		   						<option value="<?= $menu->id_kat ?>"><?= $menu->nama_kat ?></option>
		   						<?php foreach($kategori_menu as $kat_mn) : ?>
		   							<option value="<?php echo $kat_mn->id_kat ?>"><?php echo $kat_mn->nama_kat ?></option>
		   						<?php endforeach; ?>
		   					</select>
		   					<?php echo form_error('nama_kat','<div class="text-small text-danger">','</div>') ?>
		   				</div>

		   				<div class="form-group">
		   					<label>Nama</label>
		   					<input type="text" name="nama_mn" class="form-control" value="<?php echo $menu->nama_mn ?>">
		   					<?php echo form_error('nama_mn','<div class="text-small text-danger">','</div>') ?>
		   				</div>

		   				<div class="form-group">
							<label>Jenis</label>
							<select class="form-control" name="ket_mn">
								<option value="<?php echo $menu->ket_mn ?>"><?php echo $menu->ket_mn ?></option>
								<option value="ice">ice</option>
								<option value="hot">hot</option>
							</select>
							<?php echo form_error('ket_mn','<span class="text-small text-danger">','</span>') ?>
						</div>

		   				<div class="form-group">
		   					<label>Harga</label>
		   					<input type="number" name="harga_mn" class="form-control" value="<?php echo $menu->harga_mn ?>">
		   					<?php echo form_error('harga_mn','<div class="text-small text-danger">','</div>') ?>
		   				</div>

		   				<div class="form-group">
		   					<label>Gambar</label>
		   					<input type="file" name="foto_mn" class="form-control">
		   				</div>

						<button type="submit" class="btn btn-sm btn-primary">Simpan</button>

		   			</div>
		   		</div>
		   		</form>

		   	</div>
		  </div>

		</section>
</div>