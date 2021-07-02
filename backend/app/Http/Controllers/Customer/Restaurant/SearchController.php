<?php

namespace App\Http\Controllers\Customer\Restaurant;

use App\Http\Resources\RestaurantResource;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class SearchController extends BaseController
{
    public function __invoke(Request $request)
    {
        // TODO: 位置情報を元にレストラン一覧を返す（一時的に全レストランを返している）
        $restaurants = Restaurant::all();

        return response()->json(RestaurantResource::collection($restaurants));
    }
}
