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
        }
        class Empleado extends Persona{
            private $sueldo;
            public function setSueldo($sueldo){
                $this->sueldo=$sueldo;
            }
            public function getSueldo(){
                return $this->sueldo;
            }
        }
        $per1 =new Persona();
        $emp1 = new Empleado();
        $per1->setNombre("Carlos");
        $per1->setEdad(24);
        $emp1->setNombre("Juan");
        $emp1->setEdad(33);
        $emp1->setSueldo(2400);
        echo "Nombre de la persona: ".$per1->getNombre();
        echo "<br>Edad de la persona: ".$per1->getEdad();
        echo "<br>Nombre del empleado: ".$emp1->getNombre();
        echo "<br>Edad del empleado: ".$emp1->getEdad();
        echo "<br>Sueldo del empleado: $".$emp1->getSueldo();
            ?>
</body>
</html>