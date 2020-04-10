<?php
if ($_SERVER['REQUEST_METHOD'] == "GET"){
    include "../src/Students.php";
    include "../src/StudentManager.php";

    $searchStr = $_GET['searchStr'];
    $studentManager = new StudentManager('../students.json');
    $result = $studentManager->searchByName($searchStr);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<form method="get">
    <input type="text" name="searchStr" placeholder="What do you want to search?">
    <input type="submit" value="SEARCH">
    <input type=button onClick="location.href='../index.php'" value='RETURN TO HOMEPAGE'>
    <h1>RESULT</h1><br>

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
        <?php
        foreach ($result as $index => $student):
            ?>
            <tr>
                <td class="studentListTd" hidden><input type="number" name="id" value="<?= $index ?>"></td>
                <td class="studentListTd"><?= $index + 1 ?></td>
                <td class="studentListTd"><?= $student->getFullName(); ?></td>
                <td class="studentListTd"><?= $student->getBirthday(); ?></td>
                <td class="studentListTd"><?= $student->getGender(); ?></td>
                <td class="studentListTd"><?= $student->getAddress(); ?></td>
                <td class="studentListTd"><?= $student->getClassOf(); ?></td>
                <td class="studentListTd"><?= $student->getEmail(); ?></td>
                <td class="studentListTd"><?= $student->getPhone(); ?></td>
                <td class="studentListTd"><a href="../view/edit.php?index=<?php echo $index ?>">EDIT</a>
                    <a onclick="return confirm('Do you really want to delete this entry?')"
                       href="../action/delete.php?index=<?php echo $index ?>">DELETE</a>
                    <a href="../action/duplicate.php?index=<?php echo $index ?>">DUPLICATE</a></td>
            </tr>
        <?php endforeach; ?>


    </table>
</form>
</body>
</html>