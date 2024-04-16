<?php 

# Magic Methods
class Teacher{
    # Properties
    public $name = "Shakil Khan";

    # Methods
    # Constructor Method
    public function __construct()
    {
        echo "Class object is created <br>";        
    }

    # Destructor Method
    public function __destruct()
    {
        echo "Class object is destroyed<br>";
    }
    
}

$teacher = new Teacher;
echo "<br>";
echo $teacher->name . "<br/>";
?>