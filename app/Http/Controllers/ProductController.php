<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function callleather()
    {
        return view('leather');
    }
    public function callcasual()
    {
        return view('casual');
    }
    public function callfitness()
    {
        return view('fitness');
    }
    public function callcycling()
    {
        return view('cycling');
    }
    public function callother()
    {
       return view('other');
    }
    public function callother1()
    {
       return view('other1');
    }
}
