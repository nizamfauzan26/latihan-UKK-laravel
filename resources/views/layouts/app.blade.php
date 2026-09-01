<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Pendataan PKL')
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>



    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">

            <a class="navbar-brand"
                href="{{ route('siswa.index') }}">
                Data PKL
            </a>


            
           <a class="nav-link"
    href="{{ route('siswa.index') }}">
    Siswa
</a>

<a class="nav-link"
    href="{{ route('perusahaan.index') }}">
    Perusahaan
</a>

<a class="nav-link"
    href="{{ route('kompetensi.index') }}">
    Kompetensi
</a>



                <a class="nav-link"
                    href="{{ route('siswa.index') }}">
                    Siswa
                </a>

                <a class="nav-link"
                   href="{{ route('kompetensi.index') }}">
                   Kompetensi
                </a>

                <a class="nav-link"
                    href="{{ route('perusahaan.index') }}">
                    Perusahaan
                </a>

            </div>

        </div>
    </nav>

    <main class="container py-4">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">

                <strong>Terjadi kesalahan:</strong>

                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>

            
        @endif

        @yield('content')

        
 
 <footer>&copy; {{ date('Y') }} SMK - Modul E-PKL</footer>

 

    </main>

</body>

</html>