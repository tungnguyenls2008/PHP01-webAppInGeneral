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
    <select name="shapes">
        <option value="options">---Select---</option>
        <option value="rectangle">Rectangle</option>
        <option value="squareTriangle">Square triangle</option>
        <option value="isoscelesTriangle">Isosceles triangle</option>
        <option value="exitAndClose">Exit and Close</option>
    </select>
    <input type="submit" name="submit" value="DO IT!"><br>
    <div name="display"></div>
</form>
<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["shapes"])) {
        include "drawShapes.php";
        $display = $_REQUEST['display'];
        $rec = new drawShapes();
        if ($_POST['shapes'] == 'rectangle') {
            $display = $rec->printRectangle();
        }else if ($_POST['shapes'] == 'squareTriangle'){
            $display = $rec->printSquareTriangle();
        }else if ($_POST['shapes'] == 'isoscelesTriangle'){
            $display = $rec->printIsoscelesTriangle();
        }else if ($_POST['shapes'] == 'exitAndClose'){
            $rec->exitAndCloseTab();
        }
    }

}
?>
</body>
</html>
