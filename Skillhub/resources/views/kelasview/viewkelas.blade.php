<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/tabledecor.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <button><a href="/peserta">View Peserta</a></button>

    <h1>List Kelas</h1>

    <button><a href="/addkelas">Tambah Kelas</a></button>
    <br><br>

    <table style="border: 1px solid black;">
        <tr>
            <th>ID</th>
            <th>Nama Kelas</th>
            <th>Deskripsi</th>
            <th>Instruktur</th>
            <th>Action</th>
        </tr>
        @foreach($kelas as $kls)
        <tr>
            <td>{{ $kls->id }}</td>
            <td>{{ $kls->nama_kelas }}</td>
            <td>{{ $kls->deskripsi_singkat }}</td>
            <td>{{ $kls->instruktur }}</td>
            <td>
                <button>Detail</button>
                <button><a href="/editkelas/{{ $kls->id }}"> Edit Kelas</a> </button>
                <button><a href="/deletekelas/{{ $kls->id }}"> Hapus Kelas</button>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
