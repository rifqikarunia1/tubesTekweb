<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>">
    <title>Tambah data Table 2</title>

    <style>
        label {
            display: inline-block;
            width: 100px;
        }
		    .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
        }
    </style>
</head>

<body>
    <div class="center">
    <h1>Tambah Data table2</h1>
    <br>
    </div>

    <div class="container">


        <br>
        <form action="<?php echo site_url('table2/prosestambah'); ?>" method="post">
            <div class="form-group">
                <label>Nama : </label>
                <input type="text" name="nama" class="form-control"><br>
            </div>

            <div class="form-group">
                <label>jenis : </label>
                <input type="text" name="jenis" class="form-control"><br>
            </div>

            <div class="form-group">
                <label>Tahun</label>
                <input type="text" name="tahun" class="form-control"><br>
            </div>

            <input type="submit" value="Tambah" class="btn btn-primary">
			<a href="<?php echo site_url('table2') ?>" class="btn btn-danger">kembali</a>
        </form>
        <br>
    </div>
</body>

</html>
