<div class="main-content">
      <section class="section">
    
         <div class="section-header">
            <h1>Data Menu</h1>
         </div>

             <?php echo $this->session->flashdata('pesan') ?>
              
             <div class="card shadow mb-4">
             <div class="card-header py-3">

            <a href="<?php echo base_url('superadmin/data_menu/tambah_menu') ?>"class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah Menu</a>
            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
	                  <th width="20px">No</th>
                    <th>Gambar</th>
	                  <th>Kategori</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Harga</th>
	                  <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($menu as $mn): ?>
                        <tr>
                        	<td><?php echo $no++ ?></td>
                          <td>
                            <img width="50px" src="<?php echo base_url().'assets/upload/'.$mn->foto_mn?>">
                          </td>
                      	  <td><?php echo $mn->nama_kat; ?></td>
                          <td><?php echo $mn->nama_mn; ?></td>
                          <td><?php echo $mn->ket_mn; ?></td>
                          <td><?php echo $mn->harga_mn; ?></td>
		                      <td> 
		                        <a onclick="return confirm('Yakin Data dihapus ?')" href="<?php echo base_url('superadmin/data_menu/delete_menu/').$mn->id_mn ?>" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></a>
	         	 				        <a href="<?php echo base_url('superadmin/data_menu/update_menu/').$mn->id_mn ?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>                   
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