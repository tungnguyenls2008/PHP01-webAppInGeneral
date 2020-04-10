<?php

class StudentManager
{
    protected $listStudent = [];
    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function loadRegistrations()
    {
        $jsonData = file_get_contents($this->filePath);
        return json_decode($jsonData, true);
    }

    public function saveDataJSON($filename, $data)
    {
        try {

            $jsonData = json_encode($data, JSON_PRETTY_PRINT);
            file_put_contents($filename, $jsonData);
            echo 'Data successfully saved';
        } catch (Exception $e) {
            echo "ERROR: ", $e->getMessage(), "\n";
        }
    }

    public function getStudents()
    {
        $data = $this->loadRegistrations();

        foreach ($data as $obj) {
            $student = new Students($obj['fullName'], $obj['birthday'], $obj['gender'], $obj['address'], $obj['classOf'], $obj['email'], $obj['phone']);

            array_push($this->listStudent, $student);
        }
        return $this->listStudent;
    }


    function addStudent($student)
    {

        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $studentsList = $this->loadRegistrations();
            array_push($studentsList, $student);
            $this->saveDataJSON("../students.json", $studentsList);
        }
    }

    function deleteStudent($index, $filePath)
    {

        $registrations = $this->loadRegistrations();
        unset($registrations[$index]);
        $newData = json_encode($registrations, JSON_PRETTY_PRINT);
        file_put_contents($filePath, $newData);

    }

    function updateStudent($data, $index, $filePath)
    {
        $registrations = $this->loadRegistrations();
        $registrations[$index] = $data;
        $dataUpdated = json_encode($registrations, JSON_PRETTY_PRINT);
        file_put_contents($filePath, $dataUpdated);

    }

    function duplicateStudent($index, $filePath)
    {
        $registrations = $this->loadRegistrations();
        array_push($registrations, $registrations[$index]);
        $dataUpdated = json_encode($registrations, JSON_PRETTY_PRINT);
        file_put_contents($filePath, $dataUpdated);
    }

    function searchByName($searchStr)
    {
        $students = $this->loadRegistrations();
        $result = [];
        foreach ($students as $item) {
            if ($item['fullName']==$searchStr) {
                $student= new Students($item['fullName'],$item['birthday'],$item['gender'],$item['address'],$item['classOf'],$item['email'],$item['phone']);
                array_push($result, $student);
            }
        }
        return $result;
    }

    public function getStudentByIndex($index)
    {
        $registrations = $this->loadRegistrations();
        $data = new Students($registrations[$index]['fullName'], $registrations[$index]['birthDay'], $registrations[$index]['gender'], $registrations[$index]['address'], $registrations[$index]['classOf'], $registrations[$index]['email'], $registrations[$index]['phone']);
        array_push($this->listStudent, $data);

        return $this->listStudent;
    }
}