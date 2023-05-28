<?php

include('security.php');

include('includes/header.php');
include('includes/navbar.php');
?>

<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Edit Kerajinan</h6>
            </div>
        </div>
        <div class="card-body">

            <?php

            if (isset($_POST['edit_data_btn'])) {
                $id = $_POST['edit_id'];

                $query = "SELECT * FROM kerajinan WHERE id='$id'";
                $query_run = mysqli_query($connection, $query);

                foreach ($query_run  as $row) {
            ?>

                    <form action="kerajinancode.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="edit_title" value="<?php echo $row['title'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <!-- <input type="text" name="edit_description" value="<?php echo $row['description'] ?>" class="form-control"> -->
                            <textarea type="text" name="edit_description" value="<?php echo $row['description'] ?>" cols="30" rows="10" class="form-control" required><?php echo $row['description'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="edit_kerajinan_images" value="<?php echo $row['images'] ?>" class="form-control" id="kerajinan_images">
                        </div>
                        <div class="modal-footer">
                            <a href="kerajinan.php" class="btn btn-danger">Cancel</a>
                            <button type="submit" class="btn btn-primary" name="kerajinan_update_btn">Update</button>
                        </div>

                    </form>

            <?php
                }
            }

            ?>

        </div>
    </div>


    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>