<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kebudayaan Kota Yogyakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;400;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: 'Roboto Slab', serif;
        }
    </style>
</head>

<body>

    <!-- navbar -->

    <nav class="navbar navbar-expand-lg fixed-top shadow" style="background-color: #F8EBBF; width:100vw;">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="index.php">
                <img src="img/logo-jogja.png" alt="Logo" width="38" height="32" class="d-inline-block align-text-top">
                YOGYAKARTA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav p-auto ms-auto me-lg-4">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profileVisiMisi.php">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="profileSejarah.php">Sejarah</a></li>
                            <li><a class="dropdown-item" href="profileStrukturOrganisasi.php">Struktur Organisasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Tentang</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Budaya
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="budayaKesenian.php">Budaya Kesenian</a></li>
                            <li><a class="dropdown-item" href="budayaKerajinan.php">Budaya Kerajinan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Kontak</a>
                    </li>
                </ul>
                <a class="btn btn-secondary me-4 login" href="admin/index.php" role="button">Login</a>
            </div>
        </div>
    </nav>

    <!-- navbar end -->