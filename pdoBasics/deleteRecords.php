<?php 

try{

    $db = new PDO("mysql:host=localhost;port=3307;dbname=bootcamp","root","");
    echo "Connection has been created<br/>";
}catch(PDOException $e){
    echo "Fail connection: " . $e->getMessage();
}


$id = 2;
$deleted = $db->prepare("SELECT * FROM users WHERE id = ? ");
$deleted->execute([$id]);

$row = $deleted->fetch(PDO::FETCH_ASSOC);
    echo $row['id'],"<br>";
    echo $row['fullName'],"<br>";
    echo $row['email'],"<br>";
    echo $row['password'],"<br>";


# esta query si evita la inyección de SQL y usa el método FETCH_OBJ

$result = $db->prepare("DELETE FROM users WHERE id = ? ");
$result->execute([$id]);
if($result){

    echo "<p><br>Your record {$row['fullName']} has been deleted successfully </p><b><br/>";

}


?>