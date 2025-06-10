<hmtl>
    <body>
        <?php
        class Cine{
            private $cine =array();
            function add ($sala){
                $this->cine[]=$sala;
            }
            public function vender($nro,$cant_butacas){
                try{
                $this->cine[($nro-1)]->ocuparButacas($cant_butacas);}
                catch(Exception $e){
                    $e->getMessage();
                }    
            }
            public function mostrarOcupacion(){
                foreach($this->cine as $sala){
                    echo 'Sala numero: '.$sala->getNro()+1;
                    echo 'Cantidad de butacas ocupadas: '.$sala->getButacasOcupadas().'<br>';
                }
            }
        }
        ?>
</body>
</html>