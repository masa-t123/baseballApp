<?php

namespace App\Http\Controllers\Web\Top;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopController extends Controller
{
    public function index(Request $request)
    {

        // TOP表示
        return view('contents.top.top');
    }

}
