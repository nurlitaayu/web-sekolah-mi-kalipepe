<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta id="viewport" content="width=device-width, initial-scale=1">
  <title>Mi Muhammadiyah Kalipepe | Data Guru</title>
	<?php $this->load->view('template/head.php'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php $this->load->view('template/navbar.php') ?>

<?php $this->load->view('template/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Guru</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title2 ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <button class="btn btn-xs btn-primary card-title" data-toggle="modal" data-target="#tambah-guru"><i class="fas fa-plus"></i> Tambah Guru</button>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" id="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0 text-center" style="height: 300px;">
              <table class="table table-head-fixed text-nowrap table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nip</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jabatan</th>
                    <th>Pengajar</th>
                    <th>Pendidikan</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <?php $no = 1;
                foreach($guru as $ssw) : ?>
                <tbody>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $ssw->nama_guru ?></td>
                    <td><?= $ssw->nip ?></td>
                    <td><?= $ssw->tempat_lahir ?></td>
                    <td><?= $ssw->tgl_lahir ?></td>
                    <td><?= $ssw->id_jabatan ?></td>
                    <td><?= $ssw->id_mapel ?></td>
                    <td><?= $ssw->pendidikan ?></td>
                    <td><?= $ssw->foto_guru ?></td>
                    <td>
                      <button class="btn btn-sm btn-warning"><i class="fas fa-edit" style="color: #fff;"></i></button>
                      <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                </tbody>
                <?php endforeach ?>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('template/footer.php'); ?>
<script type="text/javascript">
   $('#reservationdate').datetimepicker({
        format: 'L'
    });
</script>
  <script>
  $('#tombolsimpan').on('click',function(){
    var $nama =$('#nama_guru').val();
    var $tempatlahir =$('#tempat_lahir').val();
    var $nip =$('#nip').val();
    var $tgllahir =$('#tgl_lahir').val();
    var $jabatan =$('#id_jabatan').val();
    var $pendidikan =$('#pendidikan').val();
    var $mapel =$('#id_mapel').val();
    var $foto =$('#foto').val();

    $.ajax({
      url:"<?php echo site_url("dataguru/simpan")?>",
      type:"POST",
      success:function(hasil){
        alert(hasil);
      }
    });
  });
  </script>
</body>
</html>
