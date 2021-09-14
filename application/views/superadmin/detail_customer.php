<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Customer</h1>
          </div>
		</section>

		<?php foreach($customer as $cs) : ?>
			<div class="card">
				<div class="card-body">
							<div>
								<table class="table">
									<tr>
										<td><strong>Nama</strong></td>
										<td><?php echo $cs->nama ?></td>
									</tr>	

									<tr>
										<td><strong>Username</strong></td>
										<td><?php echo $cs->username ?></td>
									</tr>

									<tr>
										<td><strong>Alamat</strong></td>
										<td><?php echo $cs->alamat ?></td>
									</tr>	

									<tr>
										<td><strong>Gender</strong></td>
										<td><?php echo $cs->gender ?></td>
									</tr>

									<tr>
										<td><strong>No. Telepon</strong></td>
										<td><?php echo $cs->no_telepon ?></td>
									</tr>

									<tr>
										<td><strong>No. KTP</strong></td>
										<td><?php echo $cs->no_ktp ?></td>
									</tr>

									<tr>
										<td><strong>Password</strong></td>
										<td><?php echo $cs->password ?></td>
									</tr>

									<tr>
										<td></td>
										<td>
											<a class="btn btn-sm btn-danger mt-4 mr-1" href="<?php echo base_url('superadmin/data_customer') ?>">Back</a>

								            <a class="btn btn-sm btn-warning mt-4" href="<?php echo base_url('superadmin/data_customer/update_customer/'.$cs->id_customer) ?>">Edit</a>	
										</td>
									</tr>
								</table>
							</div>		
				</div>
			</div>
		<?php endforeach; ?>
</div>