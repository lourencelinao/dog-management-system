<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('dog.index');
    }

    public function show(){
        return view('dog.show');
    }

    /*public function edit(){
        return view('dog.edit');
    }*/
}
