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
                <img src="<?php echo base_url('asset/image/ai0001.jpeg') ?>" alt="click here" height="200px" width="200px" />
                <span class="text-muted">Pilih menu</span>
                <div>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo site_url('home') ?>">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('table1') ?>">Table1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('table2') ?>">Table2</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('aboutus')?>">About US</a>
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
            <h2>! Selamat datang

                <?php echo $this->session->userdata('username'); ?>!
                di About Us !</h2>
            <h2>Kelompok 1 Tekweb</h2>
            <p align="center">Kelompok ini beranggotakan 4 orang yang merupakan anggota boyband</p><br /><br />
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Mulai Belajar !</a></p>
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
                        <img src="<?php echo base_url('asset/image/ai01.png') ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kelebihan yang dimiliki AI</h5>
                            <p>Kemampuan pemrosesan dan analisis data yang cepat</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('asset/image/ai02.jpg') ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kelebihan yang dimiliki AI</h5>
                            <p>Kemampuan belajar dan adaptasi</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo base_url('asset/image/ai03.jpg') ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kelebihan yang dimiliki AI</h5>
                            <p>Kapasitas untuk menangani tugas yang berulang dan kompleks</p>
                        </div>
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
        <h1 align="center">Revolusi Para Anggota Kelompok 1</h1>


        <p align="justify">AI dapat Temukan inspirasi dan pengetahuan baru yang menarik di siniAI dapat digunakan dalam
            berbagai
            bidang dan
            aplikasi, termasuk pengenalan suara dan gambar, pemrosesan bahasa alami, penambangan data, analisis
            prediktif, pengembangan otomasi, robotika, kendaraan otonom, asisten virtual, dan banyak lagi. Tujuan utama
            dari AI adalah untuk meningkatkan kemampuan komputer untuk melakukan tugas-tugas yang biasanya memerlukan
            kecerdasan manusia, baik itu dalam hal pemrosesan data yang kompleks, pengambilan keputusan, atau interaksi
            dengan manusia..</p>

        <p>Pendekatan yang umum digunakan dalam pengembangan AI adalah pembelajaran mesin (machine learning), di mana
            komputer diberi kemampuan untuk belajar dari data dan mengenali pola-pola yang berguna. Ada juga subbidang
            AI lainnya seperti pengenalan pola (pattern recognition), logika dan penalaran (logic and reasoning),
            pengolahan bahasa alami (natural language processing), dan sistem cerdas (intelligent systems).</p>
        <p>"Pendidikan adalah kunci untuk membuka pintu emas ke kebebasan." - George Washington Carver</p>
        <p>"Hidup adalah perjalanan yang menakjubkan. Nikmati setiap langkahnya." - Unknown</p>
        <p>"Kegagalan adalah batu loncatan menuju kesuksesan." - Unknown</p>
    </div>

    <div class="container">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('asset/image/test.jpeg') ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Mohamad Aditya Mutaqin Ghozali</h5>
                    <p class="card-text" align="justify">Untuk melihat biodata lengkap Kami, silahkan klik link dibawah!</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('asset/image/test.jpeg') ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Rifqi Karunia Ibadirachman</h5>
                    <p class="card-text" align="justify">Untuk melihat biodata lengkap Kami, silahkan klik link dibawah!
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('asset/image/helmyf.jpg') ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Helmy Fauzan Wahyudiputra</h5>
                    <p class="card-text" align="justify">Untuk melihat biodata lengkap Kami, silahkan klik link dibawah! </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('asset/image/test.jpeg') ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Ryad Helmi Fadila</h5>
                    <p class="card-text" align="justify">Untuk melihat biodata lengkap Kami, silahkan klik link dibawah!</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>


    <footer>
        <p>&copy; 2023 DSE A. Kelompok 1.</p>
    </footer>

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
</body>

</html>