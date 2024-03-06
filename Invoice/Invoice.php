<?php

namespace Invoice;

use Other\Timestamp;


class Invoice
{
    private float $finalPrice;
    private Timestamp $orderTime;
    private int $estimatedTimeInMinutes;

    public function __construct(float $finalPrice) {
        $this->finalPrice = $finalPrice;
    }
}
