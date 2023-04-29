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
        $weights = [$value,'535115','64300','543600','475010','96501','783633','789644'];
        $tikets = ['0054','00757','00535','00112','007001','04044','004254','008796'];   
        $drivers = ['Joao','Carlos','Henrique','Rafael','Guilherme','Thiago','Kaliton','Arlando'];
        return view('welcome')
            ->with('weights', $weights)
            ->with('tikets', $tikets)
            ->with('drivers', $drivers);
    }
    
}
