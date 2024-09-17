<!doctype html>
<htmL lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Customer</title>
    </head> 

    <body>
    <?php include '../navbar.php'; ?>
        <div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            Tambah kustomer
                        </div>

                        <div class="card-body">
                            <form name="simpan_kustomer" action="simpan_cust.php" method="POST" >
                                <div class="form-group">
                                    <Label>Nama kustomer :</Label>
                                    <input type="text" name="nama_kustomer" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>Alamat :</Label>
                                    <input type="text" name="alamat" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>Telp  :</Label>
                                    <input type="text" name="telp" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>Fax :</Label>
                                    <input type="text" name="fax" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>email  :</Label>
                                    <input type="text" name="email" class="form-control" required> </input>
                                </div>
                                
                                <div class="form-group">
                                    <Label>Jabatan  :</Label>
                                    <select class="form-group" >
                                        <option value="1">User</option>
                                        <option value="2">Admin</option>
                                    </select>
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