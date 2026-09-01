@extends('layouts.app')

@section('title', 'Data Kompetensi')

@section('content')
```
<div>
    <h2>Data Kompetensi</h2>
    <p class="text-muted mb-0">
        Daftar kompetensi yang dapat dikuasai siswa.
    </p>
</div>

<a href="{{ route('kompetensi.create') }}"
    class="btn btn-primary">
    + Tambah Kompetensi
</a>
```

```
<div class="card-body">

    <div class="table-responsive">

        <table class="table table-bordered table-striped align-middle">

            <thead class="table-dark">

                <tr>
                    <th width="60">No</th>
                    <th>Nama Kompetensi</th>
                    <th>Deskripsi</th>
                    <th width="150">Jumlah Siswa</th>
                    <th width="230">Aksi</th>
                </tr>

            </thead>

            <tbody>

                @forelse ($kompetensi as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            <strong>
                                {{ $item->nama_kompetensi }}
                            </strong>
                        </td>

                        <td>
                            {{ $item->deskripsi ?? '-' }}
                        </td>

                        <td>
                            <span class="badge bg-primary">
                                {{ $item->siswa_count }} siswa
                            </span>
                        </td>

                        <td>

                            <a
                                href="{{ route('kompetensi.show', $item) }}"
                                class="btn btn-info btn-sm">
                                Detail
                            </a>

                            <a
                                href="{{ route('kompetensi.edit', $item) }}"
                                class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form
                                action="{{ route('kompetensi.destroy', $item) }}"
                                method="POST"
                                class="d-inline">

                                @csrf

                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus kompetensi ini?')">

                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="5"
                            class="text-center">

                            Belum ada data kompetensi.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>
```