<?php 
# Static Methods and Static Properties
# Class Teacher

class Teacher{
    public static $name = "Shakil Khan";

    #public static
    public static function showName(){
        echo "My Name is Alberto Romero";
        echo "<br>";
        # En los métodos estáticos no está permitido el acceso a variables fuera del método:   echo $this->name;
        #echo $this->name;
        # pero si esta permitido a través del operador ::
        echo self::$name;
    }
}

$teacher = new Teacher;
$teacher::showName();
echo "<br>";
echo "Access to static properties<br>";
echo Teacher::$name;
?>