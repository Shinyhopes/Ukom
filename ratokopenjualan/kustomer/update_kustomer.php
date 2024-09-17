<?php
include('../koneksi_db.php');

$id_kustomer = $_POST['id_customer'];
$nm_kustomer = $_POST['nama_kustomer'];
#var_dump($nm_kustomer);
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$fax = $_POST['fax'];
$email = $_POST['email'];

$query = "UPDATE m_kustomer SET nama_customer='$nm_kustomer', alamat='$alamat', telp='$telp', fax='$fax', email='$email' WHERE id_customer = '$id_kustomer'";

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