<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistem E-PKL</title>
</head>
<body>
    @extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')

<h2 class="mb-4">Edit Data Siswa</h2>

< class="card">

    <div class="card-body">

        <form
            action="{{ route('siswa.update', $siswa) }}"
            method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label class="form-label">
                    NIS
                </label>

                <input
                    type="text"
                    name="nis"
                    class="form-control"
                    value="{{ old('nis', $siswa->nis) }}"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Nama
                </label>

                <input
                    type="text"
                    name="nama"
                    class="form-control"
                    value="{{ old('nama', $siswa->nama) }}"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Kelas
                </label>

                <input
                    type="text"
                    name="kelas"
                    class="form-control"
                    value="{{ old('kelas', $siswa->kelas) }}"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Jurusan
                </label>

                <input
                    type="text"
                    name="jurusan"
                    class="form-control"
                    value="{{ old('jurusan', $siswa->jurusan) }}"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Perusahaan
                </label>

                <select
                    name="perusahaan_id"
                    class="form-select"
                    required>

                    @foreach ($perusahaan as $item)

                        <option
                            value="{{ $item->id }}"
                            {{ $siswa->perusahaan_id == $item->id ? 'selected' : '' }}>

                            {{ $item->nama_perusahaan }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Tanggal Mulai
                    </label>

                    <input
                        type="date"
                        name="tanggal_mulai"
                        class="form-control"
                        value="{{ old('tanggal_mulai', $siswa->tanggal_mulai) }}">

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label">
                        Tanggal Selesai
                    </label>

                    <input
                        type="date"
                        name="tanggal_selesai"
                        class="form-control"
                        value="{{ old('tanggal_selesai', $siswa->tanggal_selesai) }}">

                </div>

            </div>

            <a
                href="{{ route('siswa.index') }}"
                class="btn btn-secondary">
                Kembali
            </a>

            <button
                type="submit"
                class="btn btn-primary">
                Update
            </button>

        </form>

    </div>


@endsection
    
</body>
</html>
