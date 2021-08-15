<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Main</title>


    <link href="<?= base_url(); ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url(); ?>/assets/dist/css/starter-template.css" rel="stylesheet">

    <style>
        body {
            background-image: url('<?= base_url('assets/img/bg.svg'); ?>');
        }



        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/img/'); ?>pemkab.png" width="70" height="70" alt="">
        </a>
        <!-- <div class="col">
            <a class="navbar-brand" href="#" style="font-size: medium;">PEMERINTAH KABUPATEN BANDUNG</a> <br>
            <a class="navbar-brand" href="#" style="font-size: medium;">DINAS PEKERJAAN UMUM DAN TATA RUANG</a> <br> -->
        <!-- <a class="navbar-nav ml-auto" href="#" style="font-size: medium;">Jl. Raya Soreang-Banjaran KM.3 Kabupaten Bandung <br>Telp. (022) 5892580</a> <br> -->

        <div class="lh-100">
            <h6 class="mb-0 text-center-Black lh-100" style="color: white;"> PEMERINTAH KABUPATEN BANDUNG</h6>
            <h6 class="mb-0 text-center-Black lh-100" style="color: white;"> DINAS PEKERJAAN UMUM DAN TATA RUANG</h6>
            <small style="color: white;"> Jl. Raya Soreang-Banjaran KM.3 Kabupaten Bandung</small>
            <small style="color: white;"> (022) 5892580</small>
        </div>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>



    </nav>
    <br>

    <main role="main" class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NAMA JALAN</th>
                    <th scope="col">AKSI</th>
                    <th scope="col">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php $i = 1; ?>
                    <?php foreach ($jalan as $j) : ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $j['jalan']; ?></td>
                    <td>
                        <!-- <a class="btn btn-warning" href="#" role="button">Edit</a> -->
                        <a href="<?= base_url('main/data_jalan/' . $j['id']); ?>" class="btn btn-warning btn-sm">Lihat Data Jalan</i></a>
                        <a href="<?= base_url('main/data_kegiatan/') . $j['id']; ?>" class="btn btn-danger btn-sm">Lihat Data Kegiatan</a>

                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

            </tbody>
        </table>

        <!-- <div class="starter-template">
            <h1>Bootstrap starter template</h1>
            <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
        </div> -->

    </main><!-- /.container -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="<?= base_url(); ?>/assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>