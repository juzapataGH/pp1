<html>
    <body>
        <?php
class Empleado{
    private $nombre;
    private $sueldo;
    public function __construct($nombre,$sueldo){
        $this->nombre=$nombre;
        $this->sueldo=$sueldo;
    }
    public function pagaImpuesto(){
        echo $this->nombre;
        if ($this->sueldo >3000)
            echo "<p>Debe pagar impuestos</p>";
        else
            echo "<p>No debe pagar impuestos</p>";
    }
}
$cliente1=new Empleado("Juan",2500);
$cliente2=new Empleado("Pepe",4000);
echo $cliente1->pagaImpuesto();
echo $cliente2->pagaImpuesto();
?>
</body>
</html>