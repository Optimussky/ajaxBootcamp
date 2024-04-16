<?php 

$info = [
    "name" => "Alex",
    "age" => 30,
    "address" => "UK",
    "languages" => ["PHP","PYTHON","NodeJS","JavaScript","Java","C"]
];

$convert = json_encode($info);

echo $convert;