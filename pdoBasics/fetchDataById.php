<?php 

try{

    $db = new PDO("mysql:host=localhost;port=3307;dbname=bootcamp","root","");
    echo "Connection has been created<br/><br/>";
}catch(PDOException $e){
    echo "Fail connection: " . $e->getMessage();
}

$id = 3;
# esta query si evita la inyección de SQL y usa el método FETCH_OBJ
$result = $db->prepare("SELECT * FROM users WHERE id = ? ");
$result->execute([$id]);

$row = $result->fetch(PDO::FETCH_ASSOC);
    echo $row['id'],"<br>";
    echo $row['fullName'],"<br>";
    echo $row['email'],"<br>";
    echo $row['password'],"<br>";



?>