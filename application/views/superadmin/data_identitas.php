<div class="main-content">
      <section class="section">
    
         <div class="section-header">
            <h1>Contact Us</h1>
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
                      <th>Jam Operasional</th>
                      <th>Email</th>
                      <th>No. Telp</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; foreach ($identitas as $id): ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $id->operasional ?></td>
                          <td><?php echo $id->email ?></td>
                          <td><?php echo $id->telp ?></td>
                        <td> 
                          <a href="<?php echo base_url('superadmin/data_identitas/update/').$id->id_identitas ?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
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