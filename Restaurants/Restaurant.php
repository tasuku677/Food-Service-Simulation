<?php
namespace Restaurants;

use FoodItems\FoodItem;
use Orders\Invoice;
use People\Employees\Employee;

class Restaurant{
    protected array $menu;
    protected array $employees;
    
    public function __construct(array $menu, array $employees){
        $this->$menu = $menu;
        $this->$employees = $employees;
    }

    public function order(string $categories):Invoice{
        return new Invoice();
    }
}