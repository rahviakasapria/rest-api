<?php 
$mahasiswa = [
    [
    "nama" => "Rah'vi Akasapria",
    "nim" => "1903040097",
    "email" => "rahviakasapria@gmail.com"
    ],
    [
    "nama" => "Alvin Junio",
    "nim" => "1903040095",
    "email" => "alvinjunio@gmail.com"
    ]
];

$data = json_encode($mahasiswa);
echo $data;
?>