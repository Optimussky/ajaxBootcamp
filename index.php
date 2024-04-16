<?php

class Teacher{
    #Properties
    public $name = "Shakil Khan";

    #Methods
    public function teacherAddress()
    {
        echo "Shakil from Pakistan";
    }
}


$obj = new Teacher();
#echo $obj->name;
echo $obj->teacherAddress();