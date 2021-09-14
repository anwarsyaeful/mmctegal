<div class="main-content">
      <section class="section">
    
         <div class="section-header">
            <h1>Data Kategori</h1>
         </div>

             <?php echo $this->session->flashdata('pesan') ?>
              
             <div class="card shadow mb-4">
             <div class="card-header py-3">

            <a href="<?php echo base_url('superadmin/kategori_menu/tambah_kategori') ?>" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah Kategori</a>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
	                  <th width="20px">No</th>
	                  <th>Nama Kategori</th>
	                  <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($kategori_menu as $kat): ?>
                        <tr>
                        	<td><?php echo $no++ ?></td>
                      	  <td><?php echo $kat->nama_kat; ?></td>
		                      <td> 
		                        <a onclick="return confirm('Yakin Data dihapus ?')" href="<?php echo base_url('superadmin/kategori_menu/delete_kategori/').$kat->id_kat ?>" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></a>
	         	 				        <a href="<?php echo base_url('superadmin/kategori_menu/update_kategori/').$kat->id_kat ?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>                   
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