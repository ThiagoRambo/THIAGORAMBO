<?php

namespace App\Http\Controllers;

#use App\Models\Weight;
use Weight;

class DetailsWeightController
{
    public function index()
    {
        $weight = new \App\Models\Weight;
        $value = $weight->first()->value;
        return view('welcome')->with('value', $value);
    
    }
    
}
