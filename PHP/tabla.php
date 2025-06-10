<html>
    <body>
        <?php
        echo "<table border='25' cellpadding ='5' cellspacing ='0'>";
        Class Tabla{
            private $tabla=array();
            public function add($celda){
                $this->tabla[]=$celda;
            }
            public function mostrarCeldas(){
                for ($i=0;$i<=9;$i++){
                    echo "<tr>";
                echo "<td>Celda numero ". $this->tabla[$i]->getNro()." ";
                echo $this->tabla[$i]->getTexto()." ".$this->tabla[$i]->getNro()." </td>";
                }
            }}
        
        ?>
</body>
</hmtl>