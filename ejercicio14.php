<hmtl>
    <body>
        <?php
        try{
        validar($_POST["nombre"],$_POST["apellido"]);
        echo " Nombre: " . $_POST["nombre"] . "<br>";
        echo " Apellido: " . $_POST["apellido"] . "<br>";
        echo " Sexo: " . $_POST["sexo"] . "<br>";
        echo " Estado civil: " . $_POST["ecivil"] . "<br>";
        if (isset($_POST["deseo"]))
            echo "<p>Deseo recibir info sobre novedades y ofertas </p>";
        else
            echo "<p>No deseo recibir info sobre novedades y ofertas</p>";
        if (isset($_POST["acepto"]))
            echo "<p>He leido y acepto las condiciones generales</p>";
        else
            echo "<p>No he leido ni acepto las condiciones generales</p>";}
        catch (Exception $e){
            echo $e->getMessage();
            echo '<br><a href="ejercicio14_9.html">Volver</a>';
        }
        function validar($nombre,$apellido){
            if ($nombre==null && $apellido==null){
                throw new Exception ('Tanto el nombre como el apellido no pueden estar en blanco');}
            else if ($apellido==null){
                throw new Exception ('El apellido no puede estar en blanco');
            }
            else if ($nombre==null){
                throw new Exception ('El nombre no puede estar en blanco');
            }
            else
                return true;
        }
        ?>
        
</body>
</hmtl>