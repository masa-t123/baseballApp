<?php

namespace App\Http\Controllers\Web\Top;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopController extends Controller
{
    public function index(Request $request)
    {

        // RSSデータ取得
        // Todo:後にバッチ処理に移行する
        $model = new Model();
        $rssData = $model->getRssData();

        // TOP表示
        return view('contents.top.top', [
            'rssList' => $rssData,
        ]);
    }

}
