<?php

namespace Person;

class Employee extends Person{
    public function __construct(string $name, int $age, string $address) {
        parent::__construct($name, $age, $address);
    }

    
}