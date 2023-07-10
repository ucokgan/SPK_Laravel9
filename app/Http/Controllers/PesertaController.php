<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;

class PesertaController extends Controller {

    public function index() {
        return view("layout/datapeserta", [
            'data' => Peserta::all(), 
            'title' => 'Data pengguna',
            'users' => Peserta::all(), 
        ]);
    }
    
    public function add() {
        return view('layout/adddatapeserta',[
            'title' => 'Tambah Data pengguna'
        ]);
    }
    public function edit($id){
        
        $peserta = Peserta::where('id', $id)->first();

        return view('layout/editdatapeserta', [
            'peserta' => $peserta,
            'title' => 'Edit Data Pengguna'
        ]);

    }

    public function update(Request $request, $id) {
        $nama_pengguna = $request->input('nama_pengguna');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $usia = $request->input('usia');
        $email = $request->input('email');
       
        
        $peserta = Peserta::where('id', $id)->first();
        $peserta->nama_pengguna = $nama_pengguna;
        $peserta->jenis_kelamin = $jenis_kelamin;
        $peserta->usia = $usia;
        $peserta->email = $email;

        $peserta->save();

        return redirect()->to('/peserta');
    }


    public function dashboard(){
        $peserta= Peserta::count();

        return view('main', compact('layout/peserta'));

    }

    public function store(Request $request) {
        $nama_pengguna = $request->input('nama_pengguna');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $usia = $request->input('usia');
        $email = $request->input('email');

        $peserta = new Peserta;
        $peserta->nama_pengguna = $nama_pengguna;
        $peserta->jenis_kelamin = $jenis_kelamin;
        $peserta->usia = $usia;
        $peserta->email = $email;

        $peserta->save();

        return redirect()->to('/peserta');
    }
    public function delete($id) {
        $peserta = Peserta::where('id', $id)->first();
        $peserta->delete();
        return redirect()->back();
    }

    public function search(Request $request){
        if($request->has('search')){
            $peserta = Peserta::where('nama_pengguna','usia','email','%',$request->search.'%')->get();
        }else{
            $peserta = Peserta::all();
        }
        return view('layout/datapeserta',['layout/Peserta' => $peserta]);
    }
}
