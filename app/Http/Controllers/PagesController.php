<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome () {
        $myArray = [
            'Groningen',
            'Assen',
            'Coevorden',
            'Hardenberg'
        ];
        return view('welcomejg', [
            'steden' => $myArray,
            'naam' => 'Jacco'
            ]);
    }

    public function contact() {
        return view('contact');
    }

    public function info() {
        return view('info');
    }

}
