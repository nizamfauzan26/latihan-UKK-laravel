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

<table class="table table-bordered">

    <thead class="table-dark">

        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Kompetensi</th>
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

                <td>

                    @forelse ($item->kompetensi as $kompetensi)

                        <span class="badge bg-primary">

                            {{ $kompetensi->nama_kompetensi }}

                        </span>

                    @empty

                        <span class="text-muted">
                            Belum ada
                        </span>

                    @endforelse

                </td>

            </tr>

        @empty

            <tr>

                <td
                    colspan="5"
                    class="text-center">

                    Belum ada siswa PKL.

                </td>

            </tr>

        @endforelse

    </tbody>

</table>
@endsection
    
</body>
</html>
