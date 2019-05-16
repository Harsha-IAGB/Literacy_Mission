<?php

header('Content-Type: application/json');

$db = mysqli_connect('localhost', 'root', '', 'registration');


//Query to get data from the table
$query = "SELECT * FROM year_literacy";

$result = mysqli_query($db, $query);

$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

$result->close();

$db ->close();

print json_encode($data);