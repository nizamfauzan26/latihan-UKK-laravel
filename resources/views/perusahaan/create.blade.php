<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistem E-PKL</title>
</head>
<body>
    @extends('layouts.app')

@section('title', 'Tambah Perusahaan')

@section('content')

<h2 class="mb-4">Tambah Perusahaan</h2>

<div class="card">

    <div class="card-body">

        <form
            action="{{ route('perusahaan.store') }}"
            method="POST">

            @csrf

            <div class="mb-3">

                <label class="form-label">
                    Nama Perusahaan
                </label>

                <input
                    type="text"
                    name="nama_perusahaan"
                    class="form-control"
                    value="{{ old('nama_perusahaan') }}"
                    required>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Alamat
                </label>

                <textarea
                    name="alamat"
                    class="form-control"
                    rows="3"
                    required>{{ old('alamat') }}</textarea>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Telepon
                </label>

                <input
                    type="text"
                    name="telepon"
                    class="form-control"
                    value="{{ old('telepon') }}">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    value="{{ old('email') }}">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Pembimbing
                </label>

                <input
                    type="text"
                    name="pembimbing"
                    class="form-control"
                    value="{{ old('pembimbing') }}">

            </div>

            <a
                href="{{ route('perusahaan.index') }}"
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
