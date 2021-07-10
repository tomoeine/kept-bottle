<?php

namespace App\UseCases;

use App\DomainModels\CustomerRepositoryInterface;
use App\DomainModels\KeptBottleRepositoryInterface;
use App\DomainModels\RestaurantRepositoryInterface;

class KeptBottleCreate
{
    /**
     * KeptBottleCreate constructor.
     */
    public function __construct(
        private RestaurantRepositoryInterface $restaurantRepository,
        private CustomerRepositoryInterface $customerRepository,
        private KeptBottleRepositoryInterface $keptBottleRepository,
    ) {
    }

    public function __invoke(int $restaurantId, int $customerId, string $photo_url)
    {
        $restaurant = $this->restaurantRepository->find($restaurantId);
        $customer = $this->customerRepository->find($customerId);

        $this->keptBottleRepository->create($restaurant, $customer, $photo_url);
    }
}
