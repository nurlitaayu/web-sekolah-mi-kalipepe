<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta id="viewport" content="width=device-width, initial-scale=1">
  <title>Mi Muhammadiyah Kalipepe | Data Jabatan</title>
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
            <h1 class="m-0">Data Jabatan</h1>
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
              <button class="btn btn-xs btn-primary card-title" data-toggle="modal" data-target="#tambah-guru"><i class="fas fa-plus"></i> Tambah Jabatan</button>

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
                    <th>Jabatan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <?php $no = 1;
                foreach($jabatan as $ssw) : ?>
                <tbody>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $ssw->posisi_jabatan ?></td>                    
                    <td>
                      <button class="btn btn-sm btn-warning"><i class="fas fa-edit" style="color: #fff;"></i></button>
                      <button class="btn btn-sm btn-danger" onClick="delete_data(<?=$ssw->id_jabatan;?>)"><i class="fas fa-trash"></i></button>
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
  <?php $this->load->view('template/footer.php'); ?>
  <!-- /.content-wrapper -->
      <div class="modal fade" id="tambah-guru">
        <div class="modal-dialog modal-lg">
        <!--- <form action="<?= base_url('dataguru/tambah_aksi')?>"method="POST"> -->
          <div class="modal-content">
            
            <div class="modal-header">
              <h4 class="modal-title">Tambah Jabatan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <?php echo form_open_multipart('datajabatan/simpan'); ?>
              <form id="myForm">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Posisi Jabatan</label>
                      <input type="text" name="posisi_jabatan" class="form-control">                                      
                    </div>                
                <!-- </form> -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="tombolsimpan">Save changes</button>
              <?php echo form_close();?>
            </div>
            
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

  <!-- <script>
   function delete_data(id){
    alert('sadfasdf');
     $.ajax({
        url:"<?php echo site_url('Datajabatan/delete')?>",    
        dataType : "JSON",          
        type : "POST",
        data: {id_jabatan: id},
        success: function(hasil){     

        }
      });
  }

  $('#tombolsimpan').on('click',function(){    
    var posisi_jabatan =$('#posisi_jabatan').val();
    $.ajax({
      url:"<?php echo site_url('Datajabatan/simpan')?>",    
      dataType : "JSON",          
      type : "POST",
      data: {posisi_jabatan: posisi_jabatan},
      success:function(hasil){
        window.location.reload();

      }
    });
  });


  </script> -->
</body>
</html>
