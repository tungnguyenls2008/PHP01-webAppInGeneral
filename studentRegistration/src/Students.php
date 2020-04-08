<?php
include "StudentManager.php";

class Students
{
    protected  $fullNameErr;
    protected  $emailErr;
    protected  $phoneErr;
    protected  $fullName;
    protected  $birthday;
    protected  $sex;
    protected  $address;
    protected  $classOf;
    protected  $email;
    protected  $phone;

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
    public function getSex()
    {
        return $this->sex;
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

    /**
     * @return mixed
     */
    public function getEmailErr()
    {
        return $this->emailErr;
    }

    /**
     * @return mixed
     */
    public function getFullNameErr()
    {
        return $this->fullNameErr;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getPhoneErr()
    {
        return $this->phoneErr;
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
     * @param mixed $emailErr
     */
    public function setEmailErr($emailErr)
    {
        $this->emailErr = $emailErr;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @param mixed $fullNameErr
     */
    public function setFullNameErr($fullNameErr)
    {
        $this->fullNameErr = $fullNameErr;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @param mixed $phoneErr
     */
    public function setPhoneErr($phoneErr)
    {
        $this->phoneErr = $phoneErr;
    }
    public function __construct($fullNameErr,$emailErr,$phoneErr,$fullName,$birthday,$sex,$address,$classOf,$email,$phone)
    {
        $this->setFullNameErr($fullNameErr);
        $this->setEmailErr($emailErr);
        $this->setphoneErr($phoneErr);
        $this->setfullName($fullName);
        $this->setBirthday($birthday);
        $this->setSex($sex);
        $this->setAddress($address);
        $this->setClassOf($classOf);
        $this->setEmail($email);
        $this->setPhone($phone);
    }



}