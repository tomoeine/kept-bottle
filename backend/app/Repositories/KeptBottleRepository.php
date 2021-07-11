<?php

namespace App\Repositories;

use App\DomainModels\Customer;
use App\DomainModels\KeptBottle;
use App\DomainModels\KeptBottleRepositoryInterface;
use App\DomainModels\Restaurant;
use App\Models\KeptBottle as KeptBottleModel;

class KeptBottleRepository implements KeptBottleRepositoryInterface
{
    public function create(
        Restaurant $restaurant,
        Customer $customer,
        string $photo_url
    ): KeptBottle {
        $keptBottle = KeptBottleModel::create([
            'restaurant_id' => $restaurant->id,
            'customer_id' => $customer->id,
            'photo_url' => $photo_url,
        ]);
        return new KeptBottle(
            $keptBottle->id,
            new Restaurant(
                $keptBottle->restaurant->id,
                $keptBottle->restaurant->name,
                $keptBottle->restaurant->latitude,
                $keptBottle->restaurant->longitude
            ),
            new Customer(
                $keptBottle->customer->id,
                $keptBottle->customer->name,
                $keptBottle->customer->email
            ),
            $keptBottle->photo_url
        );
    }
}
