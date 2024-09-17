<?php
include ('../koneksi_db.php');

$id_sales = $_GET['id'];
//var_dump($nm_kustomer);
$id_customer = $_POST['id_customer'];
$tgl_sales = $_POST['tgl_sales'];
$do_number = $_POST['do_number'];
$status = $_POST['status'];

$query = "DELETE FROM  m_sales WHERE id_sales = '$id_sales'";
if($connection->query($query))

{
   
    header("location:index.php");
}
else{
    
    echo "Data Insert Gagal dihapus";
}

?>