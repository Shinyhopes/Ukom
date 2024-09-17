<?php
include ('../koneksi_db.php');

$id_sales = $_POST['id_sales'];
//var_dump($nm_kustomer);
$id_customer = $_POST['id_customer'];
$tgl_sales = $_POST['tgl_sales'];
$do_number = $_POST['do_number'];
$status = $_POST['status'];

$query = "UPDATE m_sales SET id_sales='$id_sales',id_customer='$id_customer',tgl_sales='$tgl_sales',do_number='$do_number',status='$status' WHERE id_sales = '$id_sales'";

if($connection->query($query))
{
    //ke halaman index
    header("location: index.php");
}
else{
    //pesan gagal
    echo "Data Insert Gagal diupdate";
}

?>