<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    include "../class/Employee.php";
    include "../class/EmployeeManager.php";
    $index = $_REQUEST['index'];
    $surName=$_POST['surName'];
    $name=$_POST['name'];
    $birthDay=$_POST['birthDay'];
    $address=$_POST['address'];
    $occupation=$_POST['occupation'];

    $employee=['surName'=>$surName,'name'=>$name ,'birthDay'=>$birthDay,'address'=>$address,'occupation'=>$occupation];
    $employeeManager=new EmployeeManager('../employees.json');
    $employeeManager->editEmployee($employee,$index,'../employees.json');
}
header('Location: ../index.php');