<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $people = array('Kyle', 'Decker', 'Emily');
        //$people = array();

        return view('pages.welcome', [
            'data'=>[
                'people'=>$people
            ]
        ]);
    }

    public function about(){
        return view('pages.about');
    }
}
