<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalHistoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
}
