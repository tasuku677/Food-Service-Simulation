<?php
namespace Restaurants;

use FoodItems\FoodItem;
use Invoices\Invoice;
use People\Employees\Employee;

class Restaurant{
    protected array $menu;
    protected array $employees;
    
    public function __construct(array $menu, array $employees){
        $this->$menu = $menu;
        $this->$employees = $employees;
    }

    public function order(array $categories):Invoice{
        $finalPrice = 0;
        foreach($categories as $category => $number){
            $finalPrice += $this->menu[$category]->price * $number;
        }
        return new Invoice($finalPrice, date("D M d, Y G:i"), random_int(1, 100));
    }
}