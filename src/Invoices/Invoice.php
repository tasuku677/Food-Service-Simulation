<?php
namespace Invoices;

class Invoice{
    protected float $finalPrice;
    protected string $orderTime;
    protected int $estimatedTimeMinutes;

    public function __construct(float $finalPrice, string $orderTime, int $estimatedTimeMinutes){
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
        $this->estimatedTimeMinutes = $estimatedTimeMinutes;
    }
    
    public function __toString():string{
        return "finalPrice ".$this->finalPrice.", orderTime is ".$this->orderTime.", will be made in ".$this->estimatedTimeMinutes;
    }
}

