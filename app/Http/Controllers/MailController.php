<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function Index() {
        return view('mail');
    }

    public function Send(Request $request) {

        Mail::to($request->email)->send(new SendMail());

        return redirect()->back()->with('success', 'Successfully send mail!!');
    }
}
