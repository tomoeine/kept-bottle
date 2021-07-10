<?php

namespace App\Http\Controllers\Customer\Restaurant;

use App\Http\Resources\RestaurantResource;
use App\UseCases\RestaurantSearch;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class SearchController extends BaseController
{
    public function __invoke(Request $request, RestaurantSearch $restaurantSearch)
    {
        $restaurants = $restaurantSearch();

        return response()->json(RestaurantResource::collection($restaurants));
    }
}
