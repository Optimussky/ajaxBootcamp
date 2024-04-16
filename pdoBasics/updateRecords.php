<?php 

try{

    $db = new PDO("mysql:host=localhost;port=3307;dbname=bootcamp","root","");
    echo "Connection has been created<br/>";
}catch(PDOException $e){
    echo "Fail connection: " . $e->getMessage();
}

$fullName = 'El Súper Gato con botas';
$email = 'theGreatcat@mail.com';
$password = '00136912';
$id = 2;

# esta query si evita la inyección de SQL y usa el método FETCH_OBJ
$result = $db->prepare("UPDATE users SET fullName = ?, email = ?, password = ? WHERE id = ? ");
$result->execute([$fullName, $email, $password, $id]);
if($result){

    echo "<p><br>Your record has been updated successfully </p><b><br/>Name:</b> {$fullName} <b><br>email:</b> {$email} <b><br>password:</b> {$password}";

}


?>