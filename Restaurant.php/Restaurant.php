<?php

namespace Restaurant;


class Restaurant{
    private array $menu;
    private array $employees;

    public function __construct(array $menu, array $employees) {
        $this->menu = $menu;
        $this->employees = $employees;
    }

    public function order(array $categories) : string {

    }
}