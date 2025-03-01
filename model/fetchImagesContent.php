<?php 

include '../control/connection.php';
include 'function.php';

$query = '';
$output = array();
$query .= "SELECT * FROM tbl_images ";

if (isset($_POST["search"]["value"])) 
{
    $search_value = $_POST["search"]["value"];
    $query .= 'WHERE nama_img LIKE "%'.$search_value.'%" ';
    $query .= 'OR status_img LIKE "%'.$search_value.'%" ';
}

if (isset($_POST["order"])) 
{
    ;
    $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
    $query .= 'ORDER BY nama_img ASC ';
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
    $subarray[] ='<img src="../src/img/'.$row['file_img'].'" alt="" srcset="" style="width: 80px; heigth: 80px;">';
    $subarray[] = $row['nama_img'];
    $subarray[] = $row['status_img'];
    $subarray[] = $row['date_upload'];
    $subarray[] = '<button 
    type="button" data-bs-toggle="tooltip" data-bs-placement="top" 
    title="Change Status" class="btn btn-sm btn-change-image" 
    id="'.$row['id_img'].'"><i class="fa-solid fa-pen-nib"></i>
    </button> <button 
    type="button" data-bs-toggle="tooltip" data-bs-placement="top" 
    title="Delete Image" class="btn btn-sm btn-delete-image" 
    id="'.$row['id_img'].'" path="'.$row['file_img'].'"><i class="fa fa-trash" aria-hidden="true"></i>
    </button>';
    $data[] = $subarray;
    
}

$output = array(
    'draw' => intval($_POST['draw']),
    'recordsTotal' => $filtered_rows,
    'recordsFiltered' => get_total_record_image(),
    'data' => $data,
);

echo json_encode($output);



?>