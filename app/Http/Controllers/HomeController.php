<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\IKU;
use Illuminate\Http\Request;


class HomeController extends Controller
{
   
    public function index ()
    {
        $data_iku = IKU::latest()->paginate(6);
        
        return view('program.iku.dashboard', compact('data_iku'));
    }

    
}

