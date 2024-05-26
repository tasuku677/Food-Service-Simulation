<?php
namespace People\Customers;
use People\Person;
use Restaurants\Restaurant;
use Invoices\Invoice;

class Customer extends Person{
    protected string $name;
    protected int $age;
    protected string $address;

    public function __construct(string $name,int $age,string $address){
        parent::__construct($name, $age, $address);
    }

    public function interestedCategories(Restaurant $restaurant):string{
        return random_menu($restaurant->menu);
    }

    public function order(Restaurant $restaurant, array $categories):Invoice{
        $finalPrice = 0;
        foreach($categories as $category => $number){
            $finalPrice += $restaurant->menu[$category]->price * $number;
        }
        return new Invoice($finalPrice, date("D M d, Y G:i"), random_int(1, 100));
    }
}

function random_menu(array $menuArray){
    $maxNum = count($menuArray);
    $count = random_int(1, $maxNum-1);
    $items = array_rand($menuArray, $count);
    // $items が単一のキーの場合
    if (!is_array($items)) {
        return $menuArray[$items];
    } else {
        // $items がキーの配列の場合
        $result = [];
        foreach ($items as $key) {
            $result[] = $menuArray[$key];
        }
        return $result;
    }
}