<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Peserta</title>
</head>
<body>
    <button><a href="/kelas">View Kelas</a></button>

    <h1>List Peserta</h1>

    <button><a href="/addpeserta">Tambah Peserta</a></button>
    <br><br>

    <table style="border: 1px solid black;">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach($pesertas as $peserta)
        <tr>
            <td>{{ $peserta->id }}</td>
            <td>{{ $peserta->nama }}</td>
            <td>{{ $peserta->email }}</td>
            <td>
                <button><a href="/detailpeserta/{{ $peserta->id }}">Detail</a></button>
                <button><a href="/editpeserta/{{ $peserta->id }}"> Edit Peserta</a> </button>
                <button><a href="/deletepeserta/{{ $peserta->id }}"> Hapus Peserta</a></button>
                <button><a href="/addpesertatokelas/{{ $peserta->id }}"> Tambah Kelas Pada Peserta</a></button>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
