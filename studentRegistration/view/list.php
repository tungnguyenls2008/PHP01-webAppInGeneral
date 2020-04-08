<link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../css/style.css">
<h2>Registration list</h2>
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
    include "../src/Students.php";
    include "../src/StudentManager.php";
    foreach ($registrations as $index => $registration):
        ?>
        <tr>
            <td class="studentListTd" hidden><input type="number" name="id[]" value="<?= $index ?>"></td>
            <td class="studentListTd"><?= $index + 1 ?></td>
            <td class="studentListTd"><?= $registration['fullName']; ?></td>
            <td class="studentListTd"><?= $registration['birthday']; ?></td>
            <td class="studentListTd"><?= $registration['sex']; ?></td>
            <td class="studentListTd"><?= $registration['address']; ?></td>
            <td class="studentListTd"><?= $registration['className']; ?></td>
            <td class="studentListTd"><?= $registration['email']; ?></td>
            <td class="studentListTd"><?= $registration['phone']; ?></td>
            <td class="studentListTd"><input type="button" name="EDIT" value="EDIT">
                <input type="submit" name="DELETE[<?=$index?>]" value="DELETE">
                <input type="button" name="DUPLICATE" value="DUPLICATE"></td>
        </tr>
    <?php endforeach; ?>
</table>
