<?php

namespace Person;

use Restaurant\Restaurant;
use Invoice\Invoice;

class Customer extends Person{
    public function __construct(string $name, int $age, string $address) {
        parent::__construct($name, $age, $address);
    }


    public function interestedCategories(Restaurant $restraunt) : array {
        $orderrCategories = [];

    }

    public function order(Restaurant $restaurant, array $category) : Invoice {
        
    }
}