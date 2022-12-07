<?php 
	   
// menghubungkan dengan koneksi

        include "../config/koneksi.php";
		
// mengaktifkan session php

        session_start();
        if($_SESSION['status'] !="login"){
            header("location:../");
        }
	
              
//Update kategori

if(isset($_POST['nama_kategori'])){
	$id_kategori=$_POST['id_kategori']; 
	$nama_kategori=htmlentities($_POST['nama_kategori']);
	
	$update=mysqli_query($koneksi, "UPDATE kategori  SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'");	
	if($update){
		header("location:kategori-list.php?pesan=Update kategori berhasil");
	}else{
		header("location:kategori-list.php?pesan=Update kategori gagal");
	}
}else{
	unset($_POST['nama_kategori']);
}
			
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<head>
    <title>Suba Hospital | List Kategori</title>
    <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="page-top">

<!-- Page Wrapper -->
  <div id="wrapper">
  	<?php include "sidebar.php"; ?>
    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
      
      <?php include "topbar.php";?>
      
      	<!-- Begin Page Content -->
        <div class="container-fluid">
        <div class="row">
        <div class="col-lg-6">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Kategori</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <?php 
            	if(isset($_GET['pesan'])){
                	echo '<i class="fas fa-info-circle"></i> '.$_GET['pesan'].'';
            	}
            	?>
                <br/>
              <?php $sql = mysqli_query($koneksi, "select * from kategori");?>
              <?php $no = 1; ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Action</th>
                     </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php while ($row=mysqli_fetch_array($sql)){ ?>
                    <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $row['judul'];?></td>
                      <td><a href="kategori-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-icon-split" style="font-size: 12px;"><span class="icon text-white-50"><i class="fas fa-edit"></i></span><span class="text">Edit</span></a>  <a href="kategori-hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-icon-split" style="font-size: 12px;" onClick="return confirm ('Apakah anda yakin ingin menghapus data ini?')"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Hapus</span></a></td>
                    </tr>
                    <?php $no++ ?>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          </div>
          <div class="col-lg-6">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit kategori</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <?php 
			  
//menjalankan query

				$id = $_GET['id'];
				$sqlkat = mysqli_query($koneksi, "select * from kategori WHERE id='$id'");
				
//menampilkan data

				$rowkat = mysqli_fetch_array($sqlkat);
			  ?>
               <form class="user" action="kategori-edit.php" method="post">
                    <div class="form-group">
                      <input type="text" name="judul" class="form-control" value="<?php echo $rowkat['nama_kategori'];?>" id="exampleInputJudul" placeholder="Judul Kategori...">
                    </div>
                    <div class="form-group">
                    <label>Status</label>
                      <select style="width:200px;" class="form-control" id="exampleStatus" name="status">
                      	<?php if($rowkat['status']==0){ ?>
                      	<option value="0" selected>Draft</option>
                        <option value="1">Published</option>
                        <?php }else{ ?>
                        <option value="0">Draft</option>
                        <option value="1" selected>Published</option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $rowkat['id']?>">
                    <button style="width:200px; float:right;" class="btn btn-primary btn-block">
                      Update
                    </button>
                    </div>
                </form>
              </div>
            </div>
          </div>
          </div>
          </div>
        </div>
         <!-- End Page Content -->
      </div>
      <!-- End Content Wrapper -->
     <?php include "footer.php";?>

    </div>
    <!-- End Main Content -->
    </div>
    <!-- End Page Wrapper -->
   <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
</body>
</html>