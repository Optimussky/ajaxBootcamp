<?php

$info = '{"name": "Alex", "age": 30, "address":"UK", "languages": ["PHP","Python","NodeJS","JavaScript"]}';
//echo $info;
$convert = json_decode($info);
echo "<pre>";
print_r($convert);
#print_r("<br>" . "AGE: " . $convert->age);
#echo "<pre>";
#print_r("<br>" . "Languages: " . $convert->languages);
echo "<pre>";
print_r($convert->languages);
print_r($convert->languages[1]);

?>