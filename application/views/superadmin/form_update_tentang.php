<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Edit Profil</h1>
          </div>

		  <div class="card">
		   	<div class="card-body">

		   		<?php foreach($tentang as $ttg) : ?>

		   		<form method="POST" action="<?php echo base_url('superadmin/data_tentang/update_aksi') ?>" enctype="multipart/form-data">
		   		<div class="row">
		   			<div class="col-md-12">

		   				<div class="form-group">
		   					<h6>Jasa</h6>
		   					<input type="hidden" name="id" value="<?php echo $ttg->id ?>">
		   					<textarea name="jasa" cols="70" rows="7"><?php echo $ttg->jasa ?></textarea>
		   				</div>

		   				<div class="form-group">
		   					<h6>Service</h6>
		   					<textarea name="service" cols="70" rows="7"><?php echo $ttg->service ?></textarea>
		   				</div>

		   				<div class="form-group">
		   					<h6>Berita</h6>
		   					<textarea name="berita" cols="70" rows="7"><?php echo $ttg->berita ?></textarea>
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