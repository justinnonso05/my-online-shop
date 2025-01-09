<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $journeyItems = [
            ['year' => '2018', 'description' => 'Started my journey in web development'],
            ['year' => '2021', 'description' => 'Completed my first major project'],
            ['year' => '2022', 'description' => 'Launched my first business venture'],
        ];
        
        return view('home', compact('journeyItems'));
    }

    public function about()
    {
        return view('about');
    }

}