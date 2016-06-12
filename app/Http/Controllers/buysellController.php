<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\BuySell;

class buysellController extends Controller
{
     public function index()
    {
           $buysells = BuySell::all();
        
        //return $stockItems;
        
       
        
        return view ('buysell.index')
            ->with('buysells', $buysells);
        //
    }
}
