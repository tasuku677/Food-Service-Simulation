<?php
namespace People\Customers;
use People\Person;
use Restaurants\Restaurant;
use Invoices\Invoice;

class Customer extends Person{
    private array $categories;
    
    public function __construct(string $name,int $age,string $address, array $categories){
        parent::__construct($name, $age, $address);
        $this->categories = $categories;
    }

    public function interestedCategories(Restaurant $restaurant):array{
        $interested = [];
        // print_r($restaurant->getMenu());
        // print_r($this->categories);
        foreach($this->categories as $category => $number){
            if(array_key_exists($category, $restaurant->getMenu())){
                $interested[$category] = $number;
            }
        }
        // print_r($interested);
        return $interested;
    }

    public function order(Restaurant $restaurant, array $orderList):Invoice{
        $finalPrice = 0;
        foreach($orderList as $category => $number){
            $finalPrice += $restaurant->getMenu()[$category]->getPrice() * $number;
            
        }
        return new Invoice($finalPrice, date("D M d, Y G:i"), random_int(1, 100));
    }
}

