<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa dan Ekskul</title>
</head>
<body>
    <h1>Daftar Siswa dan Ekskul</h1>

    @foreach ($siswas as $siswa)
        <p><strong>{{ $siswa->nama }}</strong> ({{ $siswa->nisn }})</p>

        @if ($siswa->ekskuls->isEmpty())
            <em>Tidak memiliki ekskul</em>
        @else
            <ul>
                @foreach ($siswa->ekskuls as $ekskul)
                    <li>{{ $ekskul->nama }}</li>
                @endforeach
            </ul>
        @endif
    @endforeach
</body>
</html>
