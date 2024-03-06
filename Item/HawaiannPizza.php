<?php

use FoodItem\FoodItem;

class HawaiannPizza extends FoodItem{
    private int $cookingTime = 21;

    public function __construct() {
        $name = $this->getFoodName();
        $description = "This is a HawaiannPizza";
        $price = 18.5;
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