<?php
namespace FoodItems;
use FoodItems\FoodItem;

class Fettuccine extends FoodItem{
    const CATEGORY = "Fettuccine";

    public function __construct($name, $description, $price){
        parent::__construct($name, $description, $price);
    }

    public static function getCategory():string{
        return self::CATEGORY;
    } 
}