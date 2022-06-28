<?php

namespace App\Http\Controllers;

use App\Models\pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function tampilkan_input_pengumuman(){
        return view('admin/input_pengumuman');
    }

    public function simpan_pengumuman(){
        $validateData =  request()->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        pengumuman::create($validateData);
        return redirect('/input-pengumuman');

    }

    public function tampilkan_daftar_pengumuman(){
        $data = pengumuman::all();
        return view('admin/daftar_pengumuman',['data' => $data]);
    }

    public function tampilkan_pengumuman(){
        $data = pengumuman::latest()->get();
        return view('pengumuman',['data' => $data]);
    }

    public function tampilkan_edit_pengumuman(pengumuman $data){
        return view('admin/edit_data_pengumuman',['data' => $data]);
    }

    public function update_data_pengumuman(pengumuman $data){
            $validateData = request()->validate([
                'judul' => 'required',
                'isi' => 'required'
            ]);
        
            $data->update($validateData);
    
            return redirect('/daftar-pengumuman');
        
    }

    public function hapus_data_pengumuman($id){
        $data = pengumuman::find($id);
        $data->delete();
        return redirect('/daftar-pengumuman');
    }

}
