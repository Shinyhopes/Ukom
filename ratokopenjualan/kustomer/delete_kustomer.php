<?php
include('../koneksi_db.php');

$id_cust = $_GET['id'];

$query = "DELETE FROM m_kustomer WHERE id_customer = '$id_cust'";

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