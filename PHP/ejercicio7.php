<html>
    <body>
        <?php
            function calcularRadio($radio,$altura){
                $volumen= 3.1416*$radio*$radio*$altura;
                return $volumen;
            }
            echo calcularRadio(2,4);
        ?>
        </body>
    </html>