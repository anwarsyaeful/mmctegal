<div class="main-content">
      <section class="section">
    
         <div class="section-header">
            <h1>Data Pengunjung</h1>
         </div>

             <?php echo $this->session->flashdata('pesan') ?>
              
             <div class="card shadow mb-4">
             <div class="card-header py-3">
                 
                 <a onclick="return confirm('Yakin Data dihapus Semua ?')" href="<?php echo base_url('superadmin/data_pengunjung/delete_semua') ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus semua</a>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
	                  <th width="20px">No</th>
	                  <th>Suhu</th>
	                  <th>Waktu</th>
	                  <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($pengunjung as $pj): ?>
                        <tr>
                        	<td><?php echo $no++ ?></td>
                      	    <td><?php echo $pj->ket; ?></td>
                      	    <td><?php echo $pj->waktu; ?></td>
		                      <td> 
		                        <a onclick="return confirm('Yakin Data dihapus ?')" href="<?php echo base_url('superadmin/data_pengunjung/delete_pengunjung/').$pj->id_alat ?>" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></a>
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
  