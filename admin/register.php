<?php
include('security.php');

include('includes/header.php');
include('includes/navbar.php');
?>

<div id="layoutSidenav_content">

    <!-- Modal -->
    <div class="modal fade" id="addadminprofile" tabindex="-1" aria-labelledby="addadminprofileLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addadminprofileLabel">Add Data Admin</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="logincode.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label> Username </label>
                            <input type="text" name="username" class="form-control" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
                            <small class="error_email" style="color: red;"></small>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card header py-3">
                <h6 class="m-0 ps-4 font-weight-bold text-primary">Admin Profile
                    <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#addadminprofile">
                        Tambahkan Admin Profile
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
                if (isset($_SESSION['status_code']) && $_SESSION['status_code'] != '') {
                    // echo '<h4 class="bg-info" text-white text-center>' . $_SESSION['status_code'] . '</h4>';
                    unset($_SESSION['status_code']);
                }
                ?>

                <div class="table-responsive">

                    <?php

                    $query = "SELECT * FROM register";
                    $query_run = $connection->query($query);

                    ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($query_run->columnCount() > 0) {
                                while ($row = $query_run->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td>
                                            <form action="register_edit.php" method="POST">
                                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                                <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="logincode.php" method="POST">
                                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                <button type="submit" name="delete_btn" class="btn btn-danger">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "No Record Found";
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>