<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class gurucontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function guru()
    {
        $halaman = 'guru';
        $guru_list = Guru::orderBy('nama_guru', 'asc')->paginate(5);
        $jumlah_guru = Guru::count();
        return view('guru.guru', compact('halaman', 'guru_list', 'jumlah_guru'));
    }

    public function createGuru() {
        $halaman = 'guru';
        return view('guru.create', compact('halaman'));
    }

    public function store(Request $request) {
        Guru::create($request->all());
        return redirect('guru');
    }

    public function showGuru($id) {
        $halaman = 'guru';
        $guru = Guru::findOrFail($id);
        return view('guru.show', compact('halaman', 'guru'));
    }


    public function edit($id) {
        $halaman = 'guru';
        $guru = Guru::findOrFail($id);
        return view('guru.edit', compact('halaman', 'guru'));
    }
    public function update($id, Request $request) {
        $halaman = 'guru';
        $guru = Guru::findOrFail($id);
        $guru->nip = $request->nip;
        $guru->nama_guru = $request->nama_guru;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('img/',$request->file('avatar')->getClientOriginalName());
            $guru->avatar = $request->file('avatar')->getClientOriginalName();
            $guru->save();
        }
        $guru->save();
        return redirect('guru');
    }

    public function deleteGuru($id) {
        $guru = Guru::findOrFail($id);
        $guru->delete();
        return redirect('guru');
    }

}
