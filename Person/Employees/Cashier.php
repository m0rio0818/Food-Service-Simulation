<?php

namespace Person;

use FoodOrder\FoodOrders;
use Invoice\Invoice;
use Restaurant\Restaurant;

class Cashier extends Employee
{
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary)
    {
        parent::__construct($name, $age,  $address,  $employeeId, $salary);
    }


    public function generateOrder(array $categories, Restaurant $restaurant): void
    {
        echo $this->getName() . "recived Order from Customer\n";
        $order = new FoodOrders();      
    }

    public function generateInvoice(FoodOrders $foodOrder): Invoice
    {
        // $finalPrice = 
        return new Invoice();
    }

    public function getClassName() : string {
        $temp = explode("\\", __CLASS__);
        return end($temp);        
    }
}
