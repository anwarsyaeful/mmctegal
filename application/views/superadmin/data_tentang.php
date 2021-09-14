<div class="main-content">
      <section class="section">
    
         <div class="section-header">
            <h1>Data Profil</h1>
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
                      <th>Jasa</th>
                      <th>Service</th>
                      <th>Berita</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($tentang as $ttg): ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $ttg->jasa ?></td>
                          <td><?php echo $ttg->service ?></td>
                          <td><?php echo $ttg->berita ?></td>
                        <td> 
                          <a href="<?php echo base_url('superadmin/data_tentang/update/').$ttg->id ?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
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