<?php namespace App\Http\Controllers;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
class PerusahaanController extends Controller
{public function index()
    {$perusahaan= Perusahaan::latest()->get();return view('perusahaan.index',compact('perusahaan'));
    }public function create()
    {return view('perusahaan.create');
    }public function store(Request$request)
    {$validated= $request->validate(['nama_perusahaan' =>'required|max:255','alamat' =>'required','telepon' =>'nullable|max:20','email' =>'nullable|email','pembimbing' =>'nullable|max:255',
        ]);

        Perusahaan::create($validated);return redirect()
            ->route('perusahaan.index')
            ->with('success','Data perusahaan berhasil ditambahkan.');
    }public function show(Perusahaan$perusahaan)
    {return view('perusahaan.show',compact('perusahaan'));
    }public function edit(Perusahaan$perusahaan)
    {return view('perusahaan.edit',compact('perusahaan'));
    }public function update(Request$request,Perusahaan$perusahaan)
    {$validated= $request->validate(['nama_perusahaan' =>'required|max:255','alamat' =>'required','telepon' =>'nullable|max:20','email' =>'nullable|email','pembimbing' =>'nullable|max:255',
        ]);

        $perusahaan->update($validated);return redirect()
            ->route('perusahaan.index')
            ->with('success','Data perusahaan berhasil diperbarui.');
    }public function destroy(Perusahaan$perusahaan)
    {
        $perusahaan->delete();return redirect()
            ->route('perusahaan.index')
            ->with('success','Data perusahaan berhasil dihapus.');
    }
}