<?php
namespace FoodItems;

abstract class FoodItem{
    protected string $name;
    protected string $description;
    protected float $price;

    public function __construct(string $name, string $description, float $price){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
    abstract public static function getCategory():string;
    
    public function getPrice(): float {
        return $this->price;
    } 
    public function __toString() :string{
        return $this->name . ", " . $this->description . ", " . $this->price;
    }
}
