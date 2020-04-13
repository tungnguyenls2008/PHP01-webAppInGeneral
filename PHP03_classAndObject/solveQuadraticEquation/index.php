
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <td><input type="number" name="a" placeholder="Enter a"></td>
        </tr>
        <tr>
            <td><input type="number" name="b" placeholder="Enter b"></td>
        </tr>
        <tr>
            <td><input type="number" name="c" placeholder="Enter c"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="SOLVE FOR X"></td>
        </tr>
    </table>
</form>
<?php
include "QuadraticEquation.php";
$a = $_REQUEST['a'];
$b = $_REQUEST['b'];
$c = $_REQUEST['c'];
$solve = new QuadraticEquation($a, $b, $c);
$delta = $solve->getDiscriminant($a, $b, $c);
if (isset($_POST['submit'])) {
    if ($delta >= 0) {
        echo 'Your equation is: '.$a."x&sup2; + ".$b."x + ".$c.'=0'.'<br>';
        echo 'first root is: ' . $solve->getRoot1($a, $b, $delta) . '<br>';
        echo 'second root is: ' . $solve->getRoot2($a, $b, $delta) . '<br>';
    }
    if ($delta < 0) {
        echo 'This Equation has no root.';
    }
}
?>
</body>
</html>
