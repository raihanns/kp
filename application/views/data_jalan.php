<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Data Jalan</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/offcanvas/"> -->



    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('<?= base_url('assets/img/bg.svg'); ?>');
            background-repeat: no-repeat;
            background-size: cover;
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
    <link href="data_jalan.css" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand mr-auto mr-lg-0" href="<?= base_url('main/'); ?>">HOME</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="data_jalan">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse data_jalan-collapse" id="navbarsExampleDefault">
        </div>
    </nav>

    <div class="nav-scroller bg-white shadow-sm">
        <nav class="nav nav-underline">
            <a class="nav-link active" href="#">Dashboard</a>
            <a class="nav-link" href="#">
                Friends
                <span class="badge badge-pill bg-light align-text-bottom">27</span>
            </a>
            <a class="nav-link" href="#">Explore</a>
            <a class="nav-link" href="#">Suggestions</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
            <a class="nav-link" href="#">Link</a>
        </nav>
    </div>

    <main role="main" class="container">
        <div class="d-flex align-items-center p-3 my-3 text-black-50 bg-light rounded shadow-sm">
            <img src="<?= base_url('assets/img/'); ?>pemkab.png" alt="" width="48" height="48">
            <div class="lh-100">
                <h4 class="mb-0 text-center-Black lh-100 ">DINAS PEKERJAAN UMUM DAN TATA RUANG</h4>
                <medium>SOREANG</medium>
            </div>
        </div>

        <div class="my-3 p-3 bg-info rounded shadow-sm">
            <h3 class="text-center border-bottom border-black pb-2 mb-0"><?= $jalan['jalan']; ?></h3>
        </div>

        <!-- PROFILE JALAN  -->
        <div class="my-3 p-3 bg-light rounded shadow-sm">
            <h4 class="border-bottom border-gray pb-2 mb-0">Data Ruas Jalan</h4>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#2a9d8f" /><text x="50%" y="50%" fill="#ffffff" dy=".3em">1</text>
                </svg>

                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">No Ruas Jalan</strong>
                    00001152711
                </p>
            </div>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#2a9d8f" /><text x="50%" y="50%" fill="#ffffff" dy=".3em">2</text>
                </svg>

                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">Nama Ruas Jalan</strong>
                    Bojong Soang
                </p>
            </div>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#2a9d8f" /><text x="50%" y="50%" fill="#ffffff" dy=".3em">3</text>
                </svg>

                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">Kecamatan</strong>
                    Bojong Soang
                </p>
            </div>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#2a9d8f" /><text x="50%" y="50%" fill="#ffffff" dy=".3em">4</text>
                </svg>

                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">Desa</strong>
                    Dayeuh Kolot
                </p>
            </div>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <<rect width="100%" height="100%" fill="#2a9d8f" /><text x="50%" y="50%" fill="#ffffff" dy=".3em">5</text>
                </svg>

                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">Panjang</strong>
                    2 KM
                </p>
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#2a9d8f" /><text x="50%" y="50%" fill="#ffffff" dy=".3em">6</text>
                </svg>

                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">Lebar</strong>
                    2.5 M
                </p>
            </div>
        </div>
        </div>

        <div class="my-3 p-3 bg-light rounded shadow-sm">
            <h4 class="border-bottom border-gray pb-2 mb-0">Jenis Perkerasan</h4>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#2a9d8f" /><text x="50%" y="50%" fill="#ffffff" dy=".3em">1</text>
                </svg>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Jenis Aspal</strong>
                    </div>
                    <span class="d-block">2 KM</span>
                </div>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Dalam %</strong>
                    </div>
                    <span class="d-block">35%</span>
                </div>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Jenis Beton</strong>
                    </div>
                    <span class="d-block">2 KM</span>
                </div>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Dalam %</strong>
                    </div>
                    <span class="d-block">35%</span>
                </div>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Jenis Kerikil</strong>
                    </div>
                    <span class="d-block">2 KM</span>
                </div>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Dalam %</strong>
                    </div>
                    <span class="d-block">35%</span>
                </div>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Jenis Tanah</strong>
                    </div>
                    <span class="d-block">2 KM</span>
                </div>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Dalam %</strong>
                    </div>
                    <span class="d-block">35%</span>
                </div>
            </div>
        </div>
        </div>

        <div class="my-3 p-3 bg-light rounded shadow-sm">
            <h4 class="border-bottom border-gray pb-2 mb-0">Kondisi Jalan</h4>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#2a9d8f" /><text x="50%" y="50%" fill="#ffffff" dy=".3em">1</text>
                </svg>
                <div class="media-body pb-3 mb-0  small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Kondisi Baik</strong>
                    </div>
                    <span class="d-block">3 KM</span>
                </div>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Dalam %</strong>
                    </div>
                    <span class="d-block">25%</span>
                </div>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Kondisi Sedang</strong>
                    </div>
                    <span class="d-block">3 KM</span>
                </div>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Dalam %</strong>
                    </div>
                    <span class="d-block">25%</span>
                </div>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Rusak Ringan</strong>
                    </div>
                    <span class="d-block">3 KM</span>
                </div>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Dalam %</strong>
                    </div>
                    <span class="d-block">25%</span>
                </div>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Rusak Berat</strong>
                    </div>
                    <span class="d-block">3 KM</span>
                </div>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Dalam %</strong>
                    </div>
                    <span class="d-block">25%</span>
                </div>
            </div>
        </div>

        <div class="my-3 p-3 bg-light rounded shadow-sm">
            <h4 class="border-bottom border-gray pb-2 mb-0">Dokumentasi</h4>
            <div class="media text-muted pt-3">
                <img src="<?= base_url('assets/img/'); ?>rusak1.jpg" width="500" height="300" alt="">
                <div class="media-body pb-3 mb-0 small lh-125 border-left border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                    </div>
                </div>
                <img src="<?= base_url('assets/img/'); ?>rusak2.jpg" width="500" height="300" alt="">
            </div>

            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <div class="d-flex justify-content-between align-items-center w-100">
                </div>
            </div>

            <div class="media text-muted pt-3">
                <img src="<?= base_url('assets/img/'); ?>rusak3.jpg" width="500" height="300" alt="">
                <div class="media-body pb-3 mb-0 small lh-125 border-left border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                    </div>
                </div>
                <img src="<?= base_url('assets/img/'); ?>rusak4.jpg" width="500" height="300" alt="">
            </div>
        </div>




        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
        </script>
        <link href="<?= base_url(); ?>/assets/dist/js/bootstrap.bundle.min.js">
        </script>


        <script src="data_jalan.js"></script>
</body>

</html>