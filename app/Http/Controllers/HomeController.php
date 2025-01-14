<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $journeyItems = [
            ['description' => "My name is Justin Chinonso, I'm a software developer and a computer science studentg at the university of Iabdan"],
            ['description' => 'I started my software developer journey in 2020, and since then I have developed many projects'],
            ['description' => 'Built my first main project in 2021, a Social media platform for developers to interact and share ideas'],
            ['description' => 'I have worked with many clients and companies to develop their software projects'],
            ['description' => 'I am driven by the passion to solve problems and make the world a better place through technology'],
            ['description' => 'I am also open to new opportunities and collaborations. Feel free to reach out to me'],
            ['description' => 'I also have an online shop where I sell my software products. Feel free to check it from the navigation menu'],
        ];
        
        return view('home', compact('journeyItems'));
    }

    public function about()
    {
        return view('about');
    }

}