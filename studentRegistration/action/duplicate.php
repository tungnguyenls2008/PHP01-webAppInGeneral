<?php
include "../src/Students.php";
include "../src/StudentManager.php";
$index = $_REQUEST['index'];
$studentManager = new StudentManager("../students.json");
$studentManager->duplicateStudent($index, "../students.json");
header("Location: ../index.php");