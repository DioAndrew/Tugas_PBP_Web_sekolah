<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengumuman;

class homeController extends Controller
{
    public function tampilkan_home(){
        $data = pengumuman::latest()->paginate(4);
        return view('home',['data' => $data]);
    }
}
