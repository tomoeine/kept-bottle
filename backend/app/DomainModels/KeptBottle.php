<?php

namespace App\DomainModels;

class KeptBottle
{
    /**
     * KeptBottle constructor.
     * @param int $id
     * @param string $photo_url
     * @param Restaurant $restaurant
     * @param Customer $customer
     */
    public function __construct(
        public int $id,
        public Restaurant $restaurant,
        public Customer $customer,
        public string $photo_url,
    ) {
    }
}
