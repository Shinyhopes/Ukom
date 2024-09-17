<?php
include('../koneksi_db.php');

$id = $_GET['id'];
$queryCustomer = "SELECT * FROM m_sales WHERE id_sales = '$id' LIMIT 1";
$resultCustomer = mysqli_query($connection, $queryCustomer);
$rowCustomer = mysqli_fetch_array($resultCustomer);
?>


<!doctype html>
<htmL lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Sales</title>
    </head> 

    <body>
    <?php include '../navbar.php'; ?>
    
        <div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            Edit Sales
                        </div>


                        <div class="card-body">
                            <form name="simpan_sales" action="update_sales.php" method="POST" >
                                <div class="form-group">
                                    <Label>ID Sales :</Label>
                                    <input type="text" name="id_sales" value="<?php echo $rowCustomer['id_sales'] ?>" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>ID customer :</Label>
                                    <input type="text" name="id_customer" value="<?php echo $rowCustomer['id_customer'] ?>" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>Tgl Sales (tahun/bulan/hari) :</Label>
                                    <input type="text" name="tgl_sales" value="<?php echo $rowCustomer['tgl_sales'] ?>" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>DO number  :</Label>
                                    <input type="text" name="do_number" value="<?php echo $rowCustomer['do_number'] ?>" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>Status :</Label>
                                    <input type="text" name="status" value="<?php echo $rowCustomer['status'] ?>" class="form-control" required> </input>
                                </div>


                                <button type="submit" class="btn btn-success" >SIMPAN </button>

                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </body>
</htmL>