@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Data Kompetensi Keahlian</h2>
        <a href="{{ route('kompetensi.create') }}" class="btn btn-primary">+ Tambah Kompetensi</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Kompetensi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kompetensis as $k)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $k->kode_kompetensi }}</td>
                <td>{{ $k->nama_kompetensi }}</td>
                <td>
                    <!-- Tombol Aksi Edit / Hapus -->
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Belum ada data kompetensi.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection