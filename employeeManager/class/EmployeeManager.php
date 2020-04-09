<?php


class EmployeeManager
{
    protected $filePath;
    protected $employeeList = [];


    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }


    /**
     * @return array
     */
    public function getEmployeeList()
    {
        $data = $this->loadEmployeeList();

        foreach ($data as $obj) {
            $employee = new Employee($obj['surName'], $obj['name'], $obj['birthDay'], $obj['address'], $obj['occupation']);

            array_push($this->employeeList, $employee);
        }
        return $this->employeeList;
    }

    public function addEmployee($employee)
    {
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $employeeList = $this->loadEmployeeList();
            array_push($employeeList, $employee);
            $this->saveDataJSON('../employees.json', $employeeList);
        }
    }

    public function getEmployeeInfo()
    {

    }

    public function deleteEmployee($index, $filePath)
    {
        $employeeList = $this->loadEmployeeList();
        unset($employeeList[$index]);
        $newEmployeeList = json_encode($employeeList, JSON_PRETTY_PRINT);
        file_put_contents($filePath, $newEmployeeList);
    }

    public function editEmployee($data, $index, $filePath)
    {
        $employeeList = $this->loadEmployeeList();
        $employeeList[$index] = $data;
        $newEmployeeList = json_encode($employeeList, JSON_PRETTY_PRINT);
        file_put_contents($filePath, $newEmployeeList);
    }

    public function duplicateEmployee($index, $filePath)
    {
        $employeeList = $this->loadEmployeeList();
        array_push($employeeList, $employeeList[$index]);
        $dataUpdated = json_encode($employeeList, JSON_PRETTY_PRINT);
        file_put_contents($filePath, $dataUpdated);
    }

    public function loadEmployeeList()
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

    public function getEmployeeByIndex($index)
    {
        $employeeList = $this->loadEmployeeList();
        $employee = new Employee($employeeList[$index]['surName'], $employeeList[$index]['name'], $employeeList[$index]['birthDay'], $employeeList[$index]['address'], $employeeList[$index]['occupation']);
        array_push($this->employeeList, $employee);
        return $this->employeeList;

    }
}