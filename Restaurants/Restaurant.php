<?php
namespace Restaurants;

use FoodItems\FoodItem;
use Orders\Invoice;
use People\Employees\Employee;

class Restaurant{
    protected FoodItem $menu;
    protected Employee $employees;
    
    public function __construct(FoodItem $menu, Employee $employees){
        $this->$menu = $menu;
        $this->$employees = $employees;
    }

    public function order(string $categories):Invoice{

        return new Invoice();
    }
}