<?php
namespace Orders;
use FoodItems\FoodItem;

class FoodOrder{
    protected FoodItem $items;
    protected string $orderTime;

    public function __construct(FoodItem $items, string $orderTime){
        $this->$items = $items;
        $this->$orderTime = $orderTime;
    }
}