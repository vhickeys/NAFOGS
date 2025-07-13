<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportSytemController extends Controller
{
    public function index()
    {
        return view('client.unitlogin');
    }
    public function aufogem()
    {
        return view('client.aufogem');
    }
    public function trsm()
    {
        return view('client.trsm');
    }
}
