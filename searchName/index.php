<?php
$firstList = array('John','Jeny','Rose','Jack');
$secondList = array('Adam','Rose','Tyson','Jack','Tom');
if (isset($_POST["submit"])){

    $result=array_intersect($firstList,$secondList);
    var_dump($result);
}
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
<body><form method="post">
<input type="submit" name="submit">
</form>
</body>
</html>
