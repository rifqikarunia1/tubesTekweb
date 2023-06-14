<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo base_url('asset/css/home.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>">

    <script src="<?php echo base_url('asset/css/home.js') ?>"></script>


    <style>
        footer {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        img {
        float: right;
      }
    </style>
</head>

<body>
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h4 class="text-white">Table 1</h4>
                <span class="text-muted">Pilih menu</span>
                <img src="<?php echo base_url('asset/image/ai0001.jpeg') ?>" alt="click here" height="200px" width="200px" />
                <div>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo site_url('home') ?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('table1') ?>">table1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('table2') ?>">Table2</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('aboutus')?>">About US</a>
                        </li>

                        <a class="nav-link" href="<?php echo site_url('home/logout'); ?>">Log Out</a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

    </div>


    <div class="jumbotron">
        <center>
            <h2> Form Table 1 </h2>
            <h2>Industri 4.0 (Artificial Intelligence)</h2>
            <p align="center">Memuat berbagai informasi penemu dan penemuan AI secara global. </p><br /><br />
            <p><a class="btn btn-primary btn-lg" href="<?php echo site_url('table1/tambah') ?>" role="button">Tambah
                    data</a></p>
        </center>
    </div>

    <div class="container">
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Penemuan</th>
                    <th>Tahun</th>
                    <th>aksi</th>

                </tr>
            </thead>
            <?php
            foreach ($table1->result() as $row) {
                echo "<tr>";
                echo "<td>" . $row->nama . "</td>";
                echo "<td>" . $row->penemuan . "</td>";
                echo "<td>" . $row->tahun . "</td>";
                echo "<td>";
                echo "<a href='" . site_url('table1/update/' . $row->id) . "'>Edit</a>";
                echo " | ";
                echo "<a href='" . site_url('table1/delete/' . $row->id) . "'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }


            ?>


        </table>
    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>

    </script>
</body>

</html>