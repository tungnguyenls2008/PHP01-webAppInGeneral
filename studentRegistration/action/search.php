<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    include "../functions.php";
    $searchStr=$_REQUEST['searchByName'];
    searchByName($searchStr,"../students.json");
}


