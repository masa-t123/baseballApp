<?php

namespace App\Http\Controllers\Web\Document;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocumentController extends Controller
{

    /**
     * ドキュメント -TOP
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        return view('contents.document.document', []);
    }

    /**
     * 仕様書 - 順位表取得APIページ
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function manualApiRank(Request $request)
    {
        return view('contents.document.manual.api_rank', []);
    }

    /**
     * 仕様書 - 成績(野手)取得ページ
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function manualApiRecord4Batter(Request $request)
    {
        return view('contents.document.manual.api_record_batter', []);
    }

    /**
     * 仕様書 - 成績(投手)取得ページ
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function manualApiRecord4Pitcher(Request $request)
    {
        return view('contents.document.manual.api_record_pitcher', []);
    }


}
