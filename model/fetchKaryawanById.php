<?php 

include '../control/connection.php';
$output = array();
$sql = "SELECT * FROM tbl_administrator WHERE id_admin = :id LIMIT 1";
$run_query = $connection->prepare($sql);
$run_query->execute(
    array(':id' => $_POST['id'])
);

$result = $run_query->fetchAll();

foreach ($result as $row) {
    $output['id'] = $row['id_admin'];
    $output['nama'] = $row['nama_admin'];
    $output['email'] = $row['email_admin'];
    $output['password'] = $row['password_admin'];
    $output['phone'] = $row['phone_admin'];
    $output['jabatan'] = $row['job_title_admin'];
}

echo json_encode($output);

?>