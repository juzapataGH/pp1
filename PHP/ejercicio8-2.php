<html>
    <body>
        <?php
        $numero1=$_GET["numero1"];
        $numero2=$_GET["numero2"];
        if ($numero1>$numero2)
            echo "<p>$numero1</p>";
        else
            echo"<p>$numero2</p>";
        ?>
</body>
</html>