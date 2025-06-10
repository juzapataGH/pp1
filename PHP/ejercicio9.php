<hmtl>
    <body>
        <?php
            validar($nombre,$apellido);
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
        ?>
</body>
</hmtl>