<?php 

try{

    $db = new PDO("mysql:host=localhost;port=3307;dbname=bootcamp","root","");
    echo "Connection has been created<br/>";
}catch(PDOException $e){
    echo "Fail connection: " . $e->getMessage();
}

$fullName = "Mila Jojovich";
$email = "mila@mail.com";
$password = "2468";

# Esta query no evita la inyección de SQL
// $result = $db->query("INSERT INTO users (fullName, email, password) VALUES ('$fullName','$email','$password')");

# esta query si evita la inyección de SQL
$result = $db->prepare("INSERT INTO users (fullName, email, password) VALUES (?,?,?)");
$result->execute([$fullName, $email, $password]);


if($result){
    echo "Data has been inserted successfully: {$fullName}<br/>";
}


?>