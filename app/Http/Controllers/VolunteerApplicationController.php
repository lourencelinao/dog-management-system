<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerApplicationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
}
