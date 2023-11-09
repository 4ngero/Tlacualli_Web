<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function Nosotros()
    {
        return view('acercaNosotros');
    }

    
    public function Home()
    {
        return view('home');
    }


    public function Ejemplo()
    {
        return view('Ejemplo');
    }

    public function unete()
    {
        return view('unete');
    }


    
}
