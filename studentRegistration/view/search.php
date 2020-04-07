<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/style.css">
</head>
<body><form method="post" action="../action/search.php">
    <input type="text" name="searchByName">
    <input type="submit" value="SEARCH">
<!--<table>
    <tr>
        <td class="studentListTd" hidden><input type="number" name="id[]" value="<?/*= $index */?>"></td>
        <td class="studentListTd"><?/*= $index + 1 */?></td>
        <td class="studentListTd"><?/*= $registration['fullName']; */?></td>
        <td class="studentListTd"><?/*= $registration['birthday']; */?></td>
        <td class="studentListTd"><?/*= $registration['sex']; */?></td>
        <td class="studentListTd"><?/*= $registration['address']; */?></td>
        <td class="studentListTd"><?/*= $registration['className']; */?></td>
        <td class="studentListTd"><?/*= $registration['email']; */?></td>
        <td class="studentListTd"><?/*= $registration['phone']; */?></td>
        <td class="studentListTd"><a href="view/edit.php?index=<?php /*echo $index */?>">EDIT</a>
            <a onclick="return confirm('Do you really want to delete this entry?')"
               href="action/delete.php?index=<?php /*echo $index */?>">DELETE</a>
            <a href="action/duplicate.php?index=<?php /*echo $index */?>">DUPLICATE</a></td>
    </tr>
</table>-->
</form>
</body>
</html>
