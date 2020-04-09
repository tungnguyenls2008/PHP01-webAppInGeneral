<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    include "../src/Students.php";
    include "../src/StudentManager.php";
    $fullName = $_POST['fullName'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $classOf = $_POST['className'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $hasError = false;
    if (empty($fullName)) {
        $fullNameErr = "Name can't be empty!";
        $hasError = true;
    }
    if (empty($email)) {
        $emailErr = "Email can't be empty!";
        $hasError = true;
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Not a valid email.";
            $hasError = true;
        }
    }
    if (empty($phone)) {
        $phoneErr = "Phone number is a must!";
        $hasError = true;
    }
    if ($hasError === false) {
        $student=['fullName'=>$fullName,'birthday'=>$birthday, 'gender'=>$gender,'address'=>$address, 'className'=>$classOf,'email'=>$email,'phone'=>$phone];
        $studentManager = new StudentManager("../students.json");
        $studentManager->addStudent($student);
        $fullName = NULL;
        $birthday = NULL;
        $gender = NULL;
        $address = NULL;
        $classOf = NULL;
        $email = NULL;
        $phone = NULL;
    }
    header("Location: ../index.php");

}