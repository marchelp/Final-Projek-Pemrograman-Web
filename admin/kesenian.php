<?php

include('security.php');

include('includes/header.php');
include('includes/navbar.php');
?>

<div id="layoutSidenav_content">

    <!-- Modal -->
    <div class="modal fade" id="kesenianModal" tabindex="-1" aria-labelledby="kesenianModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="kesenianModalLabel">Add Kesenian</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="keseniancode.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="kesenian_title" class="form-control" placeholder="Enter Title"
                                required>
                        </div>
                        <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea type="text" name="kesenian_description" cols="30" rows="10" class="form-control" placeholder="Enter Deskripsi" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Image</label>
                            <input type="file" name="kesenian_images" class="form-control" id="kesenian_images"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="save_kesenian">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card header py-3">
                <h6 class="m-0 ps-4 font-weight-bold text-primary">Budaya Kesenian
                    <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal"
                        data-bs-target="#kesenianModal">
                        Tambahkan Budaya Kesenian
                    </button>
                </h6>

            </div>
            <div class="card-body">

                <?php
                if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                    echo '<h4 class="bg-primary text-white text-center">' . $_SESSION['status'] . '</h4>';
                    unset($_SESSION['status']);
                }
                ?>

                <?php
                if (isset($_SESSION['failed']) && $_SESSION['failed'] != '') {
                    echo '<h4 class="bg-danger text-white text-center">' . $_SESSION['failed'] . '</h4>';
                    unset($_SESSION['failed']);
                }
                ?>

                <?php
                if (isset($_SESSION['status_code']) && $_SESSION['status_code'] != '') {
                    // echo '<h4 class="bg-info" text-white text-center>' . $_SESSION['status_code'] . '</h4>';
                    unset($_SESSION['status_code']);
                }
                ?>

                <div class="table-responsive">
                    <?php 
                        $query_select = "SELECT * FROM kesenian";
                        $query_select_run = $connection->query($query_select);

                        if($query_select_run -> rowCount() > 0) {
                            
                            ?>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Deskripsi</th>
                                <th>Image</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($row = $query_select_run->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['title'] ?></td>
                                <td><?php echo $row['description'] ?></td>
                                <td><?php echo '<img src="upload/'.$row['images'].'" width="100px" height="100px" alt="kesenian">'?></td>
                                <td>
                                    <form action="kesenian_edit.php" method="POST">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                                        <button type="submit" class="btn btn-success" name="edit_data_btn">EDIT</button>
                                    </form>
                                </td>
                                <td>
                                <form action="keseniancode.php" method="POST">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id'] ?>"/>
                                        <button type="submit" class="btn btn-danger" name="delete_btn">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>

                        </tbody>
                    </table>
                    <?php
                        } else {
                            echo "No Record Found";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>