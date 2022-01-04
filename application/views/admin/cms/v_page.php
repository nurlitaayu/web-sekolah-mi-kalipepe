<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta id="viewport" content="width=device-width, initial-scale=1">
  <title>Mi Muhammadiyah Kalipepe | Pages</title>
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
            <h1 class="m-0">Pages</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pages</li>
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
              <button class="btn btn-xs btn-primary card-title" data-toggle="modal" data-target="#tambah-guru"><i class="fas fa-plus"></i> Create Pages</button>
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
                    <th>Title</th>
                    <th>Published</th>
                    <th>Created</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>About</td>
                    <td>v</td>
                    <td>Jan 1, 2022</td>
                    <td>
                      <button class="btn btn-sm btn-warning"><i class="fas fa-edit" style="color: #fff;"></i></button>
                      <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                  </tr>
                </tbody>
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

<!-- /.content-wrapper -->
<div class="modal fade" id="tambah-guru">
  <div class="modal-dialog modal-lg">
  <!--- <form action="<?= base_url('dataguru/tambah_aksi')?>"method="POST"> -->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Page</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Page Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label>Page Body</label>
              <textarea id="ckeditor"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Select Picture</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </div>
  </div>
</div>
<!-- /.modal -->
<script type="text/javascript" src="<?php echo base_url('assets/main/vendor/ckeditor/ckeditor.js') ?>"></script>
<?php $this->load->view('template/footer.php'); ?>
<script>
var ckeditor = CKEDITOR.replace('ckeditor',{
      height:'400px'
});

CKEDITOR.disableAutoInline = true;
CKEDITOR.inline('editable');
</script>
</body>
</html>
