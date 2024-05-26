<?php
namespace People\Employees;

use People\Employees\Employee;
use FoodOrders\FoodOrder;

class Chef extends Employee{
    protected string $name;
    protected int $age;
    protected string $address;
    protected int $employeeId;
    protected float $salary;
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary){
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function prepareFood(FoodOrder $foodOrder):string{
        return "making" . $foodOrder;
    }
}