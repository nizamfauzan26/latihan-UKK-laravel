<?php
namespace App\Http\Controllers;
use App\Models\Kompetensi;
use App\Models\Perusahaan;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class SiswaController extends Controller

{public function index()
{
    $siswa = Siswa::with([
        'perusahaan',
        'kompetensi'
    ])
    ->latest()
    ->get();

    return view('siswa.index', compact('siswa'));
}
    
    
    public function create()
{
    $perusahaan = Perusahaan::orderBy('nama_perusahaan')->get();

    $kompetensi = Kompetensi::orderBy('nama_kompetensi')->get();

    return view(
        'siswa.create',
        compact('perusahaan', 'kompetensi')
    );
}


    public function store(Request $request)
{
    $validated = $request->validate([
        'nis' => 'required|unique:siswa,nis',
        'nama' => 'required|max:255',
        'kelas' => 'required|max:50',
        'jurusan' => 'required|max:100',

        'perusahaan_id' =>
            'required|exists:perusahaan,id',

        'tanggal_mulai' =>
            'nullable|date',

        'tanggal_selesai' =>
            'nullable|date|after_or_equal:tanggal_mulai',

        'kompetensi' =>
            'required|array|min:1',

        'kompetensi.*' =>
            'exists:kompetensi,id',
    ]);

    $siswa = Siswa::create([
        'nis' => $validated['nis'],
        'nama' => $validated['nama'],
        'kelas' => $validated['kelas'],
        'jurusan' => $validated['jurusan'],
        'perusahaan_id' => $validated['perusahaan_id'],
        'tanggal_mulai' => $validated['tanggal_mulai'] ?? null,
        'tanggal_selesai' => $validated['tanggal_selesai'] ?? null,
    ]);

    $siswa->kompetensi()->attach(
        $validated['kompetensi']
    );

    return redirect()
        ->route('siswa.index')
        ->with(
            'success',
            'Data siswa berhasil ditambahkan.'
        );
}
   

     public function show(Siswa$siswa)
    {
        $siswa->load('perusahaan');return view('siswa.show',compact('siswa'));
    }
    

   
   
  public function edit(Siswa $siswa)
{
    $perusahaan = Perusahaan::orderBy('nama_perusahaan')->get();

    $kompetensi = Kompetensi::orderBy('nama_kompetensi')->get();

    $siswa->load('kompetensi');

    return view(
        'siswa.edit',
        compact('siswa', 'perusahaan', 'kompetensi')
    );
}
    


  public function update(Request $request, Siswa $siswa)
{
    $validated = $request->validate([
        'nis' => [
            'required',
            Rule::unique('siswa', 'nis')
                ->ignore($siswa->id),
        ],

        'nama' => 'required|max:255',

        'kelas' => 'required|max:50',

        'jurusan' => 'required|max:100',

        'perusahaan_id' =>
            'required|exists:perusahaan,id',

        'tanggal_mulai' =>
            'nullable|date',

        'tanggal_selesai' =>
            'nullable|date|after_or_equal:tanggal_mulai',

        'kompetensi' =>
            'required|array|min:1',

        'kompetensi.*' =>
            'exists:kompetensi,id',
    ]);

    $siswa->update([
        'nis' => $validated['nis'],
        'nama' => $validated['nama'],
        'kelas' => $validated['kelas'],
        'jurusan' => $validated['jurusan'],
        'perusahaan_id' => $validated['perusahaan_id'],
        'tanggal_mulai' => $validated['tanggal_mulai'] ?? null,
        'tanggal_selesai' => $validated['tanggal_selesai'] ?? null,
    ]);

    $siswa->kompetensi()->sync(
        $validated['kompetensi']
    );

    return redirect()
        ->route('siswa.index')
        ->with(
            'success',
            'Data siswa berhasil diperbarui.'
        );
}
    


    public function destroy(Siswa$siswa)
    {
        $siswa->delete();return redirect()
            ->route('siswa.index')
            ->with('success','Data siswa berhasil dihapus.');
    }

    
}