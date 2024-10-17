<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda() :View
    {
        $users = [['id'=>'1', 'nama'=>'Ronin'],['id'=>'2','nama'=>'Robi']];
        return view('home',['users'=>$users]);
    }
}
