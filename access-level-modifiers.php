<?php 

class Teacher{
    # Properties
    public $address = "Address: Pakistan";

    # Access level modifier: public, private and protected
    // public 
    // private 
    // protected

    private function courseName()
    {
        echo "Private function IN: Ajax BootCamp <br/>";
    }

    protected function courseNameProtected()
    {
        echo "Protected function IN: Ajax BootCamp  <br/>";
    }
    
    // public 
    public function showCourse(){
        # We only can use into class
        $this->courseName();
        # We only can use into class or child class(Inheritance)
        $this->courseNameProtected();
    }

    # Methods
}

$obj = new Teacher;

echo $obj->address; #public
echo "<br/>";
# Es necesario acceder desde un método público a un método privado para lograr visualizar información.
$obj->showCourse();
?>