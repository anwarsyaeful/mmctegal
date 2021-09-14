<!-- General CSS Files -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- Template CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla/assets/css/style.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/assets_stisla/assets/css/components.css') ?>">



<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard Admin</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info">
                        <a href="<?php echo base_url('superadmin/data_pengunjung') ?>"><i class="fas fa-users"></i></a>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>JUMLAH PENGUNJUNG</h4>
                        </div>
                        <div class="card-body">
                            <h4 id="pengunjung"><?= $pengunjung->jumlah ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                         <a href="<?php echo base_url('superadmin/data_hubungi') ?>"><i class="fas fa-envelope-open-text"></i></a>
                    </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>FEEDBACK PENGUNJUNG</h4>
                    </div>
                <div class="card-body">
                    <?php echo $hubungi; ?>
                </div>
            </div>
            </div>
        </div> 
        </div>
        <!-- <div class="row">
      <div class="col-lg-6 col-md-12 col-12 col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4>Grafik Cabang Mejasem</h4>
            <div class="card-header-action">
              <div class="btn-group">
                <a href="#" class="btn btn-primary">Week</a>
                <a href="#" class="btn">Month</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <canvas id="myChart" height="182"></canvas>
            <div class="statistic-details mt-sm-4">
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 7%</span>
                <div class="detail-value">$243</div>
                <div class="detail-name">Today's Sales</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-danger"><i class="fas fa-caret-down"></i></span> 23%</span>
                <div class="detail-value">$2,902</div>
                <div class="detail-name">This Week's Sales</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>9%</span>
                <div class="detail-value">$12,821</div>
                <div class="detail-name">This Month's Sales</div>
              </div>
              <div class="statistic-details-item">
                <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 19%</span>
                <div class="detail-value">$92,142</div>
                <div class="detail-name">This Year's Sales</div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

</div>


<!-- Vendor JS Files -->
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/venobox/venobox.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>

<script>
    function tampil(){
    $.ajax({
        url: "<?= base_url('superadmin/dashboard/realtime')?>",
        dataType: 'json',
        success:function(result){
          
          $('#pengunjung').text(result.jumlah);
          
          setTimeout(tampil, 2000); 
        }
    });
  }
  
  document.addEventListener('DOMContentLoaded',function(){
    tampil();
  });   
</script>