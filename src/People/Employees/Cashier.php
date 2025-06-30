<?php
namespace People\Employees;

use People\Employees\Employee;
use FoodOrders\FoodOrder;
use Restaurants\Restaurant;
use Invoices\Invoice;

class Cashier extends Employee{

    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary){
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function generateOrder(array $categories, Restaurant $restaurant): FoodOrder{
        return new FoodOrder( $categories, date("D M d, Y G:i"));
    }

    public function generateInvoice(FoodOrder $order): Invoice{
        $finalPrice = 0;
        foreach($order as $foodItem => $number){
            $finalPrice += $foodItem * $number;
        }
        return new Invoice($finalPrice, date("D M d, Y G:i"), random_int(1, 100));
    }

}