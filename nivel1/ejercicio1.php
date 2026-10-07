<?php



class employee {
    //declaramos atributos
    private string $name;
    private float $salary;

    //creamos constructor del objeto empleado 
    public function __construct (string $name, float $salary) {
        $this -> name = $name;
        $this -> salary = $salary;
    }

    //metodo para imprimir nombre 

    public function printName ():string {

        $message = "The employee´s name is: " . $this -> name;
        return $message;

    }

    //metodo para validar salario. Aunque el ejercicio pedia nombre y salario en un mismo método
    //creo que es mejor separar la lógica por si en un futuro cambian los tipos de impuestos
    //sobre todo después de anunciar elecciones anticipadas... 

    public function validateSalary ():string {
        $message = " ";

        if ($this -> salary > 6000) {
            $message = $this -> name . ", you have to pay taxes";
        } else {
            $message = $this -> name . ", you don't have to pay taxes";
        }
        return $message;
    }
}

    //creamos un par de empleados para testear metodos
   
    $employee1 = new employee("Antonio", 5000);
    echo $employee1 -> printName() . "\n";
    echo $employee1 -> validateSalary() . "\n";

    $employee2 = new employee("Natalia", 7000);
    echo $employee2 -> printName() . "\n";
    echo $employee2 -> validateSalary() . "\n";


    







