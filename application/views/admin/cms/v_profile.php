<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta id="viewport" content="width=device-width, initial-scale=1">
  <title>Mi Muhammadiyah Kalipepe | Profile Page</title>
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
            <h1 class="m-0">Profile Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Page</li>
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
              <button class="btn btn-xs btn-primary card-title" data-toggle="modal" data-target="#add_modal"><i class="fas fa-plus"></i> Buat Postingan</button>
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
              <table class="table table-sm table-head-fixed text-nowrap table-bordered table-hover">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th width="10%">Kategori</th>
                    <th width="20%">Judul</th>
                    <th width="22%">Isi Post</th>
                    <th width="15%">Tanggal Post</th>
                    <th width="15%">Foto</th>
                    <th width="13%">Aksi</th>
                  </tr>
                </thead>
                <!-- <?php foreach ($post as $p) { 
                  $no = 1; ?>
                <tbody>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->kategori ?></td>
                    <td><?php echo $p->judul_post ?></td>
                    <td><?php echo substr($p->isi_post,0, 50) ?></td>
                    <td><?php echo $p->tanggal_post ?></td>
                    <td><img src="<?php echo base_url().'assets/foto/fotopost/'.$p->foto_post ?>" width="100"></td>
                    <td>
                      <!-- button edit -->
                      <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit-guru<?php echo $p->id_post; ?>" ><i class="fas fa-edit" style="color: #fff;"></i></button>
                      <!-- button delete -->
                      <a class="btn btn-sm btn-danger" href="<?php echo base_url()?>Dataguru/hapus_guru/<?php echo $p->id_post; ?><?php echo $p->foto_post ?>" ><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
                <?php } ?> -->
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

<!-- Modal Tambah -->
<div class="modal fade" id="add_modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Buat Postingan Baru</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('cms/tambah_post'); ?>
          <div class="form-group">
            <label>Judul Halaman</label>
            <input type="text" name="judul_post" class="form-control" placeholder="Masukkan Judul">
            <input type="hidden" name="tanggal_post" value="<?php echo date("Y-m-d"); ?>">
          </div>
          <div class="row">
            <div class="col-sm-8">
              <div class="form-group">
                <label>Gambar Postingan</label>
                <div class="custom-file">
                  <input type="file" name="foto_post" class="custom-file-input" required>
                  <label class="custom-file-label" for="foto">choose file</label>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Kategori</label>
                <select name="id_kategori" type="text" class="custom-select">
                  <option value="carousel">Carousel</option>
                  <option value="carousel">Profile</option>
                </select>
              </div>
            </div>
            <div class="col-sm-2">
              <label>Embed Video</label>
            </div>
            <div class="col-sm-10">
              <input type="text" name="embed_video" class="form-control" placeholder="Masukkan link embed youtube">
            </div>
          </div>          
          <div class="form-group">
            <label>Isi Post</label>
            <textarea class="form-control" id="ckeditor" name="isi_post"></textarea>
          </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default swalDefaultSuccess" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btnSave">Simpan Post</button>
        <?php echo form_close();?>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- End Modal Tambah -->


<?php $this->load->view('template/footer.php'); ?>
<script type="text/javascript" src="<?php echo base_url('assets/main/vendor/ckeditor/ckeditor.js') ?>"></script>
<script>
var ckeditor = CKEDITOR.replace('ckeditor',{
      height:'400px'
});

CKEDITOR.disableAutoInline = true;
CKEDITOR.inline('editable');
</script>
</body>
</html>
