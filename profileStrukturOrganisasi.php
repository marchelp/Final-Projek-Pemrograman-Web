<?php
include('includes/navbarProfile.php')
?>

<main>
    <header>
        <div class="overlay"></div>
        <div class="bg-image" style="background-image: url('img/bgStruktur.jpg');
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
        <div class="container text-center">
            <a href="#" data-bs-toggle="modal" data-bs-target="#gambarModal">
                <img src="img/strukturOrganisasi.png" class="rounded img-thumbnail mb-2" alt="Gambar">
            </a>
        </div>

        <!-- Modal untuk gambar yang diperbesar -->
        <div class="modal fade" id="gambarModal" tabindex="-1" aria-labelledby="gambarModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-body">
                    <img src="img/strukturOrganisasi.png" class="img-fluid struktur" alt="Gambar">
                </div>
            </div>
        </div>

    </div>

    <!-- sejarah end -->
</main>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>