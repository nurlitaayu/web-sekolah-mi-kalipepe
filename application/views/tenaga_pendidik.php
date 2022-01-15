<?php $this->load->view('landingpage/a_head.php'); ?>
<?php $this->load->view('landingpage/a_topbar.php'); ?>
<?php $this->load->view('landingpage/a_navbar.php'); ?>

<!-- ======= Tenaga Pendidik Section ======= -->
<section id="tenaga">
  <div class="container">
    <div class="title-guru">
      <h2>Tenaga Pendidik</h2>
    </div>
    <div class="row">
      <?php foreach ($guru as $g) { ?>
      <div class="col-md-2">
        <div class="teacher2">
          <img src="<?php echo base_url().'assets/foto/fotoguru/'.$g->foto_guru ?>" class="teacher2-img" alt="...">
          <h1><?php echo $g->nama_guru ?></h1>
          <p><?php echo $g->posisi_jabatan ?></p>
        </div>
      </div>
      <?php } ?>
    </div> 
    <!-- <div class="more-button">
      <a href="<?php echo base_url('tenagapendidik'); ?>" class="btn btn-more" type="button">Lihat Tenaga Pendidik</a>
    </div>   -->
  </div>
</section>



<?php $this->load->view('landingpage/a_footer.php'); ?>
