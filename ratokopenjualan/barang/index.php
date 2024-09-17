<?php  
include '../koneksi_db.php'; 
  
// mengaktifkan session 
session_start(); 
  
// cek apakah user telah login, jika belum login maka dialihkan ke halaman login 
if($_SESSION['status'] !="login"){ 
 header("location:../index.php"); 
} 
?> 
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../assets/bootstrap4.4.1.min.css">
  <link rel="stylesheet" href="../assets/jquery.dataTables1.10.20.min.css">
  <link rel="stylesheet" href="../assets/form-style.css">
  <title>Data Barang</title>
</head>

<body>
    <?php include '../navbar.php'; ?>
<div class="container" style="margin-top: 20px">

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            DATA BARANG
          </div>
          <div class="card-body">
            <a href="tambah_barang.php" class="btn btn-md btn-success" style="margin-bottom: 20px">TAMBAH DATA</a>
            <table class="table table-bordered" id="myTable">
              <thead>
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">Id Barang</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Varian</th>
                  <th scope="col">Harga Beli</th>
                  <th scope="col">Harga Jual</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php  
                      include('../koneksi_db.php'); 
                      $no = 1; 
                      $query = mysqli_query($connection, "SELECT * FROM m_barang"); 
                      while($row = mysqli_fetch_array($query)){ 
                  ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row['id_barang'] ?></td>
                  <td><?php echo $row['nama'] ?></td>
                  <td><?php echo $row['varian'] ?></td>
                  <td><?php echo $row['harga_beli'] ?></td>
                  <td><?php echo $row['harga_jual'] ?></td>
                  <td class="text-center"> 
                    <a href="edit_barang.php?id=<?php echo $row['id_barang'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                    <a href="delete_barang.php?id=<?php echo $row['id_barang'] ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger">HAPUS</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script src="../assets/jquery-3.4.1.slim.min.js"></script>
    <script src="../assets/bootstrap.min.js"></script>
    <script src="../assets/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready( function () {
      $('#myTable').DataTable(); 
    }); 
    </script>
</body>
</html>
