<html>
    <body>
        <?php
        include('celda.php');
        include('tabla.php');
        $tabla= new Tabla();
        for ($i=0;$i<=9;$i++){
            $celda=new Celda();
            $celda->setNro($i);
            $celda->setTexto("Texto celda");
            $tabla->add($celda);
        }
        $tabla->mostrarCeldas($tabla);
        ?>

</body>
</html>