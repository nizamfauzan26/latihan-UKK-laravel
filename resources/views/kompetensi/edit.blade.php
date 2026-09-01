@extends('layouts.app')

@section('title', 'Edit Kompetensi')

@section('content')

```
<h2>Edit Kompetensi</h2>

<p class="text-muted">
    Perbarui informasi kompetensi.
</p>
```

```
<div class="card-body">

    <form
        action="{{ route('kompetensi.update', $kompetensi) }}"
        method="POST">

        @csrf

        @method('PUT')

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
                value="{{ old('nama_kompetensi', $kompetensi->nama_kompetensi) }}"
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
                rows="5">{{ old('deskripsi', $kompetensi->deskripsi) }}</textarea>

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

            Update

        </button>

    </form>

</div>
```

@endsection