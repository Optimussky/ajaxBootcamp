<?php

spl_autoload_register(function($className){

    include "classes/$className.php";
});

# Function __autoload is not longer supported on PHP8
// function __autoload($className)
// {
//     include "classes/$className.php";
// }


# We can include one by one
// include "classes/Doctor.php";
// include "classes/Student.php";
// include "classes/Teacher.php";

$teacher = new Teacher;
$studente = new Student;
$doctor = new Doctor;

?>