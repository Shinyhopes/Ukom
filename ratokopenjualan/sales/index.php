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
  <title>Data Sales</title>
</head>

<body>
    <?php include '../navbar.php'; ?>
<div class="container" style="margin-top: 20px">

  <?php //echo "Hai, selamat datang ". $_SESSION['username']; ?>
 
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            DATA SALES
          </div>
          <div class="card-body">
            <a href="tambah_sales.php" class="btn btn-md btn-success" style="margin-bottom: 20px">TAMBAH DATA</a>
            <table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">Id Sales</th>
                  <th scope="col">Id Customer</th>
                  <th scope="col">tgl Sales (tahun,bulan,hari)</th>
                  <th scope="col">do number</th>
                  <th scope="col">status</th>
                  <th scope="col">aksi</th>

                </tr>
              </thead>
              <tbody>
                <?php  
                      include('../koneksi_db.php'); 
                      $no = 1; 
                      $query = mysqli_query($connection,
                      "
                      SELECT * FROM m_sales                     
                      
                      
                      "); 
                      while($row = mysqli_fetch_array($query)){ 
                  ?>
                <tr>
                  <td>
                    <?php echo $no++ ?>
                  </td>
                  <td>
                    <?php echo $row['id_sales'] ?>
                  </td>
                  <td>
                    <?php echo $row['id_customer'] ?>
                  </td>
                  <td>
                    <?php echo $row['tgl_sales'] ?>
                  </td>
                  <td>
                    <?php echo $row['do_number'] ?>
                  </td>
                  <td>
                    <?php echo $row['status'] ?>
                  </td>
                 
                  <td class="text-center"> <a href="Edit_sales.php?id=<?php echo $row['id_sales'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                    <a href="delete_sales.php?id=<?php echo $row['id_sales'] ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger">HAPUS</a>
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