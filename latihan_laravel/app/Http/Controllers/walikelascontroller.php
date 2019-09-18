<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WaliKelas;
use App\Kelas;
use App\Guru;

class walikelascontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function walikelas(){
        $halaman = 'walikelas';
        $walikelas_list = WaliKelas::all();
        return view('walikelas.index', compact('halaman', 'walikelas_list'));
    }

    public function storeWali(Request $request) {
        WaliKelas::create($request->all());
        return redirect('walikelas');
    }

    public function createWaliKelas() {
        $guru_list = Guru::all();
        $kelas_list = Kelas::all();
        $halaman = 'walikelas';
        return view('walikelas.create', compact('halaman', 'kelas_list', 'guru_list'));
    }

    public function updatewali($id, Request $request) {
        $halaman = 'walikelas';
        $walikelas = WaliKelas::findOrFail($id);
        $walikelas->id_guru = $request->id_guru;
        $walikelas->id_kelas = $request->id_kelas;
        $walikelas->save();
        return redirect('walikelas');
    }

    public function edit($id) {
        $halaman = 'walikelas';
        $kelas = Kelas::all();
        $guru = Guru::all();
        $walikelas = Walikelas::findOrFail($id);
        //$input -$request->all();
        return view('walikelas.edit', compact('halaman', 'walikelas','kelas','guru'));
    }

    public function show($id) {
        $halaman = 'walikelas';
        $walikelas = Walikelas::findOrFail($id);
        return view('walikelas.show', compact('halaman', 'walikelas'));
    }

    public function deletewali($id) {
        $walikelas = Walikelas::findOrFail($id);
        $walikelas->delete();
        return redirect('walikelas');
    }
}