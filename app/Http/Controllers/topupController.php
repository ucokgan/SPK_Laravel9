<?php

namespace App\Http\Controllers;

use App\Models\topup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class topupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4 ;
        if(strlen($katakunci)) {
            $data = topup::where('nim', 'like', "%$katakunci%")
                    ->orWhere('nama', 'like', "%$katakunci%")
                    ->orWhere('jurusan', 'like', "%$katakunci%")
                    ->paginate($jumlahbaris);
        } else {
            $data = topup::orderBy('nim', 'desc')->paginate($jumlahbaris);       
        }
        return view('topup.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('topup.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nim', $request->nim);
        Session::flash('nama', $request->nama);
        Session::flash('jurusan', $request->jurusan);
        $request->validate([
            'nim'=>'required|numeric|unique:topup,nim',
            'nama'=>'required',
            'jurusan'=>'required',
        ],[
            'nim.required'=>'NIM wajib diisi',
            'nim.numeric'=>'NIM wajib dalam angka',
            'nim.unique'=>'NIM yang sudah ada dalam database',
            'nama.required'=>'Nama wajib diisi',
            'jurusan.required'=>'Jurusan wajib diisi',
        ]);
        $data = [
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
        ];
        topup::create($data);
        return redirect()->to('topup')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = topup::where('nim',$id)->first();
        return view('topup.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
            'jurusan'=>'required',
        ],[
            'nama.required'=>'Nama wajib diisi',
            'jurusan.required'=>'Jurusan wajib diisi',
        ]);
        $data = [
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
        ];
        topup::where('nim', $id)->update($data);
        return redirect()->to('topup')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        topup::where('nim', $id)->delete();
        return redirect()->to('topup')->with('success', 'Berhasil melakukan delete data');
    }
}
