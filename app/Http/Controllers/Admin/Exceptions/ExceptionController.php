<?php

namespace App\Http\Controllers\Admin\Exceptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExceptionController extends Controller
{


    public static function ExceptionErrorOnRequest(){
        session()->flash('error', "Alguma coisa não funcionou. Tente novamente!");
        return redirect()->back();
    }
    public static function ExceptionOnRequestCustom($ex){
        session()->flash('error', "{$ex}");
        return redirect()->back();
    }


}
