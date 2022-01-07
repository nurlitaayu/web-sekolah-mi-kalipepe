<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta id="viewport" content="width=device-width, initial-scale=1">
  <title>Mi Muhammadiyah Kalipepe | Daftar Kategori</title>
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
            <h1 class="m-0">Daftar Kategori</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Kategori</li>
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
              <button class="btn btn-xs btn-primary card-title" data-toggle="modal" data-target="#modal_form"><i class="fas fa-plus"></i> Tambah Kategori</button>
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
              <table class="table table-head-fixed text-nowrap table-bordered table-hover table-sm">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="tbody" style="">
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

<div class="modal fade" id="modal_form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Default Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form" action="#">
          <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" id="kategori" class="form-control" placeholder="Masukan kategori baru">
          </div>  
        </form>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default swalDefaultSuccess" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnSave">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script src="<?php echo base_url('assets/main/vendor/jquery/jquery-2.1.4.min.js')?>"></script>

<!-- Create Data Ajax -->
<script>
  $(document).on("click", "#btnSave", function(e){
    e.preventDefault();
    var kategori = $('#kategori').val();

    if(kategori == "" ){
      alert("Kolom tidak boleh kosong");
    }else{
      $.ajax({
        url: "<?php echo base_url('cms/tambah_kategori') ?>",
        type: "post",
        dataType: "json",
        data:{
          kategori: kategori
        },
        success: function(data){
          console.log(data);
          $('#modal_form').modal('hide');
          alert("Data Berhasil Disimpan");
        }
      });
      $("#form")[0].reset();
    }
  });
</script>

<!-- Read Data Ajax -->
<script>
  function read_kategori(){
    $.ajax({
      url: "<?php echo base_url('cms/tampil_kategori') ?>",
      type: "post",
      dataType: "json",
      success: function(data){
        var tbody = "";

        for(var key in data){
          tbody += "<tr>";
          tbody += "<td>"+ data[key]['id_kategori']+"</td>";
          tbody += "<td>"+ data[key]['kategori']+"</td>";
          tbody += `<td>
                      <button class="btn btn-xs btn-warning" id="edit" value="${data[key]['id_kategori']}"><i class="fas fa-edit" style="color: #fff;"></i></button>&nbsp
                      <button class="btn btn-xs btn-danger" id="delete" value="${data[key]['id_kategori']}"><i class="fas fa-trash"></i></button>
                   </td>`
          tbody += "</tr>";
        }
        $("#tbody").html(tbody)
      }
    });
  }
  read_kategori();
</script>
<?php $this->load->view('template/footer.php'); ?>
</body>
</html>
