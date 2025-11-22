<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detail Peserta</h1>
    <p><strong>Nama:</strong> {{ $peserta->nama }}</p>
    <p><strong>Email:</strong> {{ $peserta->email }}</p>
    <p><strong>Tanggal Lahir:</strong> {{ $peserta->tanggal_lahir }}</p>
    <h2>Kelas yang diikuti</h2>
    <ul>
        @foreach($peserta->ikutkursus as $kelas)
            <li>{{ $kelas->nama_kelas }}</li>
        @endforeach
    </ul>

    <button><a href="/peserta">Kembali ke List Peserta</a></button>
</body>
</html>
