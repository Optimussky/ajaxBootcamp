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
        echo static::$name;
    }
}

$teacher = new Teacher;
Teacher::showName();
echo "<br>";

echo "<br>";
echo "Access to static properties<br>";
echo Teacher::$name;
?>