<?php 

include '../control/connection.php';
include 'function.php';

$query = '';
$output = array();
$query .= "SELECT * FROM tbl_administrator ";

if (isset($_POST["search"]["value"])) 
{
    $search_value = $_POST["search"]["value"];
    $query .= 'WHERE nama_admin LIKE "%'.$search_value.'%" ';
    $query .= 'OR email_admin LIKE "%'.$search_value.'%" ';
    $query .= 'OR phone_admin LIKE "%'.$search_value.'%" ';
    $query .= 'OR job_title_admin LIKE "%'.$search_value.'%" ';
}

if (isset($_POST["order"])) 
{
    ;
    $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
    $query .= 'ORDER BY nama_admin ASC ';
}

if ($_POST["length"] != -1)
{
    $query .= 'LIMIT '. $_POST['start'] .', ' . $_POST['length'];
}

$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

$data = array();

$filtered_rows = $statement->rowCount();

foreach($result as $row){
    $subarray = array();
    $subarray[] = $row['nama_admin'];
    $subarray[] = $row['email_admin'];
    $subarray[] = $row['password_admin'];
    $subarray[] = $row['phone_admin'];
    $subarray[] = $row['job_title_admin'];
    $subarray[] = '<button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Karyawan" class="btn btn-sm btn-update-karyawan" id="'.$row['id_admin'].'"><i class="fa-solid fa-pen-nib"></i></button> <button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Karyawan" class="btn btn-sm btn-delete-karyawan" id="'.$row['id_admin'].'"><i class="fa-solid fa-user-xmark"></i></button>';
    $data[] = $subarray;

}

$output = array(
    'draw' => intval($_POST['draw']),
    'recordsTotal' => $filtered_rows,
    'recordsFiltered' => get_total_all_record_karyawan(),
    'data' => $data,
);

echo json_encode($output);



?>