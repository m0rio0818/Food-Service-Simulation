<?php

namespace Invoice;

use Other\Timestamp;


class Invoice
{
    private float $finalPrice;
    private Timestamp $orderTime;
    private int $estimatedTimeInMinutes;

    public function __construct(Timestamp $timestamp)
    {
        $this->finalPrice = 0.0;
        $this->orderTime = $timestamp;
        $this->estimatedTimeInMinutes = 0;
    }

    public function addEstimatedTimeInMinutes(int $estmimatedMin): void
    {
        $this->estimatedTimeInMinutes += $estmimatedMin;
    }

    public function printInvoice(): void
    {
        $date = $this->getOrderTime();
        $price = $this->getFinalPrice();

        $hr = "------------------------------------------------\n";

        printf(
            "%sDate: {%s}\nFinal Price: %s\n%s",
            $hr,
            $date,
            $price,
            $hr
        );
    }

    public function addPrice(float $price): void
    {
        $this->finalPrice += $price;
    }

    public function getFinalPrice(): float
    {
        return $this->finalPrice;
    }

    public function getOrderTime(): Timestamp
    {
        return $this->orderTime;
    }

    public function setEstimatedTimeInMinutes(int $min): void
    {
        $this->estimatedTimeInMinutes += $min;
    }

    public function getEstimatedTimeInMinutes(): int
    {
        return $this->estimatedTimeInMinutes;
    }
}
