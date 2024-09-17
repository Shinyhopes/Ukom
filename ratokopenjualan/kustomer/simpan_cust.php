<?php
include('../koneksi_db.php');

$nm_kustomer = $_POST['nama_kustomer'];
#var_dump($nm_kustomer);
$alamat = $_POST['alamat'];
$alamat = $_POST['telp'];
$alamat = $_POST['fax'];
$alamat = $_POST['email'];

$query = "INSERT INTO m_kustomer(nama_customer,alamat,telp,fax,email)VAlUES('$nm_kustomer','$alamat','$telp','$fax','$email')";

//Kondisi insert ke dalam database
if($connection->query($query))

{
    // ke halaman index
    header("location:index.php");
}else
{
    // pesan gagal
    echo "Data Insert Gagal Disimpan !";
}

?>