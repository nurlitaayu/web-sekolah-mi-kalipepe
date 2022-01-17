<?php $this->load->view('landingpage/a_head.php'); ?>
<?php $this->load->view('landingpage/a_topbar.php'); ?>
<?php $this->load->view('landingpage/a_navbar.php'); ?>
<!-- ======= Tenaga galeri Section ======= -->
<section id="galeri">
  <div class="container">
    <div class="title-guru">
      <h2>Galeri Sekolah</h2>
    </div>
    <div class="row">
      <?php foreach ($galeri as $g) { ?>
      <div class="col-md-2">
        <div class="teacher2">
          <img src="<?php echo base_url().'assets/foto/fotogaleri/'.$g->gambar ?>" class="teacher2-img" alt="...">
          <h1><?php echo $g->judul ?></h1>
          <p><?php echo $g->tanggal_gl ?></p>
        </div>
      </div>
      <?php } ?>
    </div> 

  </div>
</section>


<?php $this->load->view('landingpage/a_footer.php'); ?>
</body>
</html>