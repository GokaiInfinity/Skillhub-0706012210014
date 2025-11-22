<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Peserta Pada Kelas</title>
</head>
<body>
    <h1>Tambah Peserta ke Kelas</h1>
    <form action="/insertpesertatokelas/{{ $peserta->id }}" method="POST">
        @csrf
        <label for="nama">Nama Peserta:</label><br>
        <input type="text" id="nama" name="nama" value="{{ $peserta->nama }}" readonly><br>
        <label for="kelas">Pilih Kelas:</label><br>
        <select id="kelas" name="kelas_id">
            @foreach($allkelas as $kelas)
                <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
            @endforeach
        </select><br><br>
        <input type="submit" value="Tambah ke Kelas">
    </form>
</body>
</html>
