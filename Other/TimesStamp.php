<?php

namespace Other;

class Timestamp {
    protected int $generate_time;

    public function __construct() {
        date_default_timezone_set('Asia/Tokyo');
        $this->generate_time = date("Y-m-d H:i:s" , time());
    }    
}