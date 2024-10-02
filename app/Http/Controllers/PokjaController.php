<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokjaController extends Controller
{
    public function index (){

        return view('pengaturan.pokja.index');
    }
}