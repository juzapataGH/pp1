<html>
    <body>
        <?php
        echo "<table border='1' cellpadding ='5' cellspacing='0'>";
        for($i=0;$i<=10;$i++){
            echo"<tr>";
            for($x=0;$x<=10;$x++){
                if ($i==0 && $x==0){
                    echo "<td> X </td>";
                }
                else if ($i==0 && $x!=0){
                    echo "<td> $x </td>";
                }
                else if ($i!=0 && $x==0){
                    echo "<td> $i </td>";
                }
                else{
                echo "<td>" . ($x*$i ) . "</td>";}
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
