<?php 

try{

    $db = new PDO("mysql:host=localhost;port=3307;dbname=bootcamp","root","");
    echo "Connection has been created<br/>";
}catch(PDOException $e){
    echo "Fail connection: " . $e->getMessage();
}


?>