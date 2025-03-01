<?php    

include '../control/connection.php';
$output = array();
$query = "SELECT iframe FROM tbl_maps";
$run_query = $connection->prepare($query);
$run_query->execute();
$result = $run_query->fetchAll();

// fetch single row
foreach ($result as $row) {
    $output['iframe'] = '<iframe src="'.$row['iframe'].'"
                         allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>';
    $output['src_iframe'] = $row['iframe'];
}

echo json_encode($output);


?>