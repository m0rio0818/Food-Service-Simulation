<?php

namespace Person;

class Chef extends Employee{



    public function prepareFood() : string {
        return "a";
    }

    public function getClassName() : string {
        $temp = explode("\\", __CLASS__);
        return end($temp);        
    }
}