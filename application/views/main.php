<?php $this->load->view('landingpage/a_head.php'); ?>
<?php $this->load->view('landingpage/a_topbar.php'); ?>
<?php $this->load->view('landingpage/a_navbar.php'); ?>

  <div id="hero" class="carousel carousel-dark slide section-body" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="https://eitrawmaterials.eu/wp-content/uploads/2019/05/Label-brochure-1.jpg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="https://internationaljournalofresearch.files.wordpress.com/2019/11/www.usnews.com_.jpg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
  </div>

  <!-- ======= About Us Section ======= -->
  <section id="profile" >
    <div class="container">
      <div class="section-title">
        <h2>Profile Sekolah</h2>
      </div>
      <div class="row">
        <div class="col-lg-6 embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/rZmATFSqC38" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content section-body">
          <h3>Judul Profile.</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div>
    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Prestasi Section ======= -->
  <section id="prestasi">
    <div class="container">
      <div class="section-title">
        <h2>Prestasi</h2>
      </div>
        <div class="card-group">
          <?php foreach ($prestasi as $pres) { 
          ?>
          <div class="card">
            <img src="<?php echo base_url().'assets/foto/fotopost/'.$pres->foto_post ?>"class="card-img-top card-picture" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $pres->judul_post ?></h5>
              <p class="card-text"><?php echo $pres->isi_post ?></p>
              <p class="card-text"><small class="text-muted"><?php echo $pres->tanggal_post ?></small></p>
            </div>
          </div>
          <?php } ?>
        </div>
      <div class="more-button">
        <a href="" class="btn btn-more" type="button">Lihat Prestasi Lain</a>
      </div>  
    </div>
  </section><!-- End About Us Section -->

<!-- ======= Tenaga Pendidik Section ======= -->
<section id="tenaga">
  <div class="container">
    <div class="section-title">
      <h2>Tenaga Pendidik</h2>
    </div>
    <div class="row">
      <?php foreach ($guru as $g) { ?>
      <div class="col-md-4">
        <div class="teacher">
          <img src="<?php echo base_url().'assets/foto/fotoguru/'.$g->foto_guru ?>" class="teacher-img" alt="...">
          <h1><?php echo $g->nama_guru ?></h1>
          <p><?php echo $g->posisi_jabatan ?></p>
        </div>
      </div>
      <?php } ?>
    </div> 
    <div class="more-button">
      <!-- button halaman tenaga pendidik -->
      <a href="<?php echo base_url('home/tenagapendidik'); ?>" class="btn btn-more" type="button">Lihat Tenaga Pendidik</a>
      
    </div>  
  </div>
</section>

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
  <div class="container">
    <div class="section-title">
      <h2>Gallery</h2>
    </div>
  <div class="gallery-slider swiper">
    <div class="swiper-wrapper align-items-center">
      <div class="swiper-slide">
        <a class="gallery-lightbox" href="assets/img/gallery/gallery-1.jpg">
          <img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt="">
        </a>
      </div>
      <div class="swiper-slide">
        <a class="gallery-lightbox" href="assets/img/gallery/gallery-2.jpg">
          <img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt="">
        </a>
      </div>
      <div class="swiper-slide">
        <a class="gallery-lightbox" href="assets/img/gallery/gallery-3.jpg">
          <img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt="">
        </a>
      </div>
      <div class="swiper-slide">
        <a class="gallery-lightbox" href="assets/img/gallery/gallery-4.jpg">
          <img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt="">
        </a>
      </div>
      <div class="swiper-slide">
        <a class="gallery-lightbox" href="assets/img/gallery/gallery-5.jpg">
          <img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt="">
        </a>
      </div>
      <div class="swiper-slide">
        <a class="gallery-lightbox" href="assets/img/gallery/gallery-6.jpg">
          <img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt="">
        </a>
      </div>
      <div class="swiper-slide">
        <a class="gallery-lightbox" href="assets/img/gallery/gallery-7.jpg">
          <img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt="">
        </a>
      </div>
      <div class="swiper-slide">
        <a class="gallery-lightbox" href="assets/img/gallery/gallery-8.jpg">
          <img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt="">
        </a>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  </div>
</section>

<!-- ======= Berita Section ======= -->
<section id="tenaga">
  <div class="container">
    <div class="section-title">
      <h2>Berita</h2>
    </div>
    <?php foreach ($berita as $news): ?>
    <div class="card mb-3" style="max-width: 1080px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="<?php echo base_url().'assets/foto/fotopost/'.$news->foto_post ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><strong><?php echo $news->judul_post ?></strong></h5>
            <p class="card-text">
              <?php echo substr($news->isi_post,0,250) ?>
              <a href="">Baca Selengkapnya</a>    
            </p>
            <p class="card-text"><small class="text-muted"><?php echo $news->tanggal_post ?></small></p>
          </div>
        </div>
      </div>
    </div>      
    <?php endforeach ?>
    <div class="more-button">
      <a href="" class="btn btn-more" type="button">Lihat Berita Lain</a>
    </div>
  </div>
</section>

<?php $this->load->view('landingpage/a_footer.php'); ?>
</body>
</html>