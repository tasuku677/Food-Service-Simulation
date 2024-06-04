<?php
namespace FoodItems;
use FoodItems\FoodItem;

class Spaghetti extends FoodItem{
    protected string $name;
    protected string $description;
    protected float $price;
    const CATEGORY = "Spaghetti";

    public function __construct($name, $description, $price){
        parent::__construct($name, $description, $price);
    }

    public static function getCategory():string{
        return self::CATEGORY;
    } 
}