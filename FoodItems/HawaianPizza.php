<?php
namespace FoodItems;
use FoodItems\FoodItem;

class HawaianPizza extends FoodItem{
    protected string $name;
    protected string $description;
    protected float $price;
    const CATEGORY = "Pizza";

    public function __construct($name, $description, $price){
        parent::__construct($name, $description, $price);
    }

    static function 
}
