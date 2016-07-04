<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //
    /**
     * Bootstrap Form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function form(){
        return view('form');
    }

    /**
     * Save Data
     */
    public function save(Request $request){
         dd($request->all());
    }
}
