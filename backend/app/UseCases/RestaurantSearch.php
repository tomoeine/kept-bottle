<?php

namespace App\UseCases;

use App\DomainModels\RestaurantRepositoryInterface;

class RestaurantSearch
{
    /**
     * RestaurantSearch constructor.
     * @param RestaurantRepositoryInterface $restaurantRepository
     */
    public function __construct(private RestaurantRepositoryInterface $restaurantRepository)
    {
    }

    public function __invoke()
    {
        return $this->restaurantRepository->search();
    }
}
