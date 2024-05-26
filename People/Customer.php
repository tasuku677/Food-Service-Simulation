<?php
// namespace People;
// use People\Person;
// use Restaurants\Restaurant;
// class Customer extends Person{
//     protected string $name;
//     protected int $age;
//     protected string $address;

//     public function __construct(string $name,int $age,string $address){
//         parent::__construct($name, $age, $address);
//     }

//     public function interestedCategories(Restaurant $restaurant):string{
//     $maxNum = count($restaurant->menu);
//     $count = random_int(0, $maxNum);
//     $items = array_rand($restaurant->menu, $count); 
//     return $items;
//     }
// }


$menu = ["Cheeze", "Carrot", "Eggs", "Juju", "Source", "Honey"];
$maxNum = count($menu);
$count = random_int(0, $maxNum-1);
$items = array_rand($menu, $count); 
// echo $menu[$items];