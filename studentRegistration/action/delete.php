<?php
include "../src/Students.php";
include "../src/StudentManager.php";
$index = $_REQUEST['index'];
$studentManager = new StudentManager("../students.json");
$studentManager->deleteStudent($index, "../students.json");
header("Location: ../index.php");