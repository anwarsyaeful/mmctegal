<div class="main-content">
      <section class="section">
    
         <div class="section-header">
            <h1>Data Users</h1>
         </div>

             <?php echo $this->session->flashdata('pesan') ?>
              
              <div class="card shadow mb-4">
              <div class="card-header py-3">

              <a href="<?php echo base_url('superadmin/data_customer/tambah_customer') ?>" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah User</a>
              </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
  	                  <th width="20px">No</th>
  	                  <th>Nama</th>
  					          <th>Alamat</th>
  					          <th>No. Telepon</th>
  		                <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($customer as $cs): ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $cs->nama ?></td>
            						  <td><?php echo $cs->alamat ?></td>
            						  <td><?php echo $cs->no_telepon ?></td>
            						  <td>
            							<a href="<?php echo base_url('superadmin/data_customer/detail_customer/').$cs->id_customer ?>" class="btn btn-sm btn-success mr-1"><i class="fas fa-eye"></i></a>
            							<a onclick="return confirm('Yakin Data Admin dihapus ?')" href="<?php echo base_url('superadmin/data_customer/delete_customer/').$cs->id_customer ?>" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></a>
            							<a href="<?php echo base_url('superadmin/data_customer/update_customer/').$cs->id_customer ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
            						  </td>
              			    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
    </section>
  </div>