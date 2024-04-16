<?php 

try{

    $db = new PDO("mysql:host=localhost;port=3307;dbname=bootcamp","root","");
    echo "Connection has been created<br/>";
}catch(PDOException $e){
    echo "Fail connection: " . $e->getMessage();
}


# esta query si evita la inyección de SQL y usa el método FETCH_OBJ
$result = $db->prepare("SELECT * FROM users");
$result->execute();

$rows = $result->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $userData):
    echo $userData['id'],"<br>";
    echo $userData['fullName'],"<br>";
    echo $userData['email'],"<br>";
    echo $userData['password'],"<br>";
endforeach;


?>