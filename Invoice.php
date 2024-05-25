<?php
namespace FoodItems;

class Invoice{
    protected float $finalPrice;
    protected string $orderTime;
    protected int $estimatedTimeMinutes;

    public function __construct(float $finalPrice, string $orderTime, int $estimatedTimeMinutes){
        $this->$finalPrice = $finalPrice;
        $this->$orderTime = $orderTime;
        $this->$estimatedTimeMinutes = $estimatedTimeMinutes;
    }
    
}

