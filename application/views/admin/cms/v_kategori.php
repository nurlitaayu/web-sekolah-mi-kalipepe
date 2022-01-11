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

<!-- Modal Tambah -->
<div class="modal fade" id="modal_form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Kategori</h4>
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
<!-- End Modal Tambah -->

<!-- Modal Edit -->
<div class="modal fade" id="edit_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Kategori</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit_form" method="post" action="#">
          <input type="hidden" id="edit_modal_id" value="">
          <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" id="kategori_edit" class="form-control" placeholder="Masukan kategori baru">
          </div>  
        </form>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default swalDefaultSuccess" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="updateK">Update</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- End Modal Edit -->



<?php $this->load->view('template/footer') ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
          read_kategori();
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
        var no = "1";

        for(var key in data){
          tbody += "<tr>";
          tbody += "<td>"+ no++ +"</td>";
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

  //Update Kategori
  $(document).on("click", "#edit", function(e){
    e.preventDefault();

    var edit_id = $(this).attr("value");

    if (edit_id == ""){
      alert("Edit id required");
    }else{
      $.ajax({
        url: "<?php echo base_url('cms/edit_kategori') ?>",
        type: "post",
        dataType: "json",
        data: {
          edit_id: edit_id
        },
        success: function(data){
          if (data.responce == "success") {
              $('edit_modal').modal('show');
              $('edit_modal_id').val(data.post.id);
              $('kategori_edit').val(data.post.kategori);
          }else{
            alert("Error");
          }
        }
      });
    }
  });

  //Delete Kategori
  $(document).on("click", "#delete", function(e){
    e.preventDefault();

    var del_id = $(this).attr("value");
    
    if (del_id == "") {
      alert("Delete id required");
    }else{
      const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger mr-2'
      },
      buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
        $.ajax({
          url: "<?php echo base_url('cms/hapus_kategori') ?>",
          type: "post",
          dataType: "json",
          data: {
            del_id: del_id
          },
          success: function(data){
            read_kategori();
            if (data.responce == "success"){
              swalWithBootstrapButtons.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
              )
            }
          }
        });
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Cancelled',
          'Your imaginary file is safe :)',
          'error'
        )
      }
    })
    }
  })
</script>


</body>
</html>
