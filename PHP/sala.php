<html>
    <body>
        <?php
            class Sala{
                private $nro;
                private $cant_butacas;
                private $butacas_ocupadas;
                public function __construct($nro,$cant_butacas){
                    $this->nro=$nro;
                    $this->cant_butacas=$cant_butacas;
                    $this->butacas_ocupadas=0;
                }
                public function getNro(){
                    return $this->nro;
                }
                public function getButacasOcupadas(){
                    return $this->butacas_ocupadas;
                }
                public function ocuparButacas($cantidad){
                    if (($cantidad+$this->butacas_ocupadas)<=$this->cant_butacas)
                    $this->butacas_ocupadas=$this->butacas_ocupadas+$cantidad;
                    else
                        throw new Exception('Se ocuparon todas las butacas de la sala'); 
                }
            }
        ?>
</body>
</html>