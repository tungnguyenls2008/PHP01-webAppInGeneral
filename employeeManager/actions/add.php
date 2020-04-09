<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    include "../class/Employee.php";
    include "../class/EmployeeManager.php";
    $surName=$_POST['surName'];
    $name=$_POST['name'];
    $birthDay=$_POST['birthDay'];
    $address=$_POST['address'];
    $occupation=$_POST['occupation'];

    $employee=['surName'=>$surName,'name'=>$name ,'birthDay'=>$birthDay,'address'=>$address,'occupation'=>$occupation];
    $employeeManager=new EmployeeManager('../employees.json');
    $employeeManager->addEmployee($employee);
}
header('Location: ../index.php');