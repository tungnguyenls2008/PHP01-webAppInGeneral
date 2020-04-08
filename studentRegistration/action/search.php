<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    include "../src/Students.php";
    include "../src/StudentManager.php";
    $searchStr=$_REQUEST['searchByName'];
    $studentManager = new StudentManager("../students.json");
    $studentManager->searchByName($searchStr,"../students.json");
}


