<?php 

# class Teacher
class Teacher{
    # Properties
    protected $name = "Shakil Khan";
    # Methods
    protected function departmentName(){
        echo "Deparment: Software Engineering <br/>";
    }

    public function teacherInfo(){
        echo "Name: " . $this->name . "<br/>";
                        $this->departmentName();
    }
}

# Class Student
class Student extends Teacher{
    public $studentName = "Asad Ali";

    public function studentInfo(){
        echo "Name: " . $this->studentName . "<br/>";
        echo "Teacher Name: " . $this->name . "<br/>";
                                $this->departmentName();
    }

}
$teacher = new teacher;
echo "<br/>";
echo "======== Teacher Info ========";
echo "<br/>";
$teacher->teacherInfo();

$student = new Student;
echo "<br/>";
echo "======== Student Info ========<br>";
$student->studentInfo();

?>