<?php  
include '../koneksi_db.php'; 
  
// mengaktifkan session 
session_start(); 
  
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login 
if($_SESSION['status'] !="login"){ 
 header("location:../index.php"); 

} 
   
?> 
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->
  <link rel="stylesheet" href="../assets/bootstrap4.4.1.min.css">
  <link rel="stylesheet" href="../assets/jquery.dataTables1.10.20.min.css">
  <link rel="stylesheet" href="../assets/form-style.css">
  <title>Data Customer</title>
</head>

<body>
    <?php include '../navbar.php'; ?>
<div class="container" style="margin-top: 20px">

  <?php //echo "Hai, selamat datang ". $_SESSION['username']; ?>
 
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            DATA CUSTOMER
          </div>
          <div class="card-body">
            <a href="tambah_kustomer.php" class="btn btn-md btn-success" style="margin-bottom: 20px">TAMBAH DATA</a>
            <table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">Kode Customer</th>
                  <th scope="col">Nama Customer</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Telp</th>
                  <th scope="col">Fax</th>
                  <th scope="col">Email</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php  
                      include('../koneksi_db.php'); 
                      $no = 1; 
                      $query = mysqli_query($connection,
                      "
                      SELECT * FROM m_kustomer                     
                      
                      
                      "); 
                      while($row = mysqli_fetch_array($query)){ 
                  ?>
                <tr>
                  <td>
                    <?php echo $no++ ?>
                  </td>
                  <td>
                    <?php echo $row['id_customer'] ?>
                  </td>
                  <td>
                    <?php echo $row['nama_customer'] ?>
                  </td>
                  <td>
                    <?php echo $row['alamat'] ?>
                  </td>
                  <td>
                    <?php echo $row['telp'] ?>
                  </td>
                  <td>
                    <?php echo $row['fax'] ?>
                  </td>
                  <td>
                    <?php echo $row['email'] ?>
                  </td>
                  <td class="text-center"> <a href="Edit_kustomer.php?id=<?php echo $row['id_customer'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                    <a href="delete_kustomer.php?id=<?php echo $row['id_customer'] ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger">HAPUS</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>



    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> -->
    <script src="../assets/jquery-3.4.1.slim.min.js"></script>
    <script src="../assets/bootstrap.min.js"></script>
    <script src="../assets/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready( function () {
      $('#myTable').DataTable(); 
      } ); 
    </script>
</body>

</html>