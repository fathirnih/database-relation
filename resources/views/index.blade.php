<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa dan Ekskul</title>
</head>
<body>
    <h1>Daftar Siswa dan Ekskul</h1>

    @foreach ($siswas as $siswa)
        <h3>{{ $siswa->nama }} ({{ $siswa->nisn }})</h3>

        @if ($siswa->ekskuls->isNotEmpty())
            <ul>
                @foreach ($siswa->ekskuls as $ekskul)
                    <li>{{ $ekskul->nama_ekskul }}</li>
                @endforeach
            </ul>
        @else
            <p><em>Tidak memiliki ekskul</em></p>
        @endif
    @endforeach
</body>
</html>
