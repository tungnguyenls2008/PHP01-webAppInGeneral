<?php
include "../functions.php";
$index = (int)$_REQUEST['index'];

duplicateStudent($index, "../students.json");
header("Location: ../index.php");