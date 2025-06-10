<html>
    <body>
        <?php
        class Celda{
            private $nro;
            private $texto;
            public function setNro($nro){
                $this->nro=$nro;
            }
            public function setTexto($texto){
                $this->texto=$texto;
            }
            public function getNro(){
                return $this->nro;
            }
            public function getTexto(){
                return $this->texto;
            }
            
        }
        ?>
</body>
</html>