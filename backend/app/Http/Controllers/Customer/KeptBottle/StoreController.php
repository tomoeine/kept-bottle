<?php

namespace App\Http\Controllers\Customer\KeptBottle;

use App\Models\KeptBottle;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class StoreController extends BaseController
{
    public function __invoke(Request $request)
    {
        // TODO: バリデーションする
        // TODO: ファイルアップロード機能が必要
        KeptBottle::create([
            'restaurant_id' => $request->input('restaurant_id'),
            'customer_id' => $request->input('customer_id'),
            'photo_url' => $request->input('photo_url'),
        ]);

        return response()->noContent(Response::HTTP_NO_CONTENT);
    }
}
