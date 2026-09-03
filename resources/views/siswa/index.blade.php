<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistem E-PKL</title>
</head>
<body>
    @extends('layouts.app')

@section('title', 'Data Siswa PKL')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>Data Siswa PKL</h2>

    <a href="{{ route('siswa.create') }}"
        class="btn btn-primary">
        + Tambah Siswa
    </a>

</div>

<div class="card">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-striped align-middle">
    <thead>
        <tr>
            <th text-center>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Perusahaan</th>
            <th>Kompetensi</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $index => $item)
        <tr>
            <td class="text-center">{{ $index + 1 }}</td>
            <td>{{ $item->nis }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->kelas }}</td>
            <td>{{ $item->jurusan }}</td>
            
            <!-- Kolom Perusahaan -->
            <td>{{ $item->perusahaan->nama_perusahaan ?? '-' }}</td>
            
            <!-- Kolom Kompetensi -->
            <td>
                @forelse($item->kompetensi as $k)
                    <span class="badge bg-primary">{{ $k->nama_kompetensi }}</span>
                @empty
                    <span class="text-muted small">Belum ada</span>
                @endforelse
            </td>
            
            <!-- Kolom Aksi -->
            <td class="text-center">
                <a href="{{ route('siswa.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('siswa.destroy', $item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
    
</body>
</html>
