<?php
namespace FoodOrders;
use FoodItems\FoodItem;

class FoodOrder{
    /*@var FoodItem[] $items*/
    protected array $items;
    protected string $orderTime;
    

    public function __construct(array $items, string $orderTime){
        $this->items = $items;
        $this->orderTime = $orderTime;
    }

    public  function __toString():string{
        $orderString = array_map(function($order){
            return (string)$order;
        } , $this->items);
        return implode(",", $orderString);
    }
}