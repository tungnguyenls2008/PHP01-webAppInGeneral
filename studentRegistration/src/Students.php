<?php
//include_once  "StudentManager.php";

class Students
{

    protected  $fullName;
    protected  $birthday;
    protected  $gender;
    protected  $address;
    protected  $classOf;
    protected  $email;
    protected  $phone;

    public function __construct($fullName,$birthday,$gender,$address,$classOf,$email,$phone)
    {

        $this->fullName=$fullName;
        $this->birthday=$birthday;
        $this->gender=$gender;
        $this->address=$address;
        $this->classOf=$classOf;
        $this->email=$email;
        $this->phone=$phone;
    }
    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getClassOf()
    {
        return $this->classOf;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }


    public function getPhone()
    {
        return $this->phone;
    }


    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $classOf
     */
    public function setClassOf($classOf)
    {
        $this->classOf = $classOf;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }



    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }


    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param mixed $gender
     */
    public function setSex($gender)
    {
        $this->gender = $gender;
    }





}