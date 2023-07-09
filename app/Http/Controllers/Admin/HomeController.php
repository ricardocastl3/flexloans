<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\{Wallet, Solicitation};

class HomeController extends Controller
{

    /*
    * Dashboard home page
    */
    public function home()
    {
        $balance_t = Wallet::select('balance')->get()->sum('balance');
        $loan_t = Solicitation::select('requested_balance')->get()->sum('requested_balance'); 
        $loan_count = count(Solicitation::all());
        
        return view('admin.pages.home', compact('balance_t', 'loan_t', 'loan_count'));
    }
    /*
    * Contact Page
    */
    public function contactUs()
    {
        return view('admin.pages.contactus');
    }

    /*
    * Submit the message to our e-mail
    */
    public function sendMessageWhenContactUs(Request $request)
    {

        $datas = $request->validate([
           "email" => "required",
            "subject" => "required",
            "message" => "required"
        ]);

        session()->flash("success", "A sua mensagem foi enviada com sucesso, a receberemos com todo carinho!");
        return redirect()->back();
    }

}
