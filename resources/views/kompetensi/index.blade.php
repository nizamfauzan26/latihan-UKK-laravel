<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
@extends('layouts.app') {{-- Pastikan nama layout di sini sesuai dengan nama file layout kamu --}}

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Kompetensi</h2>
    <a href="{{ route('kompetensi.create') }}" class="btn btn-primary">+ Tambah Kompetensi</a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kompetensi</th>
            <th>Deskripsi</th>
            <th>Jumlah Siswa</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kompetensi as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td class="fw-bold">{{ $item->nama_kompetensi }}</td>
            <td>{{ $item->deskripsi ?? '-' }}</td>
            <td>
                <span class="badge bg-primary">{{ $item->siswa_count }} siswa</span>
            </td>
            <td class="text-center">
                <a href="{{ route('kompetensi.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                <a href="{{ route('kompetensi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('kompetensi.destroy', $item->id) }}" method="POST" class="d-inline">
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