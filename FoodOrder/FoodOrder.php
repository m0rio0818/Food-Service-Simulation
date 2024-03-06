<?php

namespace FoodOrder;

use Other\Timestamp;

class FoodOrders{
    private array $items;
    private Timestamp $orderTime;

    public function __construct(array $items) {
        $this->items = $items;
        $this->orderTime = new Timestamp();
    }


    public function getItems() : array {
        return $this->items;
    }

    public function getOrderTime() : Timestamp {
        return $this->orderTime;
    }
}