<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\klasmen;

class FrontendController extends Controller
{


    public function home()
    {
        return view('pages.frontend.home');
    }

    public function klasmen()
    {
        return view('pages.frontend.klasmen', [
            'historys' => klasmen::with('club')->get()
        ]);
    }

}