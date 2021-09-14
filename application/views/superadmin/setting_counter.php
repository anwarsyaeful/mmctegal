<div class="main-content">
      <section class="section">
    
         <div class="section-header">
            <h1>Setting Counter</h1>
         </div>

             <?php echo $this->session->flashdata('pesan') ?>
              
             <div class="card shadow mb-4">
             <div class="card-header py-3">

            </div>
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="20px">No</th>
                      <th>Jumlah</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($counter as $id): ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $id->jumlah ?></td>
                        <td> 
                          <a href="<?php echo base_url('superadmin/setting_counter/update/').$id->id_alat ?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
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