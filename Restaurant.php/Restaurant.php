<?php

namespace Restaurant;

use Person\Cashier;
use Person\Chef;


class Restaurant{
    private array $menu;
    private array $employees;

    public function __construct(array $menu, array $employees) {
        $this->menu = $menu;
        $this->employees = $employees;
    }

    public function order(array $categories) : string {
        $cachier = $this->getCachier();
        $foodOrder = $cachier->generateOrder($categories, $this);

    }

    public function getMenu() : array {
        return $this->menu;        
    }

    public function getEmployees() : array {
        return $this->employees;        
    }

    public function getChef() : Chef {
        foreach ($this->employees as $employee){
            if ($employee::class == "Persons\Employees\Chef"){
                return $employee;
            }
        }
    }

    public function getCachier() :  Cashier{
        foreach ($this->employees as $employee){
            if ($employee::class == "Persons\Employees\Cashier"){
                return $employee;
            }
        }
    }

    

}