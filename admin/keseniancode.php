<?php
include('security.php');

    if(isset($_POST['save_kesenian'])) {
        $title = $_POST['kesenian_title'];
        $description = $_POST['kesenian_description'];
        $images = $_FILES['kesenian_images']['name'];

        $img_type = array('image/png', 'image/jpg', 'image/jpeg');
        $validate_img_extension = in_array($_FILES['kesenian_images']['type'], $img_type);

        if($validate_img_extension) {

            if(file_exists('upload/'.$_FILES['kesenian_images']['name'])) {
                $store = $_FILES['kesenian_images']['name'];
                $_SESSION['status']="Image already exist. '.$store.'";
                header('Location: kesenian.php');
            } else {
                $query_insert = "INSERT INTO kesenian (`title`, `description`, `images`) VALUES ('$title', '$description', '$images')";
                $query_insert_run = $connection->query($query_insert);
                
                if($query_insert_run) {
                    move_uploaded_file($_FILES['kesenian_images']['tmp_name'],'upload/'.$_FILES['kesenian_images']['name']);
                    $_SESSION['status'] = "Kesenian Ditambahkan";
                    header('Location: kesenian.php');
                } else {
                    $_SESSION['status'] = "Kesenian GAGAL Ditambahkan";
                    header('Location: kesenian.php');
                }
            }  
        } else {
            $_SESSION['failed'] = "Hanya Gambar Berformat PNG, JGP, atau JPEG yang dapat Ditambahkan";
            header('Location: kesenian.php');
        }
    }


    if(isset($_POST['kesenian_update_btn'])) {
        $edit_id = $_POST['edit_id'];
        $edit_title = $_POST['edit_title'];
        $edit_description = $_POST['edit_description'];
        
        $edit_kesenian_images = $_FILES['edit_kesenian_images']['name'];

        

            $seni_query_select = "SELECT * FROM kesenian WHERE id='$edit_id'";
            $seni_query_select_run = $connection->query($seni_query_select);
            foreach($seni_query_select_run as $sn_row) {
                if($edit_kesenian_images == NULL) {
                    // Update with  existing image
                    $images_data = $sn_row['images'];
                } else {
                    // Update with new image and delete old image
                    if($img_path = "upload/".$sn_row['images']) {
                        unlink($img_path);
                        $images_data = $edit_kesenian_images;
                    }
                }
            }

            $query_update = "UPDATE kesenian SET title='$edit_title', description='$edit_description', images='$images_data' WHERE id='$edit_id'";
            $query_update_run = $connection->query($query_update);

            if($query_update_run) {
                if($edit_kesenian_images == NULL) {
                    $_SESSION['status'] = "Kesenian Diperbarui";
                    header('Location: kesenian.php');
                } else {
                    $img_type = array('image/png', 'image/jpg', 'image/jpeg');
                    $validate_img_extension = in_array($_FILES['edit_kesenian_images']['type'], $img_type);
                    
                    if($validate_img_extension) {
                        move_uploaded_file($_FILES['edit_kesenian_images']['tmp_name'],'upload/'.$_FILES['edit_kesenian_images']['name']);
                        $_SESSION['status'] = "Kesenian Diperbarui";
                        header('Location: kesenian.php');
                    } else {
                        $_SESSION['failed'] = "Hanya Gambar Berformat PNG, JGP, atau JPEG yang dapat Ditambahkan";
                        header('Location: kesenian.php');
                    }
                }
            } else {
                $_SESSION['failed'] = "Kesenian GAGAL Diupdate";
                header('Location: kesenian.php');
            }
        
    }


    if (isset($_POST['delete_btn'])) {
        $id = $_POST['delete_id'];
    
        // Select data kesenian sebelum dihapus
        $query_select = "SELECT * FROM kesenian WHERE id='$id'";
        $query_select_run = $connection->query($query_select);
        $row = $query_select_run->fetch(PDO::FETCH_ASSOC);
        $image_path = 'upload/' . $row['images'];
    
        // Hapus data kesenian dari database
        $query_delete = "DELETE FROM kesenian WHERE id='$id'";
        $query_delete_run = $connection->query($query_delete);
    
        if ($query_delete_run) {
            // Hapus gambar dari folder 'upload' jika ada
            if (file_exists($image_path)) {
                unlink($image_path);
            }
    
            $_SESSION['status'] = "Data Kesenian Telah Dihapus";
            header("Location: kesenian.php");
        } else {
            $_SESSION['failed'] = "Data Kesenian Tidak Dihapus";
            header("Location: kesenian.php");
        }
    }
?>