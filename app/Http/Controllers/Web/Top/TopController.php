<?php

namespace App\Http\Controllers\Web\Top;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopController extends Controller
{

    const IDENTIFIER_INDEX = 'top_index';

    public function index(Request $request)
    {
        try {

            // RSSデータ取得
            // Todo:後にバッチ処理に移行する
            $model = new Model();
            $rssData = $model->getRssData();

        } catch (\Exception $ex) {
            logger()->channel('web')->alert("file:{$ex->getFile()} line:{$ex->getLine()} message:{$ex->getMessage()}");
            throw $ex;
        }

        // TOP表示
        return view('contents.top.top', [
            'rssList' => $rssData,
        ]);

    }

}
