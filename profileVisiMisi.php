<?php
include('includes/navbarProfile.php')
?>

<main>
    <header>
        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>
        <!-- The HTML5 video element that will create the background video on the header -->
        <div class="bg-image" style="background-image: url('img/bgVisiMisi.png');
            height: 100vh;
            background-size:cover">
            <!-- The header content -->
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-3 fw-bold">Visi & Misi <br> Dinas Kebudayaan Kota Yogyakarta</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Visi -->
    <div class="mx-auto mt-5 mb-5 p-4 shadow" style="width: 80vw; background-color: #F5F5F5;">
        <h2 class="text-center">Visi dan Misi Dinas Kebudayaan Daerah Istimewa Yogyakarta</h2>
        <hr>
        <h3>Visi</h3>
        <p class="bg-white p-3">"Meneguhkan Kota Yogyakarta Sebagai Kota Nyaman Huni dan Pusat Pelayanan Jasa Yang
            Berdaya Saing Kuat Untuk Keberdayaan Masyarakat Dengan Berpijak Pada Nilai Keistimewaan"
        </p>
        <h3>Misi</h3>
        <ol class="list-group list-group-numbered">
            <li class="list-group-item">Meningkatkan kesejahteraan dan kebudayaan kemasyarakatan</li>
            <li class="list-group-item">Memperkuat ekonomi kerakyatan dan daya saing Kota Yogyakarta</li>
            <li class="list-group-item">Memperkuat moral,etika,dan budaya masyarakat Kota Yogyakarta</li>
            <li class="list-group-item">Meningkatkan kualitas pendidikan, kesehatan, sosial dan budaya</li>
            <li class="list-group-item">Memperkuat tata kota dan kelestarian lingkungan</li>
            <li class="list-group-item">Membangun sarana prasarana publik dan pemukiman</li>
            <li class="list-group-item">Meningkatkan tata kelola pemerintah yang baik dan bersih</li>
        </ol>
    </div>

    <!-- Visi End -->
</main>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>