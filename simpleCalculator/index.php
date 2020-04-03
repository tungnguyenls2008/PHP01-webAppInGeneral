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
    <input type="number" name="_1stInput">
    <select name="_calculations">
        <option value="calSelect">---Pick one---</option>
        <option value="addition">+</option>
        <option value="minus">-</option>
        <option value="multiplication">*</option>
        <option value="divide">/</option>
    </select>
    <input type="number" name="_2ndInput">
    <input type="submit" name="submit" value="CALCULATE IT!">
    <div name="result"></div>
</form>
<?php
if (isset($_POST["submit"])) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        include "Calculator.php";
        $_1stNum = $_REQUEST['_1stInput'];
        $_2ndNum = $_REQUEST['_2ndInput'];
        $operator = $_REQUEST['_calculation'];
        $result = $_REQUEST['result'];
        try {
            $cal = new Calculator();
            $result = $cal->calculate($_1stNum, $_2ndNum);

            echo $result;
        } catch (Exception $exception) {
            $_REQUEST['result']->getMessage();
        }
    }
}
?>
</body>
</html>
