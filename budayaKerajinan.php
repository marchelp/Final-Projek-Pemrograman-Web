<?php
include('includes/navbarBudaya.php');
include('admin/database/dbconfig.php');
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

    <?php
    $query = "SELECT * FROM kerajinan";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_num_rows($query_run) > 0) {

    ?>

        <div class="container width-60 mt-5 mb-5">
            <h5>Daftar Budaya Kerajinan</h5>
            <div class="list-group width-30 mt-4">
                <?php
                while ($row = mysqli_fetch_assoc($query_run)) {
                ?>
                    <a href="#<?php echo $row['id']; ?>" class="list-group-item list-group-item-action">
                        <?php echo $row['title'] ?>
                    </a>
                <?php
                }
                ?>
            </div>

            <?php
            mysqli_data_seek($query_run, 0); // Mengembalikan kursor query ke awal

            while ($row = mysqli_fetch_assoc($query_run)) {
            ?>
                <div id="<?php echo $row['id']; ?>" class="container mt-3">
                <hr>
                    <div class="row mt-3">
                        <div class="col-sm-6 mt-2">
                            <!-- <img src="img/kerajinan-1.jpeg" class="img-thumbnail" alt=""> -->
                            <?php echo '<img src="admin/upload/' . $row['images'] . '" width="75%" height="75%" class="img-thumbnail float-end d-none d-sm-block" alt="kerajinan">' ?>
                            <?php echo '<img src="admin/upload/' . $row['images'] . '" width="75%" height="75%" class="img-thumbnail mx-auto d-block d-sm-none" alt="kerajinan">' ?>
                        </div>
                        <div class="col-sm-6 mt-2">
                            <h6 style="color: #562C1B">Budaya kerajinan</h6>
                            <h2><?php echo $row['title'] ?></h2>
                            <p><?php echo $row['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        </div>

    <?php
    } else {
        echo "No Record Found";
    }
    ?>

</main>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>