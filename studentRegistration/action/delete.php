<?php
include "../functions.php";
$index = $_REQUEST['index'];

deleteStudent($index, "../students.json");
header("Location: ../index.php");