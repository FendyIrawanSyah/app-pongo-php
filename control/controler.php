<?php   

include 'connection.php';

if(isset($_POST['operation'])){
    //login karyawan
    if($_POST['operation'] == 'login'){
       $email = $_POST['email'];
       $password = $_POST['password'];
       $query = "SELECT * FROM tbl_administrator WHERE email_admin = '$email' AND password_admin = '$password'";
       $run_query = $connection->prepare($query);
       $run_query->execute();
       $result= $run_query->rowCount();
       $row = $run_query->fetch(PDO::FETCH_ASSOC);
       if($result == 1) {
        session_start();
        $_SESSION['admin_id'] = $row['id_admin'];
        $_SESSION['admin_name'] = $row['nama_admin'];
        echo "success";
       }
    }

    //logout karywan
    if($_POST['operation'] == 'logout'){
        session_start();
        session_destroy();
        echo "success";
    }

    //add karywan
    if($_POST['operation'] == 'addKaryawan') {

        $query = "INSERT INTO tbl_administrator (nama_admin, email_admin, password_admin, phone_admin, job_title_admin) VALUES (:nama, :email, :password, :phone_admin, :jabatan)";
        $run_query = $connection->prepare($query);
        $run_query->execute(
            array(
                ':nama' => $_POST['txtnama'],
                ':email' => $_POST['txtemail'],
                ':password' => $_POST['txtpassword'],
                ':jabatan' => $_POST['txtjabatan'],
                ':phone_admin' => $_POST['txtphone']
            )
        );
        if ($run_query) {
            echo "Add karyawan successfully";
        }else {
            echo "failed";
        }

    }

    //delete karyawan
    if($_POST['operation'] == 'deleteKaryawan') {
        $id = $_POST['id'];
        $query = "DELETE FROM tbl_administrator WHERE id_admin = :id";
        $run_query = $connection->prepare($query);
        $run_query->execute(
            array(
                ':id' => $id
            )
        );
        if ($run_query) {
            echo "Deleted karyawan Successfully";
        } else {
            echo "failed";
        }
    }

    //edit karyawan
    if($_POST['operation'] == 'editKaryawan') {
        $query = "UPDATE tbl_administrator SET 
        nama_admin = :nama, email_admin = :email, password_admin = :password, phone_admin = :phone_admin WHERE id_admin = :id";
        $run_query = $connection->prepare($query);
        $run_query->execute(
            array(
                ':nama' => $_POST['txtnama'],
                ':email' => $_POST['txtemail'],
                ':password' => $_POST['txtpassword'],
                ':phone_admin' => $_POST['txtphone'],
                ':id' => $_POST['id_karyawan'],
            )
        );
        if ($run_query) {
            echo "Edit Data Karyawan Successfully";
        } else {
            echo "failed";
        }
    }

    //add image file content
    if($_POST['operation'] == 'addImagesContent') {

        //cek image content
        if (isset($_FILES['txtimagefile'])) {
            $image_name = $_FILES['txtimagefile']['name'];
            $image_size = $_FILES['txtimagefile']['size'];
            $image_tmp = $_FILES['txtimagefile']['tmp_name'];
            $image_type = $_FILES['txtimagefile']['type'];


            //check if image type is jpg
            if ($image_type!= 'image/jpg' && $image_type!='image/webp' && $image_type!='image/jpeg' && $image_type!='image/png') {
                echo "Only jpg images are allowed.";
                exit;
            }
            
            //validasi ukuran file
            if ($image_size > 1048576) {
                echo "Image file size should not exceed 1MB.";
                exit;
            }
            
            //upload image
            $location = '../src/img/';
            move_uploaded_file($image_tmp, $location.$image_name);
            
            //insert to database
            $query = "INSERT INTO tbl_images (nama_img, status_img, file_img, date_upload) VALUES (:nama, :status, :file, :tanggal)";
            $run_query = $connection->prepare($query);
            $run_query->execute(
                array(
                    ':nama' => $_POST['txtnameImage'],
                    ':status' => $_POST['txtstatus'],
                    ':file' => $image_name,
                    ':tanggal' => date('Y-m-d H:i:s')
                )
            );
            if ($run_query) {
                echo "Add Image Content Successfully";
            } else {
                echo "failed";
            }
        }
        
    }
    
    //delete image content
    if($_POST['operation'] == 'deleteImagesContent') {
        //delete file
        $path ='../src/img/'.$_POST['path'];
        unlink($path);
        $query = "DELETE FROM tbl_images WHERE id_img = :id";
        $run_query = $connection->prepare($query);
        $run_query->execute(
            array(
                ':id' => $_POST['id'],
            )
        );
        if ($run_query) {
            echo "Deleted Image Content Successfully";
        } else {
            echo "failed";
        }
    }

    //update maps webisite
    if ($_POST['operation'] == 'updateMapsWeb') {
        $updatemaps = 'UPDATE tbl_maps SET iframe = :new_iframe';
        $run_query = $connection->prepare($updatemaps);
        $run_query->execute(
            array(
                ':new_iframe' => $_POST['new_iframe']
            )
        );

        if ($run_query) {
            echo "Update Maps Successfully";
        } else {
            echo "failed";
        }
        $connection = null;
    }


}


?>