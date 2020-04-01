<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>READ OUT NUMBER</title>
</head>
<body>
<form method="get">
    <label>
        <input type="number" name="numInput">
    </label>
    <input type="submit" name="submit" value="READ IT OUT">
    <?php

    if (isset($_GET["submit"])) {
            $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
            echo $f->format($_GET["numInput"]);
        }
    ?>

</form>
</body>
</html>