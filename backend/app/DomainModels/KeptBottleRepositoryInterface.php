<?php

namespace App\DomainModels;

interface KeptBottleRepositoryInterface
{
    /**
     * @param Restaurant $restaurant
     * @param Customer $customer
     * @param string $photo_url
     * @return KeptBottle
     */
    public function create(
        Restaurant $restaurant,
        Customer $customer,
        string $photo_url
    ): KeptBottle;
}
