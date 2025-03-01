<?php 


function get_total_all_record_karyawan()
{
    include '../control/connection.php';
    $query = "SELECT * FROM tbl_administrator";
    $statement = $connection->prepare($query);
    $statement->execute();

    return $statement->rowCount();
}


function get_total_all_record_cust()
{
    include '../control/connection.php';
    $query = "SELECT * FROM tbl_customer";
    $statement = $connection->prepare($query);
    $statement->execute();

    return $statement->rowCount();
}

function get_total_record_image()
{
    include '../control/connection.php';
    $query = "SELECT * FROM tbl_images";
    $statement = $connection->prepare($query);
    $statement->execute();

    return $statement->rowCount();
}

?>