<?php

namespace App\Http\Controllers\Web\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\SendMail;

class ContactController extends Controller
{

    public function index(Request $request)
    {
        return view('contents.contact.contact', []);
    }

    public function post(Request $request)
    {

        //バリデーション
        $request->validate([
            'name'    => 'required|max:100',
            'email'   => 'required|email',
            'subject' => 'required|max:100',
            'message' => 'required|max:2000',
        ]);

        // パラメータ詰め
        $requestList = [
            'requestEmail' => $request->get('email'),
            'requestName' => $request->get('name'),
            'requestSubject' => $request->get('subject'),
            'requestMessage' => $request->get('message'),
        ];

        try {
            Mail::to('contact@yodaemon.com')->send(new SendMail($requestList));
        } catch (\Exception $ex) {
            logger()->channel('web')->alert("file:{$ex->getFile()} line:{$ex->getLine()} message:{$ex->getMessage()}");
            throw $ex;
        }

        $request->session()->flash('message', '正常に送信しました。');
        return redirect('/contact');

    }
}
