<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa & Ekskul</title>
</head>
<body>
<h1>Daftar Siswa dan Ekskul</h1>

@foreach ($siswas as $siswa)
    <h3>{{ $siswa->nama }} ({{ $siswa->nisn }})</h3>
    <ul>
        @foreach ($siswa->ekskuls as $ekskul)
            <li>{{ $ekskul->nama_ekskul }}</li>
        @endforeach
    </ul>
@endforeach

</body>
</html>
