<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Data Kegiatan</title>

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
    <link href="data_kegiatan.css" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand mr-auto mr-lg-0" href="<?= base_url('main'); ?>">HOME</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="data_kegiatan">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse data_kegiatan-collapse" id="navbarsExampleDefault">
            <!-- <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Switch account</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
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
                <h6 class="mb-0 text-center-Black lh-100 ">PEMERINTAH KABUPATEN BANDUNG</h6>
                <h6 class="mb-0 text-center-Black lh-100 ">DINAS PEKERJAAN UMUM DAN TATA RUANG</h6>
                <small>Jl. Raya Soreang-Banjaran KM.3 Kabupaten Bandung (022) 5892580</small>
            </div>
        </div>

        <div class="my-3 p-3 bg-info rounded shadow-sm">
            <h3 class="text-center border-bottom border-black pb-2 mb-0">Data Kegiatan</h3>
        </div>

        <!-- PROFILE JALAN  -->
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h5 class="border-bottom border-gray pb-2 mb-0">KEGIATAN</h5>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#2a9d8f" /><text x="50%" y="50%" fill="#ffffff" dy=".3em">1</text>
                </svg>

                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">Nama Kegiatan</strong>
                    Bojongsoang
                </p>
            </div>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#2a9d8f" /><text x="50%" y="50%" fill="#ffffff" dy=".3em">2</text>
                </svg>

                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">Perusahaan</strong>

                </p>
            </div>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#2a9d8f" /><text x="50%" y="50%" fill="#ffffff" dy=".3em">3</text>
                </svg>

                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">Nilai Kontrak</strong>
                    2 M
                </p>
            </div>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#2a9d8f" /><text x="50%" y="50%" fill="#ffffff" dy=".3em">4</text>
                </svg>

                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">Jangka Waktu Pelaksanaan</strong>
                    3 bulan
                </p>
            </div>
</body>
<div class="media text-muted pt-3">
    <img src="<?= base_url('assets/img/'); ?>B25.jpeg" width="500" height="300" alt="">
    <div class="media-body pb-3 mb-0 small lh-125 border-left border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
        </div>
    </div>
    <img src="<?= base_url('assets/img/'); ?>B50.jpeg" width="500" height="300" alt="">
</div>

<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
    <div class="d-flex justify-content-between align-items-center w-100">
    </div>
</div>

<div class="media text-muted pt-3">
    <img src="<?= base_url('assets/img/'); ?>B100.jpeg" width="500" height="300" alt="">
    <div class="media-body pb-3 mb-0 small lh-125 border-left border-gray">
        <div class="d-flex justify-content-between align-items-center w-100">
        </div>
    </div>
</div>
<div class="media text-muted pt-3">
    <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#2a9d8f" /><text x="50%" y="50%" fill="#ffffff" dy=".3em">6</text>
    </svg>

    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark">Video Kegiatan</strong>
        <video controls width="500" height="400">
            <source src="<?= base_url('assets/video/'); ?>jalan.mp4" type="video/mp4" autostart="false">

            Your browser does not support the video tag.
        </video>
    </p>
</div>
</div>

</div>
</div>
</main>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
</script>
<link href="<?= base_url(); ?>/assets/dist/js/bootstrap.bundle.min.js">
</script>


<script src="data_kegiatan.js"></script>
</body>

</html>