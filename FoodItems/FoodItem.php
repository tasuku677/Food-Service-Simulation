<?php
namespace FoodItems;
use FoodItems\FoodOrder;

abstract class FoodItem{
    protected string $name;
    protected string $description;
    protected float $price;

    public function __construct(string $name, string $description, float $price){
        $this->$name = $name;
        $this->$description = $description;
        $this->$price = $price;
    }
    abstract public static function getCategory():string;
}
