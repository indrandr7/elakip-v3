<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index (){

        return view('program.kegiatan.index');
    }
}
