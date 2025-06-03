<html>
    <body>
        <?php
        class Persona{
            private $nombre;
            private $edad;
            public function setNombre($nombre){
                $this->nombre=$nombre;
            }
            public function setEdad($edad){
                $this->edad=$edad;
            }
            public function getNombre(){
                return $this->nombre;
            }
            public function getEdad(){
                return $this->edad;
            }
            public function mostrar(){
                echo "Nombre: ".$this->getNombre();
                echo "<br>Edad: ".$this->getEdad();
            }   
        }
        class Empleado extends Persona{
            private $sueldo;
            public function setSueldo($sueldo){
                $this->sueldo=$sueldo;
            }
            public function getSueldo(){
                return $this->sueldo;
            }
            public function mostrar(){
                echo "<br>";
                parent::mostrar();
                echo "<br>Sueldo: $".$this->getSueldo();
            }
        }
        $per1 =new Persona();
        $emp1 = new Empleado();
        $per1->setNombre("Carlos");
        $per1->setEdad(24);
        $emp1->setNombre("Juan");
        $emp1->setEdad(33);
        $emp1->setSueldo(2400);
        $per1->mostrar();
        $emp1->mostrar();