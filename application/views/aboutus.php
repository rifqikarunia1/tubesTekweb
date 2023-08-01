<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About US !</title>

    <link rel="stylesheet" href="<?php echo base_url('asset/css/home.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>">
    <link rel="shortcut icon" href="<?php echo base_url('asset/image/ai0001.jpeg') ?>">
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
                <h4 class="text-white">Selamat datang di aplikasi sederhana!!!</h4>
                <img src="<?php echo base_url('asset/image/ai0001.jpeg') ?>" alt="click here" height="200px"
                    width="200px" />
                <span class="text-muted">Pilih menu</span>
                <div>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo site_url('home') ?>">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('table1') ?>">Daftar Pegawai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('table2') ?>">Tabel Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('aboutus') ?>">About US</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="<?php echo site_url('home/logout'); ?>">Log Out</a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>

    </div>


    <div class="jumbotron">
        <center>
            <h2>! Selamat Datang

                <?php echo $this->session->userdata('username'); ?>!
                di About Us !</h2>
            <h2>Kelompok KP pada CV.Cybercode Media Alternatif</h2>
            <p align="center">Kelompok ini beranggotakan 2 orang </p><br /><br />
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Lihat Biodata !</a></p>
        </center>
    </div>

    <div class="container">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url('asset/image/logo2.jpg') ?>" class="d-block w-100" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('asset/image/logo.png') ?>" class="d-block w-100" alt="...">

                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container" align="justify">
        <h1 align="center">Revolusi Para Anggota Kelompok Kerja Praktik</h1>


        <p align="justify">Kami kelompok kerja praktik ini bercita cita membuat boyband yang mengalahkan boyband terdahulu
            yaitu SMASH! mengalahkan Koboy junior dan lain lain. Dan berkat koboi junior bubar kami menetapkan memberi
            nama boyband kami sebagai penerus mereka yaitu Koboi senior!!
        </p>

        <br>
        <br>
        <br>
        <h1 align="center">Profile Kelompok Kerja Praktik</h1>


    </div>

    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('asset/image/fotoiki.jpg') ?>"
                    alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Rizky Rahayu Nur Komar</h5>
                    <p class="card-text" align="justify">Untuk melihat biodata lengkap Kami, silahkan klik link dibawah!
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">

                        <!-- Button trigger modal -->
                        <button align="center" type="button" class="btn btn-primary fluid-center" data-toggle="modal"
                            data-target="#exampleModalLong1">
                            Detail Biodata
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle1">RIZKY RAHAYU NUR KOMAR
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="countainer">
                                            <img src="<?php echo base_url('asset/image/fotoiki.jpg') ?>" alt=""
                                                class="img-fluid">

                                            <div>Nama : Rizky Rahayu Nur Komar</div>
                                            <div>NIM : 3411201096</div>
                                            <div>TTL : Tangerang, 10 September 2002</div>
                                            <div>Alamat : Perum Puri Permai Blok C6 No.1</div>
                                            <div>MOTO : Gaada </div>
                                            <div>Status : Ada yang punya !</div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </small>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('asset/image/helmyfw.jpg') ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Helmy Fauzan Wahyudiputra</h5>
                    <p class="card-text" align="justify">Untuk melihat biodata lengkap Kami, silahkan klik link dibawah!
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">

                        <!-- Button trigger modal -->
                        <button align="center" type="button" class="btn btn-primary fluid-center" data-toggle="modal"
                            data-target="#exampleModalLong3">
                            Detail Biodata
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLongTitle3" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle3">HELMY FAUZAN WAHYUDIPUTRA
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="countainer">
                                            <img src="<?php echo base_url('asset/image/helmyfw.jpg') ?>" alt=""
                                                class="img-fluid">

                                            <div>Nama : Helmy Fauzan Wahyudiputra</div>
                                            <div>NIM : 3411201013</div>
                                            <div>TTL : Cimahi, 25 Juni 2002</div>
                                            <div>Alamat : Komp Leuwigajah Permai Jl.Nusa Indah No.89/5 Cimahi Selatan
                                            </div>
                                            <div>MOTO : Lakukan apa yang membuatmu senang, selain itu lupakan! </div>
                                            <div>Status : DIGANTUNG HEHE</div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </small>
                </div>
            </div>
            



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>

    </script>
    <footer>
        <p>&copy; 2023 CV.Cybercode Media Alternatif</p>
    </footer>
</body>

</html>