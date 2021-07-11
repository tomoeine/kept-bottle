<?php

namespace App\DomainModels;

class Restaurant
{
    /**
     * Restaurant constructor.
     * @param int $id
     * @param string $name
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct(
        public int $id,
        public string $name,
        public float $latitude,
        public float $longitude
    ) {
    }
}
