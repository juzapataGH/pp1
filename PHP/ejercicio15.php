<html>
    <body>
        <?php
            include ('cine.php');
            include ('sala.php');
            $cine= new Cine();
            $sala1=new Sala(0,50);
            $sala2=new Sala(1,30);
            $sala3=new Sala(2,40);
            $cine->add($sala1);
            $cine->add($sala2);
            $cine->add($sala3);
            for ($x=0;$x<100;$x++){
                $nro=rand(1,3);
                $cant_butaca=rand(1,2);
                $cine->vender($nro,$cant_butaca);
            }
            $cine->mostrarOcupacion();
        ?>
</body>
</html>