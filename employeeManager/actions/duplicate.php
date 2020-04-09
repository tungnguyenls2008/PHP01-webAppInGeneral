<?php
include "../class/Employee.php";
include "../class/EmployeeManager.php";
$index = $_REQUEST['index'];
$employeeManager = new EmployeeManager("../employees.json");
$employeeManager->duplicateEmployee($index, "../employees.json");
header("Location: ../index.php");