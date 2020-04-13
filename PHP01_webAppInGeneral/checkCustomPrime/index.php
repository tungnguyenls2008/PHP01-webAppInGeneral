<?php
if (isset($_POST["submit"])) {
    $amount = $_REQUEST['amount'];
    $count1 = 0;
    $number1 = 2;

    for ($count1 = 0; $count1 < $amount;) {
        $div_count1 = 0;
        for ($i1 = 1; $i1 <= $number1; $i1++) {
            if (($number1 % $i1) == 0) {
                $div_count1++;
            }
        }
        if ($div_count1 < 3) {
            $b = $count1 + 1;
            echo $number1 . " , ";
            $count1 = $count1 + 1;
        }
        $number1 = $number1 + 1;
    }
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
<body>
<form method="post">
    <input type="number" name="amount" placeholder="Enter the amount of prime numbers">
    <input type="submit" name="submit">
</form>
</body>
</html>
