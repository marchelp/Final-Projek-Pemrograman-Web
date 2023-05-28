<?php
include('security.php');

    if(isset($_POST['save_kerajinan'])) {
        $title = $_POST['kerajinan_title'];
        $description = $_POST['kerajinan_description'];
        $images = $_FILES['kerajinan_images']['name'];

        $img_type = array('image/png', 'image/jpg', 'image/jpeg');
        $validate_img_extension = in_array($_FILES['kerajinan_images']['type'], $img_type);

        if($validate_img_extension) {

            if(file_exists('upload/'.$_FILES['kerajinan_images']['name'])) {
                $store = $_FILES['kerajinan_images']['name'];
                $_SESSION['status']="Image already exist. '.$store.'";
                header('Location: kerajinan.php');
            } else {
                $query = "INSERT INTO kerajinan (`title`, `description`, `images`) VALUES ('$title', '$description', '$images')";
                $query_run = mysqli_query($connection, $query);
                
                if($query_run) {
                    move_uploaded_file($_FILES['kerajinan_images']['tmp_name'],'upload/'.$_FILES['kerajinan_images']['name']);
                    $_SESSION['status'] = "Kerajinan Ditambahkan";
                    header('Location: kerajinan.php');
                } else {
                    $_SESSION['status'] = "Kerajinan GAGAL Ditambahkan";
                    header('Location: kerajinan.php');
                }
            }  
        } else {
            $_SESSION['failed'] = "Hanya Gambar Berformat PNG, JGP, atau JPEG yang dapat Ditambahkan";
            header('Location: kerajinan.php');
        }
    }


    if(isset($_POST['kerajinan_update_btn'])) {
        $edit_id = $_POST['edit_id'];
        $edit_title = $_POST['edit_title'];
        $edit_description = $_POST['edit_description'];
        
        $edit_kerajinan_images = $_FILES['edit_kerajinan_images']['name'];

        

            $seni_query = "SELECT * FROM kerajinan WHERE id='$edit_id'";
            $seni_query_run = mysqli_query($connection, $seni_query);
            foreach($seni_query_run as $sn_row) {
                if($edit_kerajinan_images == NULL) {
                    // Update with  existing image
                    $images_data = $sn_row['images'];
                } else {
                    // Update with new image and delete old image
                    if($img_path = "upload/".$sn_row['images']) {
                        unlink($img_path);
                        $images_data = $edit_kerajinan_images;
                    }
                }
            }
            
            $query = "UPDATE kerajinan SET title='$edit_title', description='$edit_description', images='$images_data' WHERE id='$edit_id'";
            $query_run = mysqli_query($connection, $query);

            if($query_run) {
                if($edit_kerajinan_images == NULL) {
                    $_SESSION['status'] = "kerajinan Diperbarui";
                    header('Location: kerajinan.php');
                } else {
                    $img_type = array('image/png', 'image/jpg', 'image/jpeg');
                    $validate_img_extension = in_array($_FILES['edit_kerajinan_images']['type'], $img_type);
                    if($validate_img_extension) {
                        move_uploaded_file($_FILES['edit_kerajinan_images']['tmp_name'],'upload/'.$_FILES['edit_kerajinan_images']['name']);
                        $_SESSION['status'] = "Kerajinan Diperbarui";
                        header('Location: kerajinan.php');
                    } else {
                        $_SESSION['failed'] = "Hanya Gambar Berformat PNG, JGP, atau JPEG yang dapat Ditambahkan";
                        header('Location: kerajinan.php');
                    }
                }
            } else {
                $_SESSION['failed'] = "Kerajinan GAGAL Diupdate";
                header('Location: kerajinan.php');
            }
        
    }


    if(isset($_POST['delete_btn'])) {
        $id = $_POST['delete_id'];

        $query = "DELETE FROM kerajinan WHERE id='$id'";
        $query_run = mysqli_query($connection, $query);

        if($query_run) {
            $_SESSION['status'] = "Data Kerajinan Telah Dihapus";
            header("Location: kerajinan.php");
        } else {
            $_SESSION['failed'] = "Data Kerajinan Tidak Dihapus";
            header("Location: kerajinan.php");
        }
    }


?>