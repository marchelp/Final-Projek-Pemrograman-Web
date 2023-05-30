<?php
include('includes/navbarContact.php');
?>

<main>
    <!-- header -->
    <header>
        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>
        <!-- The HTML5 video element that will create the background video on the header -->
        <div class="bg-image" style="background-image: url('img/bgContacUs.jpg');
            height: 100vh;
            background-size:cover">
            <!-- The header content -->
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-3 fw-bold">Hubungi Kami</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Content -->
    <div class="mx-auto mt-5 mb-5 p-4 shadow"
        style="width: 85vw; background-color: #F5F5F5; display: flex; justify-content: center; flex-wrap: wrap; box-sizing: border-box;">
        <iframe id="1"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63245.97085555823!2d110.33364507052718!3d-7.803248457453288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787bd5b6bc5%3A0x21723fd4d3684f71!2sYogyakarta%2C%20Kota%20Yogyakarta%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1684502909605!5m2!1sid!2sid"
            width="100%" height="450" style="border:0; " allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>


        <!-- Content End -->

        <!-- ContacUs-->
        <div class="mx-auto mt-5 mb-5 p-4 shadow" style="background-color: #FFFFFF;">
            <h2>Hubungi Kami</h2>
            <hr width="223">
            <p>Yogyakarta, kota modern yang tertata rapi, menjadi tempat hunian yang nyaman dengan masyarakat yang
                berkebudayaan dan dengan pemerintahan yang berorientasi pada pelayanan publik.
            </p>
            <div class="d-lg-flex flex-row mb-3">
                <div class="p-2">
                    <img src="img/locationIC.png" width="68" height="60" alt="">
                </div>
                <div class="p-2">
                    <h5>Alamat Kantor :</h5>
                    <p>Jl Cendana 11 Yogyakarta 55166</p>
                </div>
            </div>
            <div class="d-lg-flex flex-row mb-3">
                <div class="p-2">
                    <img src="img/emailIC.png" width="70" height="48" alt="">
                </div>
                <div class="p-2">
                    <h5>Email :</h5>
                    <p>kominfosandi@jogjakota.go.id</p>
                </div>
            </div>
            <div class="d-lg-flex flex-row mb-3">
                <div class="p-2">
                    <img src="img/phoneIC.png" width="68" height="55" alt="">
                </div>
                <div class="p-2">
                    <h5>Telp:</h5>
                    <p>(0274) 562628, (0274) 564945</p>
                </div>
            </div>
        </div>
    </div>


</main>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>