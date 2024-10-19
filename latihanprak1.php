<?php
$data = [
    'nama' => 'ADITYA RIKFI',
    'usia' => 30,
    'pekerjan' => 'miliarder',
    'hobi' => ['mancing', 'badminton', 'membaca']
];

$jsondata = json_encode($data);
$jsonhobi = json_encode($data["hobi"]);

echo $jsonhob;

echo "Data dalam format JSON:" . $jsondata;
