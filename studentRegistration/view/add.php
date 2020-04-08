<?php
include "../src/Students.php";
include "../src/StudentManager.php";
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
<body>
<form action="../action/create.php" method="post">
    <fieldset>
        <legend><h2>REGISTER NEW STUDENT ENTRY</h2></legend>
        <table>
            <tr>
                <td>FULL NAME</td>
                <td><input type="text" name="fullName" value="<?php echo $fullName;  ?>">
                    <span class=" error">* <?php echo $fullNameErr;  ?></span></td>
            </tr>
            <tr>
                <td>BIRTHDAY</td>
                <td><input type="date" name="birthday" value="<?php echo $birthday; ?>"></td>
            </tr>
            <tr>
                <td>GENDER</td>
                <td>
                    <input type="radio" id="male" name="sex" value="male">Male
                    <input type="radio" id="female" name="sex" value="female">Female
                    <input type="radio" id="other" name="sex" value="other">Other
                </td>
            </tr>
            <tr>
                <td>ADDRESS</td>
                <td><textarea name="address" placeholder="Enter address here"
                              value="<?php echo $address;  ?>"></textarea></td>
            </tr>
            <tr>
                <td>CLASS OF</td>
                <td><select name=" className">
                        <option value="so">---Pick one---</option>
                        <option value="PHP 01">PHP 01</option>
                        <option value="PHP 02">PHP 02</option>
                        <option value="JAVA 01">JAVA 01</option>
                        <option value="JAVA 02">JAVA 02</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td><input type="text" name="email" value="<?php echo $email;  ?>">
                    <span class=" error">* <?php echo $emailErr; ?></span></td>
            </tr>
            <tr>
                <td>PHONE NUMBER</td>
                <td><input type="text" name="phone" value="<?php echo $phone;  ?>">
                    <span class="error">* <?php echo $phoneErr; ?></span></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <p><input type="submit" name="registrar" value="REGISTER"/>
                        <input type="reset" name="reset" value="RESET"/></p>
                </td>
            </tr>
        </table>
    </fieldset>
</body>
</html>
