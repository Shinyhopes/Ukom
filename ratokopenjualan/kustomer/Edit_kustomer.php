<?php
include('../koneksi_db.php');

$id = $_GET['id'];
$queryCustomer = "SELECT * FROM m_kustomer WHERE id_customer = '$id' LIMIT 1";
$resultCustomer = mysqli_query($connection, $queryCustomer);
$rowCustomer = mysqli_fetch_array($resultCustomer);
?>


<!doctype html>
<htmL lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Customer</title>
    </head> 

    <body>
    <?php include '../navbar.php'; ?>
    
        <div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            Edit kustomer
                        </div>


                        <div class="card-body">
                            <form name="simpan_kustomer" action="update_kustomer.php" method="POST" >
                                <div class="form-group">
                                    <Label>ID kustomer :</Label>
                                    <input type="text" name="id_customer" value="<?php echo $rowCustomer['id_customer'] ?>" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>Nama kustomer :</Label>
                                    <input type="text" name="nama_kustomer" value="<?php echo $rowCustomer['nama_customer'] ?>" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>Alamat :</Label>
                                    <input type="text" name="alamat" value="<?php echo $rowCustomer['alamat'] ?>" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>Telp  :</Label>
                                    <input type="text" name="telp" value="<?php echo $rowCustomer['telp'] ?>" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>Fax :</Label>
                                    <input type="text" name="fax" value="<?php echo $rowCustomer['fax'] ?>" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>email  :</Label>
                                    <input type="text" name="email" value="<?php echo $rowCustomer['email'] ?>" class="form-control" required> </input>
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