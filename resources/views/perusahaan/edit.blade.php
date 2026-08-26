<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$sistem E-PKL</title>
</head>
<body>
    @extends('layouts.app')

@section('title', 'Edit Perusahaan')

@section('content')

<h2 class="mb-4">Edit Perusahaan</h2>

<div class="card">

    <div class="card-body">

        <form
            action="{{ route('perusahaan.update', $perusahaan) }}"
            method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label class="form-label">
                    Nama Perusahaan
                </label>

                <input
                    type="text"
                    name="nama_perusahaan"
                    class="form-control"
                    value="{{ old('nama_perusahaan', $perusahaan->nama_perusahaan) }}"
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
                    required>{{ old('alamat', $perusahaan->alamat) }}</textarea>

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Telepon
                </label>

                <input
                    type="text"
                    name="telepon"
                    class="form-control"
                    value="{{ old('telepon', $perusahaan->telepon) }}">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    value="{{ old('email', $perusahaan->email) }}">

            </div>

            <div class="mb-3">

                <label class="form-label">
                    Pembimbing
                </label>

                <input
                    type="text"
                    name="pembimbing"
                    class="form-control"
                    value="{{ old('pembimbing', $perusahaan->pembimbing) }}">

            </div>

            <a
                href="{{ route('perusahaan.index') }}"
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

</div>

@endsection
    
</body>
</html>
