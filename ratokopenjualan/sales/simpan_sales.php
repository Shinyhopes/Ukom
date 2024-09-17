<?php
include ('../koneksi_db.php');

$id_sales = $_POST['id_sales'];
//var_dump($nm_kustomer);
$id_customer = $_POST['id_customer'];
$tgl_sales = $_POST['tgl_sales'];
$do_number = $_POST['do_number'];
$status = $_POST['status'];

$query = "INSERT INTO  m_sales(id_sales,id_customer,tgl_sales,do_number,status)values('$id_sales', '$id_customer', '$tgl_sales', '$do_number', '$status')";
//koneksi inset ke dalam database
if($connection->query($query))

{
    //ke halaman index
    header("location: index.php");
}
else{
    //pesan gagal
    echo "Data Insert Gagal disimpan";
}

?>