<?php 
class Teacher{
    #Properties
    public $address = "Address: Pakistan";

    #Methods
    public function teacherName()
    {
        echo "Teacher Name: Shakil Khan";
        echo "<br/>";
    }

    public function teacherDisplay()
    {
        $this->teachername();
        echo $this->address;
    }
}

# Object instance
$obj = new Teacher;
$obj->teacherDisplay();
