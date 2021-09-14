<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Update Data User</h1>
          </div>
        </section>
        <div class="card">
        	<div class="card-body">

		<?php foreach($customer as $cs) : ?>	
		<form method="POST" action="<?php echo base_url('superadmin/data_customer/update_customer_aksi') ?>">
			<div class="row">
				<div class="col-md-6">
			<div class="form-group">
				<label>Nama</label>
				<input type="hidden" name="id_customer" value="<?php echo $cs->id_customer ?>">
				<input type="text" name="nama" class="form-control" value="<?php echo $cs->nama ?>">
				<?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
			</div>

			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo $cs->username ?>">
				<?php echo form_error('username','<span class="text-small text-danger">','</span>') ?>
			</div>

			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $cs->alamat ?>">
				<?php echo form_error('alamat','<span class="text-small text-danger">','</span>') ?>
			</div>

			<div class="form-group">
				<label>Gender</label>
				<select class="form-control" name="gender">
					<option value="<?php echo $cs->gender ?>"><?php echo $cs->gender ?></option>
					<option value="laki-laki">Laki-Laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
				<?php echo form_error('nama','<span class="text-small text-danger">','</span>') ?>
			</div>

			<div class="form-group">
				<label>No. Telepon</label>
				<input type="text" name="no_telepon" class="form-control" value="<?php echo $cs->no_telepon ?>">
				<?php echo form_error('no_telepon','<span class="text-small text-danger">','</span>') ?>
			</div>

			<div class="form-group">
				<label>No. KTP</label>
				<input type="text" name="no_ktp" class="form-control" value="<?php echo $cs->no_ktp ?>">
				<?php echo form_error('no_ktp','<span class="text-small text-danger">','</span>') ?>
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" value="<?php echo $cs->password ?>">
				<?php echo form_error('password','<span class="text-small text-danger">','</span>') ?>
			</div>

			<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
			
			</div>
			</div>
		</form>

	<?php endforeach; ?>
	</div>
	</div>
 </div>