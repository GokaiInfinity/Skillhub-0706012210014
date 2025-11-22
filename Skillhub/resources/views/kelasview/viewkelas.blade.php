<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/tabledecor.css'])
    <title>List Kelas</title>
</head>
<body>
    <button><a href="/peserta">View Peserta</a></button>

    <h1>List Kelas</h1>

    <button><a href="/addkelas">Tambah Kelas</a></button>
    <br><br>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama Kelas</th>
            <th>Deskripsi Singkat</th>
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
                <button><a href ="/detailkelas/{{ $kls->id }}">Detail Kelas</a></button>
                <button><a href="/editkelas/{{ $kls->id }}"> Edit Kelas</a> </button>
                <button><a href="/deletekelas/{{ $kls->id }}"> Hapus Kelas</button>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
