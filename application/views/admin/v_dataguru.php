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
              <li class="breadcrumb-item active">Data Guru</li>
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
                    <td><?= $ssw->pendidikan ?></td>
                    <td><img src="<?php echo base_url().'assets/foto/fotoguru/'.$ssw->foto_guru ?>" width="100"></td>
                    <td>
                      <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit-guru"><i class="fas fa-edit" style="color: #fff;"></i></button>
                      <!-- <button class="btn btn-sm btn-warning"><i class="fas fa-edit" style="color: #fff;"></i></button> -->
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

<!-- modal tambah guru -->
<div class="modal fade" id="tambah-guru">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Guru</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('dataguru/tambah_guru'); ?>
        <form>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama_guru" class="form-control">
              </div>
              <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control">
              </div>
              <div class="form-group">
                <label>Jabatan</label>
                <select name="id_jabatan" type="text" class="custom-select">
                  <?php foreach($jabatan as $j): ?>
                  <option value="<?= $j->id_jabatan ?>"><?php echo $j->posisi_jabatan ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Nip</label>
                <input type="text" name="nip" class="form-control">
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="text" name="tgl_lahir" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Pendidikan</label>
                <input type="text" name="pendidikan" class="form-control">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <label for="exampleInputFile">Foto</label>
              <img src="">
            </div>
            <div class="col-sm-9">
              <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="foto_guru" class="custom-file-input" >
                    <label class="custom-file-label" for="foto">Choose file</label>
                  </div>
                </div>
            </div>
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Save changes</button>
        <?php echo form_close();?>
      </div>
  </div>
  </form>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal tambah guru -->

<?php $this->load->view('template/footer.php'); ?>
<script>
      //Date picker
    $('#reservationdate').datetimepicker({
        format: 'YYYY-MM-DD'
    });

</script>
 
</body>
</html>
