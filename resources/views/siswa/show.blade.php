<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistem E-PKL</title>
</head>
<body>
    @extends('layouts.app')

@section('title', 'Detail Siswa')

@section('content')

<h2 class="mb-4">Detail Siswa</h2>

<div class="card">

    <div class="card-body">

        <table class="table">

            <tr>
                <th width="200">NIS</th>
                <td>{{ $siswa->nis }}</td>
            </tr>

            <tr>
                <th>Nama</th>
                <td>{{ $siswa->nama }}</td>
            </tr>

            <tr>
                <th>Kelas</th>
                <td>{{ $siswa->kelas }}</td>
            </tr>

            <tr>
                <th>Jurusan</th>
                <td>{{ $siswa->jurusan }}</td>
            </tr>

            <tr>
                <th>Perusahaan</th>
                <td>
                    {{ $siswa->perusahaan->nama_perusahaan }}
                </td>
            </tr>

            <tr>
                <th>Pembimbing</th>
                <td>
                    {{ $siswa->perusahaan->pembimbing ?? '-' }}
                </td>
            </tr>

            <tr>
                <th>Tanggal Mulai</th>
                <td>
                    {{ $siswa->tanggal_mulai ?? '-' }}
                </td>
            </tr>

            <tr>
                <th>Tanggal Selesai</th>
                <td>
                    {{ $siswa->tanggal_selesai ?? '-' }}
                </td>
            </tr>


            <tr>

    <th>
        Kompetensi
    </th>

    <td>

        @forelse ($siswa->kompetensi as $kompetensi)

            <span class="badge bg-primary me-1">

                {{ $kompetensi->nama_kompetensi }}

            </span>

        @empty

            <span class="text-muted">
                Belum ada kompetensi.
            </span>

        @endforelse

    </td>

</tr>


        </table>

        <a
            href="{{ route('siswa.index') }}"
            class="btn btn-secondary">
            Kembali
        </a>

        <a
            href="{{ route('siswa.edit', $siswa) }}"
            class="btn btn-warning">
            Edit
        </a>

    </div>

</div>

@endsection
    
</body>
</html>
