<!DOCTYPE html>
<html>

<head>
  <title>Membuat Form Validasi dengan Javascript</title>
  <link rel="stylesheet" type="text/css" href="assets/style.css" />
  <style>
    body {
      background-color: #808080; /* Warna abu-abu */
    }
  </style>
</head>

<body>
  <br />
  <br />
  <center>
    <h2>Aplikasi Pengadaan Barang dan Perlengkapan Rumah Tangga Pada Koperasi Karyawan</h2>
    <h3>PT. Maju Bersama</h3>
  </center>
  <br />
  <div class="login">
    <br />
    <form action="Login.php" method="post" onSubmit="return validasi()">
      <div>
        <label>Username:</label>
        <input type="text" name="username" id="username" />
      </div>
      <div>
        <label>Password:</label>
        <input type="password" name="password" id="password" />
      </div>
      <?php
        // Cek apakah ada pesan peringatan dari Login.php
        if (isset($_GET['pesan'])) {
          echo '<p style="color:red; text-align:left;font-size: 12px;">' . $_GET['pesan'] . '</p>';
        }
        ?>
      <div>
        <input type="submit" value="Login" class="tombol" />
      </div>
    </form>
  </div>
</body>

<script type="text/javascript">
  function validasi() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username != "" && password != "") {
      return true;
    } else {
      alert("Username dan Password harus di isi !");
      return false;
    }
  }
</script>

</html>
