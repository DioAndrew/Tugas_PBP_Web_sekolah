<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{

    public function tampilkan_data_guru_admin()
    {
        $data = guru::fillter(request(['search']))->get();
        return view('admin/data_guru',['data' => $data]);
    }

    public function tampilkan_tambah_data_guru()
    {
        return view('admin/input_data_guru');
    }

    public function tambah_data_guru(Request $request){
        $validateData =  request()->validate([
            'nip' => 'required',
            'nama' => 'required',
            'mapel' => 'required',
            'jabatan' => 'required',
            'foto' => 'image'
        ]);
        if($request->file('foto')){
            $validateData['foto'] = $request->file('foto')->store('foto-guru');
        }

        guru::create($validateData);

        return redirect('/data-guru');
    }

    public function tampilkan_pengajar(){
        $data = guru::all();
        return view('pengajar',['data' => $data]);
    }

    public function tampilkan_edit_guru(guru $data){
        return view('admin/edit_data_guru',['data' => $data]);
    }

    public function update_data_guru(guru $data){
            $validateData = request()->validate([
                'nip' => 'required',
                'nama' => 'required',
                'mapel' => 'required',
                'jabatan' => 'required',
                'foto' => 'image'
            ]);
            if(request()->file('foto')){
                $validateData['foto'] = request()->file('foto')->store('foto-guru');
            }
    
            $data->update($validateData);
    
            return redirect('/data-guru');
        
    }

    public function hapus_data_guru($id){
        $data = guru::find($id);
        $data->delete();
        return redirect('/data-guru');
    }
}
