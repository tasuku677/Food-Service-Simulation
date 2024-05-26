<?php
namespace People\Employees;

use People\Person;

class Employee extends Person{
    protected string $name;
    protected int $age;
    protected string $address;
    protected int $employeeId;
    protected float $salary;

    public function __construct(string $name,int $age,string $address, int $employeeId, float $salary){
        parent::__construct($name, $age, $address);
        $this->$employeeId = $employeeId;
        $this->$salary = $salary;
    }
    
}