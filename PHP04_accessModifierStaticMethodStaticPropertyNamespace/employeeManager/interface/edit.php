<?php
include "../class/Employee.php";
include "../class/EmployeeManager.php";
$index=(int)$_REQUEST['index'];
$employeeManager=new EmployeeManager('../employees.json');
$employee=$employeeManager->getEmployeeByIndex($index);
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
<form method="post" action="../actions/edit.php?index=<?php echo $index ?>">
    <fieldset>
        <legend>EDIT EMPLOYEE</legend>
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
            <td>
                <p><input type="submit" name="edit" value="EDIT THIS EMPLOYEE"/>
                    <input type="reset" name="reset" value="RESET"/></p>
            </td>
        </table>
    </fieldset>
</form>
</body>
</html>
