<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function ContactUs()
    {
        return view('admin.pages.contactus');
    }

    public function SendMessageWhenContactUs(Request $request)
    {

        $datas = $request->validate([
           "email" => "required",
            "subject" => "required",
            "message" => "required"
        ]);

        dd($datas);
    }
}
