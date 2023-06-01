<?php
include('includes/navbar.php');
?>

<main>
    <!-- header -->
    <header>
        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>
        <!-- The HTML5 video element that will create the background video on the header -->
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="img/background.mp4" type="video/mp4">
        </video>
        <!-- The header content -->
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3">Daerah Istimewa Yogyakarta</h1>
                    <p class="lead mb-0">Daerah Istimewa Yogyakarta (disingkat DIY, Jawa: ꦝꦌꦫꦃꦆꦱ꧀ꦠꦶꦩꦺꦮꦪꦺꦴꦒꦾꦏꦂꦠ,
                        pengucapan bahasa Jawa:
                        [ŋajogjɔ'kart̪ɔ], pelafalan tidak resmi: Jogja/Jogjakarta) adalah Daerah Istimewa setingkat
                        provinsi
                        di Indonesia yang merupakan peleburan dari Negara Kesultanan Yogyakarta dan Negara Kadipaten
                        Paku
                        Alaman.</p>
                    <a class="btn btn-warning p-2 m-2" href="#1" role="button">Jelajahi Sekarang</a>
                </div>
            </div>
        </div>
    </header>
    <!-- header end-->
    <!-- Content -->
    <div class="mx-auto mt-5 mb-5 p-4 shadow" style="width: 80vw; background-color: #F5F5F5;">

        <section class="mb-5">
            <h4 class="mb-4" style="color:#62311F;">Kota Yogyakarta</h4>
            <div class="card mb-3">
                <img src="img/contenthome1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Motto</h5>
                    <p class="card-text">YOGYAKARTA BERHATI NYAMAN yang merupakan kependekan dari Yogyakarta
                                Bersih,
                                Sehat, Asri, dan Nyaman (yang menjadi slogan Kota Yogyakarta dan dapat ditemui di
                                beberapa
                                tempat strategis di wilayah Pemerintahan Kota Yogyakarta), dan julukan KOTA GUDEG, KOTA
                                PENDIDIKAN, dan KOTA BUDAYA</p>
                            <h6 class="text-center">"Aja ngomong waton, nanging ngomongo nganggo waton."</h6>
                            <h6 class="text-center">"Jangan berbicara asal, tetapi berbicaralah dengan tata aturan."</h6>
                </div>
            </div>
        </section>

        <section class="mb-2">
            <h4 class="mb-4" style="color:#62311F;">Kebudayaan Yogyakarta</h4>
            <div class="d-lg-flex flex-row mb-3">
                <div class="card mb-3 mx-1 p-2">
                    <img src="img/card-kesenian.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kesenian</h5>
                        <p class="card-text">Ragam kesenian tradisional daerah Yogyakarta telah dikenal dan dipentaskan
                            di
                            seluruh Indonesia bahkan manca negara</p>
                        <a href="budayaKesenian.php" class="btn btn-warning">Lihat Kesenian</a>
                    </div>
                </div>
                <div class="card mb-3 mx-1 p-2">
                    <img src="img/card-kerajinan.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kerajinan</h5>
                        <p class="card-text">Produk kriya asli Yogyakarta yang populer dan masih digemari hingga menjadi
                            incaran banyak
                            wisatawan sampai saat ini</p>
                        <a href="budayaKerajinan.php" class="btn btn-warning">Lihat Kerajinan</a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="mx-auto mb-5 p-4 shadow"
            style="width: 70vw; background-color: #F5F5F5; display: flex; justify-content: center; flex-wrap: wrap; box-sizing: border-box;">
            <h4 class="mb-2">Video Kebudayaan Yogyakarta</h4>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/HS-6lQQfaKg" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
        </section>

        <section>
            <h4 style="color:#62311F;">Peta Wilayah</h4>
            <div class="text-center">
                <iframe id="1"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63245.97085555823!2d110.33364507052718!3d-7.803248457453288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x21723fd4d3684f71!2sYogyakarta%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1684502909605!5m2!1sid!2sid"
                width="80%" height="450" style="border:0; " allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
            <!-- Content End -->
</main>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>