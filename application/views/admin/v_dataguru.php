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
      <div class="modal fade" id="tambah-guru">
        <div class="modal-dialog modal-lg">
        <!--- <form action="<?= base_url('dataguru/tambah_aksi')?>"method="POST"> -->
          <div class="modal-content">
            
            <div class="modal-header">
              <h4 class="modal-title">Tambah Guru</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" id="nama_guru" class="form-control">
                                       
                    </div>
                    <div class="form-group">
                      <label>Tempat Lahir</label>
                      <input type="text" id="tempat_lahir" class="form-control">
                      
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nip</label>
                      <input type="text" id="nip" class="form-control">
                      
                    </div>
                    <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" id="tgl_lahir" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Jabatan</label>
                        <select type="text" id="id_jabatan" class="custom-select">
                          <option>option 1</option>
                          <option>option 2</option>
                        </select>
                        
                      </div>
                      <div class="form-group">
                        <label>Pendidikan</label>
                        <input type="text" id="pendidikan" class="form-control">
                        
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Pengajar</label>
                        <select type="text" id="id_mapel" class="custom-select">
                          <option>option 1</option>
                          <option>option 2</option>
                        </select>
                        
                      </div>
                      <label for="exampleInputFile">Foto</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto">
                            <label class="custom-file-label" for="foto">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                        
                    </div>
                  </div>
                  <div class="form-group">
                  </div>
                <!-- </form> -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="tombolsimpan">Save changes</button>
             
            </div>
            
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
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
