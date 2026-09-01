<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistem E-PKL</title>
</head>
<body>
    @extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')

<h2 class="mb-4">Tambah Data Siswa</h2>

<div class="card">

    <div class="card-body">

        <form
            action="{{ route('siswa.store') }}"
            method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label">
                    NIS
                </label>

                <input
                    type="text"
                    name="nis"
                    class="form-control"
                    value="{{ old('nis') }}"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Nama Siswa
                </label>

                <input
                    type="text"
                    name="nama"
                    class="form-control"
                    value="{{ old('nama') }}"
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
                    value="{{ old('kelas') }}"
                    placeholder="Contoh: XI PPLG 2"
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
                    value="{{ old('jurusan', 'PPLG') }}"
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

                    <option value="">
                        -- Pilih Perusahaan --
                    </option>

                    @foreach ($perusahaan as $item)

                        <option
                            value="{{ $item->id }}"
                            {{ old('perusahaan_id') == $item->id ? 'selected' : '' }}>

                            {{ $item->nama_perusahaan }}

                        </option>

                    @endforeach

                </select>

            </div>




           */*/*/*

            <div class="mb-3">

    <label class="form-label">
        Kompetensi
    </label>

    <div class="row">

        @foreach ($kompetensi as $item)

            <div class="col-md-4 mb-2">

                <div class="form-check">

                    <input
                        type="checkbox"
                        name="kompetensi[]"
                        value="{{ $item->id }}"
                        class="form-check-input"
                        id="kompetensi{{ $item->id }}"
                        {{ in_array($item->id, old('kompetensi', [])) ? 'checked' : '' }}>

                    <label
                        class="form-check-label"
                        for="kompetensi{{ $item->id }}">

                        {{ $item->nama_kompetensi }}

                    </label>

                </div>

            </div>

        @endforeach

    </div>

</div>


<div class="mb-3">

    <label class="form-label">
        Kompetensi
    </label>

    <div class="row">

        @foreach ($kompetensi as $item)

            <div class="col-md-4 mb-2">

                <div class="form-check">

                    <input
                        type="checkbox"
                        name="kompetensi[]"
                        value="{{ $item->id }}"
                        class="form-check-input"
                        id="kompetensi{{ $item->id }}"
                        {{ in_array($item->id, old('kompetensi', [])) ? 'checked' : '' }}>

                    <label
                        class="form-check-label"
                        for="kompetensi{{ $item->id }}">

                        {{ $item->nama_kompetensi }}

                    </label>

                </div>

            </div>

        @endforeach

    </div>

</div>



<label class="form-label">
    Kompetensi yang Dikuasai
</label>

<div class="row">

    @foreach ($kompetensi as $item)

        <div class="col-md-4 mb-2">

            <div class="form-check">

                <input
                    type="checkbox"
                    name="kompetensi[]"
                    value="{{ $item->id }}"
                    class="form-check-input"
                    id="kompetensi{{ $item->id }}"
                    {{ in_array($item->id, old('kompetensi', [])) ? 'checked' : '' }}>

                <label
                    class="form-check-label"
                    for="kompetensi{{ $item->id }}">

                    {{ $item->nama_kompetensi }}

                </label>

            </div>

        </div>

    @endforeach

</div>

@error('kompetensi')

    <div class="text-danger mt-2">
        {{ $message }}
    </div>

@enderror




     */*/*/*

            <div class="row">
    <div class="col-md-6 mb-3">
        <label for="tanggal_mulai_pkl" class="form-label">Tanggal Mulai</label>
        <input type="date" 
               class="form-control" 
               id="tanggal_mulai_pkl" 
               name="tanggal_mulai_pkl" 
               value="{{ old('tanggal_mulai_pkl') }}">
    </div>

    <div class="col-md-6 mb-3">
        <label for="tanggal_selesai_pkl" class="form-label">Tanggal Selesai</label>
        <input type="date" 
               class="form-control" 
               id="tanggal_selesai_pkl" 
               name="tanggal_selesai_pkl" 
               value="{{ old('tanggal_selesai_pkl') }}">
    </div>
</div>

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
                Simpan
            </button>

        </form>

    </div>

</div>

@endsection
    
</body>
</html>
