<?php

namespace FoodItem;

abstract class FoodItem{
    private string $name;
    private string $description;
    private float $price;


    public static function getCategory() : string {
        return "a";
    }
}