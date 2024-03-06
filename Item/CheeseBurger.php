<?php

use FoodItem\FoodItem;

class CheeseBurger extends FoodItem{
    private int $cookingTime = 2;

    public function __construct() {
        $name = $this->gedFoodName();
        $description = "This is a CheeseBurder";
        $price = 14.0;
        parent::__construct($name, $description, $price);
    }


    public function gedFoodName() : string {
        $temp = explode("\\", __CLASS__);
        return end($temp);        
    }

    public function getCookTime() : int {
        return $this->cookingTime;        
    }
}