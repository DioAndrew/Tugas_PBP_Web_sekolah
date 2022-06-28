<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fasilitasController extends Controller
{
    public function tampilkan_fasilitas(){
        return view('fasilitas');
    }
}
