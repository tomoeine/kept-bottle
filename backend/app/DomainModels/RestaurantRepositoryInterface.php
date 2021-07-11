<?php

namespace App\DomainModels;

interface RestaurantRepositoryInterface
{
    public function find(int $id): Restaurant;

    public function search();
}
