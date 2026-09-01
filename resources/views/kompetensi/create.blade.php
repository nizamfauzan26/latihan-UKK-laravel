@extends('layouts.app')

@section('title', 'Tambah Kompetensi')

@section('content')
```
<h2>Tambah Kompetensi</h2>

<p class="text-muted">
    Tambahkan kompetensi baru yang dapat dimiliki siswa.
</p>
```

```
<div class="card-body">

    <form
        action="{{ route('kompetensi.store') }}"
        method="POST">

        @csrf

        <div class="mb-3">

            <label
                for="nama_kompetensi"
                class="form-label">

                Nama Kompetensi

            </label>

            <input
                type="text"
                id="nama_kompetensi"
                name="nama_kompetensi"
                class="form-control @error('nama_kompetensi') is-invalid @enderror"
                value="{{ old('nama_kompetensi') }}"
                placeholder="Contoh: Laravel"
                required>

            @error('nama_kompetensi')

                <div class="invalid-feedback">
                    {{ $message }}
                </div>

            @enderror

        </div>

        <div class="mb-3">

            <label
                for="deskripsi"
                class="form-label">

                Deskripsi

            </label>

            <textarea
                id="deskripsi"
                name="deskripsi"
                class="form-control @error('deskripsi') is-invalid @enderror"
                rows="5"
                placeholder="Jelaskan kompetensi tersebut...">{{ old('deskripsi') }}</textarea>

            @error('deskripsi')

                <div class="invalid-feedback">
                    {{ $message }}
                </div>

            @enderror

        </div>

        <a
            href="{{ route('kompetensi.index') }}"
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
```

@endsection