<?php
namespace FoodItems;
use FoodItems\FoodItem;

class HawaianPizza extends FoodItem{
    const CATEGORY = "Pizza";

    public function __construct($name, $description, $price){
        parent::__construct($name, $description, $price);
    }

    public static function getCategory():string{
        return self::CATEGORY;
    } 
}
