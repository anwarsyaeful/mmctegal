<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Daftar Menu</h2>
          <ol>
              <li><a href="<?php echo base_url('customer/dashboard') ?>">Home</a></li>
              <li>List Menu Page</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

        

    <section class="inner-page">
      <div class="container">
        
         <div class="row">
             <!-- Car List Content Start -->
             <div class="col-lg-12">
                 <div class="car-list-content">
                     <div class="row">

                         <?php foreach ($menu as $mn) : ?>

                         <div class="col-lg-2 col-md-6 mb-4" style="text-align: center">
                             <div class="card h-100">
                                <h6 style="font-family: monospace; margin-top: 5px">
                                    <strong><?php echo $mn->nama_mn ?></strong>
                                  </h6> 
                                  <a href="#"><img
                                           src="<?php echo base_url('assets/upload/' . $mn->foto_mn) ?>"
                                           style="width: 100px; height: 100px;">
                                  </a>       
                                <div class="card-body" style="margin-top: -10px"> 
                                  <span class="badge badge-light" style="color: red"><?php echo $mn->ket_mn ?></span>                     
                                </div>                               
                                <div class="card-footer" style="margin-top: -10px">                                   
                                    <span class="badge badge-info">Rp. <?php echo $mn->harga_mn ?></span>       
                                </div>
                             </div>
                         </div>

                         <?php endforeach; ?>
                     </div>
                 </div>

                 <div>
                      <span class="badge badge-warning" style="font-size: 13px">NB : Susu Kambing (+2k)</span>
                 </div>

             </div>
             <!-- Car List Content End -->
         </div>
      </div>
    </section>

  </main><!-- End #main -->