<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detail Kelas</h1>
    <p><strong>Nama Kelas:</strong> {{ $kelas->nama_kelas }}</p>
    <p><strong>Deskripsi Singkat:</strong> {{ $kelas->deskripsi_singkat }}</p>
    <p><strong>Instruktur:</strong> {{ $kelas->instruktur }}</p>
    <h2>Peserta yang mengikuti kelas ini</h2>
    <ul>
        @foreach($kelas->parapeserta as $peserta)
        <li>
            {{ $peserta->nama }}

            <form action="/removepesertafromkelas/{{ $peserta->id }}/{{ $kelas->id }}"
                method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus Peserta dari Kelas</button>
            </form>
        </li>

        @endforeach
    </ul>
     <button><a href="/kelas">Kembali ke List Kelas</a></button>
    </body>
</html>
