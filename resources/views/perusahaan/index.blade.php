<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistem E-PKL</title>

    
</head>
<body>
    @extends('layouts.app')

@section('title', 'Data Perusahaan')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>Data Perusahaan PKL</h2>

    <a
        href="{{ route('perusahaan.create') }}"
        class="btn btn-primary">
        + Tambah Perusahaan
    </a>

</div>

<div class="card">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-striped">

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                        <th>Pembimbing</th>
                        <th>Jumlah Siswa</th>
                        <th>Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse ($perusahaan as $item)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                {{ $item->nama_perusahaan }}
                            </td>

                            <td>
                                {{ $item->alamat }}
                            </td>

                            <td>
                                {{ $item->telepon ?? '-' }}
                            </td>

                            <td>
                                {{ $item->pembimbing ?? '-' }}
                            </td>

                            <td>
                                {{ $item->siswa->count() }}
                            </td>

                            <td>

                                <a
                                    href="{{ route('perusahaan.show', $item) }}"
                                    class="btn btn-info btn-sm">
                                    Detail
                                </a>

                                <a
                                    href="{{ route('perusahaan.edit', $item) }}"
                                    class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form
                                    action="{{ route('perusahaan.destroy', $item) }}"
                                    method="POST"
                                    class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus perusahaan ini?')">
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td
                                colspan="7"
                                class="text-center">

                                Belum ada data perusahaan.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>


@endsection
    
</body>
</html>
