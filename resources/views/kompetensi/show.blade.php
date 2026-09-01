@extends('layouts.app')

@section('title', 'Detail Kompetensi')

@section('content')

```
<div>

    <h2>
        {{ $kompetensi->nama_kompetensi }}
    </h2>

    <p class="text-muted mb-0">
        Detail kompetensi dan siswa yang menguasainya.
    </p>

</div>

<a
    href="{{ route('kompetensi.edit', $kompetensi) }}"
    class="btn btn-warning">

    Edit Kompetensi

</a>
```

```
<div class="card-body">

    <h5 class="card-title">
        Informasi Kompetensi
    </h5>

    <table class="table">

        <tr>

            <th width="200">
                Nama Kompetensi
            </th>

            <td>
                {{ $kompetensi->nama_kompetensi }}
            </td>

        </tr>

        <tr>

            <th>
                Deskripsi
            </th>

            <td>
                {{ $kompetensi->deskripsi ?? '-' }}
            </td>

        </tr>

        <tr>

            <th>
                Jumlah Siswa
            </th>

            <td>

                <span class="badge bg-primary">

                    {{ $kompetensi->siswa->count() }}
                    siswa

                </span>

            </td>

        </tr>

    </table>

</div>
```

```
<div class="card-body">

    <div class="table-responsive">

        <table class="table table-bordered table-striped">

            <thead class="table-dark">

                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Perusahaan PKL</th>
                </tr>

            </thead>

            <tbody>

                @forelse ($kompetensi->siswa as $siswa)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $siswa->nis }}
                        </td>

                        <td>
                            {{ $siswa->nama }}
                        </td>

                        <td>
                            {{ $siswa->kelas }}
                        </td>

                        <td>
                            {{ $siswa->perusahaan->nama_perusahaan }}
                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="5"
                            class="text-center">

                            Belum ada siswa yang
                            menguasai kompetensi ini.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>
```

```
Kembali
```

@endsection