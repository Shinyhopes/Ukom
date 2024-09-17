<?php
include 'koneksi_db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($connection, "select * from m_user where username='$username' and 
password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: kustomer");
} else {
    // Mengirim pesan peringatan jika login gagal
    header("location:index.php?pesan=Username atau Password salah!");
}

?>