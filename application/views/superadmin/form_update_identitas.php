<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Edit identitas</h1>
          </div>

		  <div class="card">
		   	<div class="card-body">

		   		<?php foreach($identitas as $id) : ?>

		   		<form method="POST" action="<?php echo base_url('superadmin/data_identitas/update_aksi') ?>" enctype="multipart/form-data">
		   		<div class="row">
		   			<div class="col-md-6">

		   				<div class="form-group">
		   					<label>Jam Operasional</label>
		   					<input type="hidden" name="id_identitas" value="<?php echo $id->id_identitas ?>">
		   					<input type="text" name="operasional" class="form-control" value="<?php echo $id->operasional ?>">
		   					<?php echo form_error('operasional','<div class="text-small text-danger">','</div>') ?>
		   				</div>

		   				<div class="form-group">
		   					<label>Email</label>
		   					<input type="text" name="email" class="form-control" value="<?php echo $id->email ?>">
		   					<?php echo form_error('email','<div class="text-small text-danger">','</div>') ?>
		   				</div>

		   				<div class="form-group">
		   					<label>No. Telp</label>
		   					<input type="text" name="telp" class="form-control" value="<?php echo $id->telp ?>">
		   					<?php echo form_error('telp','<div class="text-small text-danger">','</div>') ?>
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