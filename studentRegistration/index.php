<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký học viên</title>
    <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<form method="post">

    <?php
    include "src/Students.php";
    include "src/StudentManager.php";
    $studentManager=new StudentManager('students.json');
    $students=$studentManager->getStudents();
     ?>

    <h1>STUDENT LIST</h1><br>
    <h3><a href="view/add.php">CREATE NEW ENTRY</a></h3>
    <h3><a href="view/search.php">SEARCH BY NAME</a></h3>
    <table id="studentList">
        <tr>
            <th>ID</th>
            <th>FULL NAME</th>
            <th>BIRTHDAY</th>
            <th>GENDER</th>
            <th>ADDRESS</th>
            <th>CLASS OF</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>ACTION</th>
        </tr>
        <?php foreach ($students as $index => $student):
        ?>
        <tr>
            <td class="studentListTd" hidden><input type="number" name="id[]" value="<?= $index ?>"></td>
            <td class="studentListTd"><?= $index + 1 ?></td>
            <td class="studentListTd"><?= $student['fullName']; ?></td>
            <td class="studentListTd"><?= $student['birthday']; ?></td>
            <td class="studentListTd"><?= $student['sex']; ?></td>
            <td class="studentListTd"><?= $student['address']; ?></td>
            <td class="studentListTd"><?= $student['className']; ?></td>
            <td class="studentListTd"><?= $student['email']; ?></td>
            <td class="studentListTd"><?= $student['phone']; ?></td>
            <td class="studentListTd"><a href="view/edit.php?index=<?php echo $index ?>">EDIT</a>
                <a onclick="return confirm('Do you really want to delete this entry?')"
                   href="action/delete.php?index=<?php echo $index ?>">DELETE</a>
                <a href="action/duplicate.php?index=<?php echo $index ?>">DUPLICATE</a></td>
        </tr>
        <?php endforeach; ?>

    </table>
</form>
</body>
</html>