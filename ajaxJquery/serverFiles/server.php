<?php
// Get connection with Database
$db = new PDO("mysql:host=localhost;port=3307;dbname=bootcamp","root","");
// Evaluate is there data ? (isset: fullName, email, password)
if(isset($_POST['myName']) && isset($_POST['myEmail'])  && isset($_POST['myPassword'])){
   
   $name = $_POST['myName'];
   $email = $_POST['myEmail'];
   $password = $_POST['myPassword'];

   $result = $db->prepare("INSERT INTO users (fullName, email, password) VALUES (?,?,?)");
   if($result->execute([$name, $email, $password])){
    echo json_encode(["status" => "ok", "message" => "Your data has been inserted successfully"]);
   }
    
   
}