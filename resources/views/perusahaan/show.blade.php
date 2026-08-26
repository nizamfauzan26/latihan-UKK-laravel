<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistem E-PKL</title>
</head>
<body>
    @extends('layouts.app')

@section('title', 'Detail Perusahaan')

@section('content')

<h2 class="mb-4">Detail Perusahaan</h2>

<div class="card mb-4">

    <div class="card-body">

        <table class="table">

            <tr>
                <th width="200">
                    Nama Perusahaan
                </th>

                <td>
                    {{ $perusahaan->nama_perusahaan }}
                </td>
            </tr>

            <tr>
                <th>Alamat</th>

                <td>
                    {{ $perusahaan->alamat }}
                </td>
            </tr>

            <tr>
                <th>Telepon</th>

                <td>
                    {{ $perusahaan->telepon ?? '-' }}
                </td>
            </tr>

            <tr>
                <th>Email</th>

                <td>
                    {{ $perusahaan->email ?? '-' }}
                </td>
            </tr>

            <tr>
                <th>Pembimbing</th>

                <td>
                    {{ $perusahaan->pembimbing ?? '-' }}
                </td>
            </tr>

        </table>

    </div>

</div>

<h4>Daftar Siswa PKL</h4>

<div class="card">

    <div class="card-body">

        <table class="table table-bordered">

            <thead>

                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                </tr>

            </thead>

            <tbody>

                @forelse ($perusahaan->siswa as $item)

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

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="4"
                            class="text-center">

                            Belum ada siswa PKL.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

<a
    href="{{ route('perusahaan.index') }}"
    class="btn btn-secondary mt-3">

    Kembali

</a>

<a
    href="{{ route('perusahaan.edit', $perusahaan) }}"
    class="btn btn-warning mt-3">

    Edit

</a>

@endsection
    
</body>
</html>
