<div class="main-content">
      <section class="section">
    
         <div class="section-header">
            <h1>Feed Back Pengunjung</h1>
         </div>

             <?php echo $this->session->flashdata('pesan') ?>
              
             <div class="card shadow mb-4">
             <div class="card-header py-3">
              
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
		                <th width="20px">No</th>
	                    <th>Nama</th>
		                <th>Email</th>
	                    <th>Pesan</th>
	                    <th>Untuk</th>
		                <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($hubungi as $hub): ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                      	  <td><?php echo $hub->nama ?></td>
                          <td><?php echo $hub->email ?></td>
                          <td><?php echo $hub->masukan ?></td>
                          <td><?php echo $hub->cabang ?></td>
	                      <td> 
	                        <a onclick="return confirm('Yakin Data dihapus ?')" href="<?php echo base_url('superadmin/data_hubungi/delete/').$hub->id ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
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