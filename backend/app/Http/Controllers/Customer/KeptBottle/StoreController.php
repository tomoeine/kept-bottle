<?php

namespace App\Http\Controllers\Customer\KeptBottle;

use App\UseCases\KeptBottleCreate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;

class StoreController extends BaseController
{
    public function __invoke(Request $request, KeptBottleCreate $keptBottleCreate)
    {
        // TODO: バリデーションする
        // TODO: ファイルアップロード機能が必要
        $keptBottleCreate(
            (int)$request->input('restaurant_id'),
            (int)$request->input('customer_id'),
            $request->input('photo_url'),
        );

        return response()->noContent(Response::HTTP_NO_CONTENT);
    }
}
