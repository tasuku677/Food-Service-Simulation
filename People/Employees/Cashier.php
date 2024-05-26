<?php
namespace People\Employees;

use People\Employees\Employee;
use FoodOrders\FoodOrder;
use Restaurants\Restaurant;

class Cashier extends Employee{
    protected string $name;
    protected int $age;
    protected string $address;
    protected int $employeeId;
    protected float $salary;
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary){
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function generateOrder(array $categories, Restaurant $restaurant):FoodOrder{
        return new FoodOrder( , date("D M d, Y G:i"));
    }





}