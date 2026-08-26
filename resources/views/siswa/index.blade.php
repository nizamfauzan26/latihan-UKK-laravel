<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistem E-PKL</title>
</head>
<body>
    @extends('layouts.app')

@section('title', 'Data Siswa PKL')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>Data Siswa PKL</h2>

    <a href="{{ route('siswa.create') }}"
        class="btn btn-primary">
        + Tambah Siswa
    </a>

</div>

<div class="card">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jurusan</th>
                        <th>Perusahaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($siswa as $item)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                {{ $item->nis }}
                            </td>

                            <td>
                                {{ $item->nama }}
                            </td>

                            <td>
                                {{ $item->kelas }}
                            </td>

                            <td>
                                {{ $item->jurusan }}
                            </td>

                            <td>
                                {{ $item->perusahaan->nama_perusahaan }}
                            </td>

                            <td>

                                <a href="{{ route('siswa.show', $item) }}"
                                    class="btn btn-info btn-sm">
                                    Detail
                                </a>

                                <a href="{{ route('siswa.edit', $item) }}"
                                    class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form
                                    action="{{ route('siswa.destroy', $item) }}"
                                    method="POST"
                                    class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7"
                                class="text-center">

                                Belum ada data siswa.

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
