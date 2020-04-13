<?php

class drawShapes
{
    function printRectangle()
    {
        echo("<fieldset><legend>PRINT RECTANGLE</legend>");
        echo("<table><tr>");
        for ($i = 1; $i <= 10; $i++) {
            echo("</tr>");
            for ($j = 1; $j <= 50; $j++) {
                if ($i === 1 || $i === 10 || $j === 1 || $j === 50) {
                    echo("<td> o </td>");
                } else {
                    echo("<td> </td>");
                }
            }
        }
        echo("</table>");
        echo("</fieldset>");
    }
    function printSquareTriangle() {
        echo("<fieldset><legend>PRINT SQUARE TRIANGLES</legend>");
        for ($i = 1; $i <= 20; $i++) {
            echo("</br>");
            for ($j = 1; $j <= $i; $j++) {
                echo("o");
            }
        }
        echo ("</br>");
        for ($i = 20; $i >= 1; $i--) {
            echo ("</br>");
            for ($j = 1; $j <= $i; $j++) {
                echo ("o");
            }
        }
        echo ("</br>");
        for ($i = 20; $i >=1; $i--) {
            echo ("</br>");
            for( $k = 19; $k >=$i; $k--){
                echo ("&nbsp;&nbsp;");
            }
            for ($j = 1; $j <=$i; $j++) {
                echo ("o");
            }
        }
        echo ("</br>");
        for ($i=1; $i <= 20; $i++){
            echo ("</br>");
            for( $k = 19; $k >=$i; $k--){
                echo ("&nbsp;&nbsp;");
            }
            for($j=1; $j<=$i; $j++){
                echo ("o");
            }
        }

    echo("</fieldset>");
    }

    function printIsoscelesTriangle() {

        echo("<fieldset><legend>PRINT ISOSCELES TRIANGLE</legend>");

        for ($i = 1; $i <= 20; $i++) {


            for ($j = $i; $j <= 20; $j++) {

                echo "&nbsp;&nbsp;";
            }


            for ($k = 1; $k < ($i * 2); $k++) {
                echo "o";
            }
            echo "</br>";
        }

        echo("</fieldset>");
    }
    function exitAndCloseTab(){
        echo "<script>window.close();</script>";
    }
}