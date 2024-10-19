<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_json');
// Check connection
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT * FROM wisata';
$result = mysqli_query($koneksi, $sql);
$json_array = array();
while ($row = mysqli_fetch_assoc($result)) {
    $json_array[] = $row;
}
echo json_encode($json_array);
