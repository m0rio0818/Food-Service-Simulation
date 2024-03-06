<?php

use FoodItem\FoodItem;

class Fettuccine extends FoodItem{
    private int $cookingTime = 15;

    public function __construct() {
        $name = $this->getFoodName();
        $description = "This is a Fettuccine";
        $price = 16.5;
        parent::__construct($name, $description, $price);
    }


    public function getFoodName() : string {
        $temp = explode("\\", __CLASS__);
        return end($temp);        
    }

    public function getCookTime() : int {
        return $this->cookingTime;        
    }
}