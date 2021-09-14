<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Edit Counter</h1>
          </div>

		  <div class="card">
		   	<div class="card-body">

		   		<?php foreach($counter as $id) : ?>

		   		<form method="POST" action="<?php echo base_url('superadmin/setting_counter/update_aksi') ?>" enctype="multipart/form-data">
		   		<div class="row">
		   			<div class="col-md-6">

		   				<div class="form-group">
		   					<label>Jumlah</label>
		   					<input type="hidden" name="id_alat" value="<?php echo $id->id_alat ?>">
		   					<input type="text" name="jumlah" class="form-control" value="<?php echo $id->jumlah ?>">
		   					<?php echo form_error('jumlah','<div class="text-small text-danger">','</div>') ?>
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