<?php

namespace Person;

use Restaurant\Restaurant;


class Customer extends Person{
    public function __construct(string $name, int $age, string $address) {
        parent::__construct($name, $age, $address);
    }


    public function interestedCategories(Restaurant $restraunt) : void {

    }

    public function order(Restaurant $restaurant, array $category) : void {
        
    }
}