<?php
include('includes/navbarProfile.php')
?>

<main>
    <header>
        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>
        <!-- The HTML5 video element that will create the background video on the header -->
        <div class="bg-image" style="background-image: url('img/bgSejarah.png');
            height: 100vh;
            background-size:cover">
            <!-- The header content -->
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-3 fw-bold">Struktur Organisasi <br> Dinas Kebudayaan Kota Yogyakarta</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- sejarah -->

    <div class="mx-auto mt-5 mb-5 p-4 shadow" style="width: 80vw; background-color: #F5F5F5;">
        <h2 class="text-center">Struktur Organisasi</h2>
        <hr>
        <!-- <img src="img/strukturOrganisasi.jpg" class="rounded mx-auto d-block" alt="..."> -->
        <div class="container text-center">
            <!-- <div class="row"> -->
                <!-- <div class="col-md-4"> -->
                    <!-- Tombol untuk memperbesar gambar -->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#gambarModal">
                        <img src="img/strukturOrganisasi.jpg" class="rounded img-thumbnail" alt="Gambar">
                    </a>
                <!-- </div>
            </div> -->
        </div>

        <!-- Modal untuk gambar yang diperbesar -->
        <div class="modal fade" id="gambarModal" tabindex="-1" aria-labelledby="gambarModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="img/strukturOrganisasi.jpg" class="img-fluid" alt="Gambar">
                    </div>
                </div>
            </div>
        </div>
        

        <div class="bg-white">
            <!-- <p class="p-3">
                Dinas Kebudayaan Kota Yogyakarta berkedudukan di Jl. Kemasan Nomor 39 Kotagede
                Yogyakarta. Dibentuk berdasarkan Peraturan Daerah Kota Yogyakarta Nomor 4 Tahun 2020 Tentang Perubahan Atas
                Peraturan Daerah Nomor 5 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kota Yogyakarta;
            </p>
            <p class="p-3">
                Peraturan Walikota Yogyakarta No. 113 Tahun 2020 Tentang Kedudukan, Susunan Organisasi, Tugas, Fungsi, dan
                Tata Kerja Dinas Kebudayaan (Kundha Kabudayan); dan Peraturan Walikota Yogyakarta No. 133 Tahun 2020 Tentang
                Pembentukan Kedudukan, Susunan Organisasi, Tugas, Fungsi, dan Tata Kerja Unit Pelaksana Teknis Pada Dinas
                Kebudayaan (Kundha Kabudayan).
            </p>
            <p class="p-3">
                Sebelum Menjadi Dinas Kebudayan (Kundha Kabudayan), nama organisasi ini telah mengalami perubahan nama yaitu
                Dinas Pariwisata, Seni dan Budaya berdasarkan pada Peraturan Daerah Nomor 09 Tahun 2005, kemudian pada tahun
                2008 diubah menjadi Dinas Pariwisata dan Kebudayaan Kota Yogyakarta berdasarkan Peraturan Daerah No. 10
                Tahun 2008 yang kemudian berpisah dengan Dinas Pariwisata dan Menjadi Dinas Kebudayaan Kota Yogyakarta
                sesuai dengan Peraturan Daerah Nomor 5 Tahun 2016.
            </p> -->
        </div>
    </div>

    <!-- sejarah end -->
</main>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>