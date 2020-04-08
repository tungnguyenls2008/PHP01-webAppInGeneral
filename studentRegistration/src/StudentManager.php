<?php
include "Students.php";

class StudentManager
{
    protected $listStudent = [];
    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    function loadRegistrations()
    {
        $jsonData = file_get_contents($this->filePath);
        return json_decode($jsonData, true);
    }

    function saveDataJSON($filename, $data)
    {
        try {
            $arr_data = loadRegistrations($filename);
            array_push($arr_data, $data);
            $jsonData = json_encode($arr_data, JSON_PRETTY_PRINT);
            file_put_contents($filename, $jsonData);
            echo 'Data successfully saved';
        } catch (Exception $e) {
            echo "ERROR: ", $e->getMessage(), "\n";
        }
    }

    function getStudents()
    {
        $data = $this->loadRegistrations();
        foreach ($data as $obj) {
            $student = new Students($obj->fullNameErr, $obj->emailErr, $obj->phoneErr, $obj->fullName, $obj->birthday, $obj->sex, $obj->address, $obj->classOf, $obj->email, $obj->phone);
            array_push($this->listStudent, $student);
        }
        return $this->listStudent;
    }


    public function addStudent($student)
    {
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $students = $this->loadRegistrations();
            /*$student = [$fullName = $_POST['fullName'],
                $birthday = $_POST['birthday'],
                $sex = $_POST['sex'],
                $address = $_POST['address'],
                $classOf = $_POST['className'],
                $email = $_POST['email'],
                $phone = $_POST['phone']
            ];*/

            array_push($students, $student);
            $this->saveDataJSON("students.json", $students);

            /*$index = $_POST['id[]'];
            $fullName = $_POST['fullName'];
            $birthday = $_POST['birthday'];
            $sex = $_POST['sex'];
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
                $student = ['fullName' => $fullName, 'birthday' => $birthday, 'sex' => $sex, 'address' => $address, 'className' => $classOf, 'email' => $email, 'phone' => $phone];
                $this->saveDataJSON("students.json", $student);
                $fullName = NULL;
                $birthday = NULL;
                $sex = NULL;
                $address = NULL;
                $classOf = NULL;
                $email = NULL;
                $phone = NULL;
            }*/


        }
    }

    function deleteStudent($index, $filePath)
    {

        $registrations = loadRegistrations($filePath);
        unset($registrations[$index]);
        $newData = json_encode($registrations, JSON_PRETTY_PRINT);
        file_put_contents($filePath, $newData);

    }

    function updateStudent($data, $index, $filePath)
    {
        $registrations = loadRegistrations($filePath);
        $registrations[$index] = $data;
        $dataUpdated = json_encode($registrations);
        file_put_contents($filePath, $dataUpdated);

    }

    function duplicateStudent($index, $filePath)
    {
        $registrations = loadRegistrations($filePath);
        $registrations[] = array_push($registrations, $registrations[$index]);

        $dataUpdated = json_encode($registrations);
        file_put_contents($filePath, $dataUpdated);
    }

    function searchByName($searchStr, $filePath)
    {
        $registrations = loadRegistrations($filePath);
        $index = array_search($searchStr, $registrations);
        $result = $registrations[$index];

        var_dump($result);
    }

    function getStudentByIndex($index, $filePath)
    {
        $registrations = loadRegistrations($filePath);
        return $registrations[$index];
    }
}