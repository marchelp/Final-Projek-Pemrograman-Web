<?php
include('includes/navbarBudaya.php');
include('admin/database/dbconfig.php');

// Mengambil data kerajinan dari database
$query_select = "SELECT * FROM kerajinan";
$query_select_run = $connection->query($query_select);

// Menginisialisasi array kosong untuk menyimpan data kerajinan
$kerajinan = array();

if ($query_select_run->columnCount() > 0) {
    while ($row = $query_select_run->fetch(PDO::FETCH_ASSOC)) {
        // Menambahkan data kerajinan ke array
        $kerajinan[] = $row;
    }
}

?>

<main>
    <header style="height:auto; min-height: auto;">

        <div id="carouselExampleAutoplaying" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner position-relative">
                <div class="carousel-item active">
                    <img src="img/kerajinan-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/kerajinan-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/kerajinan-3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="position-absolute position-absolute top-50 start-50 translate-middle z-3">
                    <h1 class="text-center text-white display-3 fw-bold">Budaya Kerajinan</h1>
                </div>
                <div class="overlay"></div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </header>

    <div class="container width-60 mt-5 mb-5">
        <h5>Daftar Budaya Kerajinan</h5>
        <div class="list-group width-30 mt-4" id="kerajinan-list">
            <!-- Data kerajinan akan ditampilkan di sini menggunakan JavaScript -->
        </div>
    </div>

    <?php
    foreach ($kerajinan as $row) {
        ?>
        <div id="<?php echo $row['id']; ?>" class="container mt-3">
            <hr>
            <div class="row my-3 mx-2">
                <div class="col-sm-6 mt-2">
                    <?php echo '<img src="admin/upload/' . $row['images'] . '" width="75%" height="75%" class="img-thumbnail float-end d-none d-sm-block" alt="kerajinan">' ?>
                    <?php echo '<img src="admin/upload/' . $row['images'] . '" width="75%" height="75%" class="img-thumbnail mx-auto d-block d-sm-none" alt="kerajinan">' ?>
                </div>
                <div class="col-sm-6 mt-2">
                    <h6 style="color: #562C1B">Budaya Kerajinan</h6>
                    <h2><?php echo $row['title'] ?></h2>
                    <p><?php echo $row['description'] ?></p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

</main>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>