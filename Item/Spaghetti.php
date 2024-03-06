<?php

use FoodItem\FoodItem;

class Spaghetti extends FoodItem{
    private int $cookingTime = 13;

    public function __construct() {
        $name = $this->getFoodName();
        $description = "This is a Spaghetti";
        $price = 21.0;
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