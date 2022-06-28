<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function tampilkan_register(){
        return view('admin/registrasi');
    }

    public function simpan_registrasi(Request $request){
        $data = $request->validate([
            'name' => 'required|max:255',
            'password' => 'required|max:255',
            'email' => 'required|email:dns|unique:users'
        ]);
        $data['password'] = Hash::make($data['password']);
        user::insert($data);
    }
}
