<?php

namespace App\Repositories;

use App\DomainModels\Restaurant;
use App\DomainModels\RestaurantRepositoryInterface;
use App\Models\Restaurant as RestaurantModel;

class RestaurantRepository implements RestaurantRepositoryInterface
{
    public function find(int $id): Restaurant
    {
        $restaurant = RestaurantModel::find($id);
        return new Restaurant(
            $restaurant->id,
            $restaurant->name,
            $restaurant->latitude,
            $restaurant->longitude
        );
    }

    public function search()
    {
        // TODO: 位置情報を元にレストラン一覧を返す（一時的に全レストランを返している）
        $restaurants = RestaurantModel::all();
        return $restaurants->map(function ($restaurant) {
            return new Restaurant(
                $restaurant->id,
                $restaurant->name,
                $restaurant->latitude,
                $restaurant->longitude
            );
        });
    }
}
