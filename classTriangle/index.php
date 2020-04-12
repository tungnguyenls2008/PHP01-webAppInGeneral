<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['submit'])){
    include 'class/Shape.php';
    include 'class/Triangle.php';
    $side1=(float)$_POST['side1'];
    $side2=(float)$_POST['side2'];
    $side3=(float)$_POST['side3'];
    $shape=new Shape('shape');
    $triangle=new Triangle('Triangle',$side1,$side2,$side3,'red');

    echo $triangle->__toString();
}}
?>

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
            <td><input type="number" placeholder="Enter your first side" name="side1"></td>
            <td><input type="number" placeholder="Enter your second side" name="side2"></td>
            <td><input type="number" placeholder="Enter your third side" name="side3"></td>
        </tr>
        <tr><td><input type="submit" name="submit"></td></tr>
    </table>
</form>
</body>
</html>