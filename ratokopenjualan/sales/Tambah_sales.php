<!doctype html>
<htmL lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Sales</title>
    </head> 

    <body>
    <?php include '../navbar.php'; ?>
        <div class="container" style="margin-top: 20px">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            Tambah sales
                        </div>

                        <div class="card-body">
                            <form name="simpan_sales" action="simpan_sales.php" method="POST" >
                                <div class="form-group">
                                    <Label>Id Sales :</Label>
                                    <input type="text" name="id_sales" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>Id customer :</Label>
                                    <input type="text" name="id_customer" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>Tgl Sales (tahun/bulan/hari)  :</Label>
                                    <input type="date" name="tgl_sales" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>do number :</Label>
                                    <input type="text" name="do_number" class="form-control" required> </input>
                                </div>
                                <div class="form-group">
                                    <Label>status  :</Label>
                                    <input type="text" name="status" class="form-control" required> </input>
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