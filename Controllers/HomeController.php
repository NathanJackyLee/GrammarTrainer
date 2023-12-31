<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // wipe session to default state
        session(['game_running'=>false]);
        session(['round'=>0]);
        session(['score'=>0]);
        session(['lives'=>0]);
        session(['difficulty'=>0]);
        session(['question'=>'']);
        session(['answer'=>'']);
        session(['avail_qs'=>[]]);

        return view('home');
    }
}
