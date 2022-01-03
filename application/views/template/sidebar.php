  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    
    <a href="<?php echo base_url('home') ?>" class="brand-link">
      <div class="brand">
        <img src="<?php echo base_url('assets/main/logo.png') ?>">
        <h1 class="brand-name">MI MUHAMMADIYAH <br>KALIPEPE</h1>
      </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <!-- ojo dihapus iki gae nggolek komponen penting -->
          <li class="nav-item menu-open">
            <a href="https://adminlte.io/themes/v3/" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Template</p>
            </a>
          </li>
          <!-- sek butuh soale durung mari template e -->

          <li class="nav-item">
            <a href="<?php echo base_url('dashboard'); ?>" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>Content Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('cms') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('cms/kategori') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Kategori</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Menu</li>
          <li class="nav-item">
            <a href="<?php echo base_url('dataguru'); ?>" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>Data Guru</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('datamapel'); ?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Data Mata Pelajaran</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('datajabatan'); ?>" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>Data Jabatan</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>