
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
    <?php
    include 'class/Employee.php';
    include 'class/EmployeeManager.php';
    $employeeManager = new EmployeeManager('employees.json');
    $employeeList = $employeeManager->getEmployeeList();
    ?>
    <fieldset>
        <legend>EMPLOYEE MANAGER</legend>
        <a href="interface/add.php">ADD NEW EMPLOYEE</a><br>
        <table>
            <tr>
                <th>ID</th>
                <th>SURNAME</th>
                <th>NAME</th>
                <th>BIRTHDAY</th>
                <th>ADDRESS</th>
                <th>OCCUPATION</th>
                <th>ACTION</th>
            </tr>

            <?php foreach ($employeeList as $index => $employee):
                ?>
                <tr>
                    <td hidden><input type="number" name="id[]" value="<?= $index ?>"></td>
                    <td><?= $index + 1 ?></td>
                    <td><?= $employee->getSurName(); ?></td>
                    <td><?= $employee->getName(); ?></td>
                    <td><?= $employee->getBirthDay(); ?></td>
                    <td><?= $employee->getAddress(); ?></td>
                    <td><?= $employee->getOccupation(); ?></td>
                    <td><a href="interface/edit.php?index=<?php echo $index ?>">EDIT</a>
                        <a onclick="return confirm('Do you really want to delete this entry?')"
                           href="actions/delete.php?index=<?php echo $index ?>">DELETE</a>
                    <a href="actions/duplicate.php?index=<?php echo $index ?>">DUPLICATE</a></td>
                </tr>
            <?php endforeach ?>
        </table>
    </fieldset>
</form>
</body>
</html>
