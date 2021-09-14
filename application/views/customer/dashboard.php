
<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row d-flex align-items-center">
      <div class=" col-lg-7 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
        <h1>Aja klalen nyusu !</h1>
        <h2>Susu memberikan rasa manis agar kau bersyukur atas hidup yang tak selamanya pahit</h2>
        <a href="<?php echo base_url('customer/daftar_menu') ?>" class="btn-get-started scrollto">Daftar Menu</a>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="<?php echo base_url() ?>assets/assets_pengunjung/img/sapi.png" class="img-fluid">
      </div>
    </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row" style="font-family: Georgia;">
            <?php foreach($tentang as $ttg) : ?>

          <div class="col-xl-12 pl-0 pl-lg-4 pr-lg-1 d-flex align-items-stretch" style="text-align: justify;">
            <div class="content d-flex flex-column justify-content-center">
              <div class="section-title">
                <h2 data-aos="fade-in">About Us</h2>
              </div>
              <div class="row">
                <div class="col-md-6">
                  Keluar sebagai pegawai di lingkungan lembaga pendidikan swasta di kota tegal beralih profesi sebagai pedagang keliling susu sapi perah. Perkantoran, sekolah dan perumahan dijadikan sebagai objek tujuan untuk proses pemasaran. Tidak hanya sekedar menawarkan juga harus tetap mengedukasi masyarakat tentang pentingnya minum susu, karena jika dilihat dari kandungan nutrisinya perlu dijadikan sebagai minuman pokok sehari-hari. Untuk mendapatkan bahan baku yang baik dan higienis kami survey kebeberapa peternak sapi dan koperasi susu yang ada didalam maupun diluar kota tegal. Di Balai Pembibitan Ternak Unggul Sapi Perah (BPTU-SP) Purwokerto dirasa tempat yang pas untuk mendapatkan bahan baku yang terbaik, karena disamping menggunakan alat-alat yang canggih juga diawasi oleh dokter hewan yang berpengalaman dan dijadikan sebagai tempat praktek mahasiswa UNSOED Purwokerto.
                </div>
                <div class="col-md-6">
                   Dibawah pengawasan dinas peternakan kota tegal yang mana setiap satu bulan sekali diambil sampel produk untuk diuji kelayakan di laboratorium dinas peternakan kota tegal. Setelah pengedukasian pentingnya mengkonsumsi minum susu pada masyarakat dirasa cukup kami memberanikan diri untuk membuka kedai susu sapi pertama tepatnya pada tanggal 30 juni 2006 di jalan werkudoro nomor 215 kota tegal yang kami beri nama Maju fresh Milk. Seiring berjalannya waktu usaha kami disukai oleh masyarakat dan kami berusaha semakin berinovasi menambah varian rasa yg bermacam-macam <a href="<?php echo base_url('customer/daftar_menu') ?>">Daftar Menu</a>. Tepat pada tanggal 12 desember 2010 kami membuka cabang yang kedua di jalan werkudoro nomor 168 kota tegal dan kami beri nama Maju Milk Center (MMC) dan beberapa cabang lainnya yang berkembang sampai saat ini.

                </div>
              </div>
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-drink"></i>
                  <h4><a href="#">Apa itu MMC ?</a></h4>
                  <p><?php echo $ttg->jasa ?></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4><a href="#">Service</a></h4>
                  <p><?php echo $ttg->service ?></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-news"></i>
                  <h4><a href="#">Informasi</a></h4>
                  <p><?php echo $ttg->berita ?></p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
      <?php endforeach; ?>
        </div>

      </div>
    </section><!-- End About Section -->

    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Gallery</h2>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/assets_pengunjung/img/gallery/gambar5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?php echo base_url() ?>assets/assets_pengunjung/img/gallery/gambar5.jpg" data-gall="portfolioGallery" class="venobox"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/assets_pengunjung/img/gallery/gambar6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?php echo base_url() ?>assets/assets_pengunjung/img/gallery/gambar6.jpg" data-gall="portfolioGallery" class="venobox"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?php echo base_url() ?>assets/assets_pengunjung/img/gallery/gambar7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="<?php echo base_url() ?>assets/assets_pengunjung/img/gallery/gambar7.jpg" data-gall="portfolioGallery" class="venobox"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Contact</h2>
        </div>

        <div class="row">
            <?php foreach ($identitas as $id) : ?>

          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-time"></i>
                  <h3>Open Hours</h3>
                  <p><?php echo $id->operasional ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p><?php echo $id->email ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p><?php echo $id->telp ?></p>
                </div>
              </div>
            </div>

          </div>
        <?php endforeach; ?>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  