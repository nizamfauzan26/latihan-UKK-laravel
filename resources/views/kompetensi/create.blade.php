@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Tambah Kompetensi</h2>
    <form action="{{ route('kompetensi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Kode Kompetensi</label>
            <input type="text" name="kode_kompetensi" class="form-control" placeholder="Contoh: RPL">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Kompetensi</label>
            <input type="text" name="nama_kompetensi" class="form-control" placeholder="Contoh: Rekayasa Perangkat Lunak" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection