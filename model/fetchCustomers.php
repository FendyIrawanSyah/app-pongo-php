<?php 

include '../control/connection.php';
include 'function.php';

$query = '';
$output = array();
$query .= "SELECT * FROM tbl_customer ";

if (isset($_POST["search"]["value"])) 
{
    $search_value = $_POST["search"]["value"];
    $query .= 'WHERE nama_cust LIKE "%'.$search_value.'%" ';
    $query .= 'OR email_cust LIKE "%'.$search_value.'%" ';
    $query .= 'OR phone_cust LIKE "%'.$search_value.'%" ';
    $query .= 'OR address_cust LIKE "%'.$search_value.'%" ';
}

if (isset($_POST["order"])) 
{
    ;
    $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
    $query .= 'ORDER BY nama_cust ASC ';
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
    $subarray[] = $row['nama_cust'];
    $subarray[] = $row['email_cust'];
    $subarray[] = $row['phone_cust'];
    $subarray[] = $row['address_cust'];
    $subarray[] = $row['date_create'];
    $subarray[] = '<button type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Vie Customer" class="btn btn-sm btn-update-cust" id="'.$row['id_cust'].'"><i class="fa-solid fa-pen-nib"></i></button>';
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