  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Mi Muhammadiyah <br>Kalipepe</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!--<li class="nav-item menu-open">
            <a href="https://adminlte.io/themes/v3/" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Template</p>
            </a>
          </li>-->
          <li class="nav-header">Menu</li>
          <li class="nav-item">
            <a href="<?php echo base_url('dashboard'); ?>" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p>Dashboard</p>
            </a>
          </li>
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
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>