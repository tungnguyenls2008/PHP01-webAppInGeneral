<?php


function convertCurrency()
{
    $a = $_REQUEST['sourceCurrency'];
    $s = $_REQUEST["source"];
    $t = $_REQUEST["target"];
    return round($a * $t / $s);
}


if (isset($_POST["submit"])) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        convertCurrency();
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
<fieldset>
    <legend>CURRENCY CONVERSION</legend>
    <form method="post" name="conversion">
        <table>
            <tr>
                <td>Amount</td>
                <td>From Currency</td>
                <td>To Currency</td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td><input type="number" name="sourceCurrency" placeholder="amount of currency"></td>
                <td><select name="source">
                        <option value="23000" name="sourceVND">Vietnam Dong</option>
                        <option value="7" name="sourceCNY">China Yuan</option>
                        <option value="1" name="sourceUSD">US Dollar</option>
                    </select></td>
                <td><select name="target" class="target">
                        <option value="23000" name="VND" id="a">Vietnam Dong</option>
                        <option value="7" name="CNY" id="b">China Yuan</option>
                        <option value="1" name="USD" id="c">US Dollar</option>
                    </select></td>
                <td><input type="submit" name="submit" value="CONVERT NOW"></td>
                <td>
                    <div id="messageDiv"><?php echo 'Result: ' . convertCurrency(); ?>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</fieldset>

</body>
</html>
