<?php

namespace App\Http\Controllers;

use App\Models\Kompetensi;
use Illuminate\Http\Request;

class KompetensiController extends Controller

    public function index()
{
  {  $kompetensi = Kompetensi::withCount('siswa')
        ->latest()
        ->get();

    return view('kompetensi.index', compact('kompetensi'));
} 

}


 public function create()
{
    $perusahaan = Perusahaan::orderBy('nama_perusahaan')->get();

    $kompetensi = Kompetensi::orderBy('nama_kompetensi')->get();

    return view('siswa.create', compact(
        'perusahaan',
        'kompetensi'
    ));

    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kompetensi' => 'required',
        ]);

        Kompetensi::create($request->all());
        return redirect()->route('kompetensi.index')->with('success', 'Kompetensi berhasil ditambahkan');
    }
}


