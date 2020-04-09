<?php
include "../class/Employee.php";
include "../class/EmployeeManager.php";
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
<form method="post" action="../actions/add.php">
    <fieldset>
        <legend>ADD NEW EMPLOYEE</legend>
        <table>
            <tr>
                <td>SURNAME:</td>
                <td><input type="text" name="surName"></td>
            </tr>
            <tr>
                <td>NAME:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>BIRTHDAY:</td>
                <td><input type="date" name="birthDay"></td>
            </tr>
            <tr>
                <td>ADDRESS:</td>
                <td><textarea  name="address" placeholder="Enter your address"></textarea></td>
            </tr>
            <tr>
                <td>OCCUPATION:</td>
                <td><input type="text" name="occupation"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <p><input type="submit" name="register" value="ADD THIS EMPLOYEE"/>
                        <input type="reset" name="reset" value="RESET"/></p>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
