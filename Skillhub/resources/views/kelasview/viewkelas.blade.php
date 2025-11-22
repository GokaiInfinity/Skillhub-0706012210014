<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/tabledecor.css'])
    <title>Document</title>
</head>
<body>
    <button><a href="/peserta">View Peserta</a></button>

    <h1>List Kelas</h1>

    <button><a href="/addkelas">Tambah Kelas</a></button>
    <br><br>

    <table>
        <tr>
            <th  style="border: 1px solid black;">ID</th>
            <th  style="border: 1px solid black;">Nama Kelas</th>
            <th  style="border: 1px solid black;">Deskripsi Singkat</th>
            <th  style="border: 1px solid black;">Instruktur</th>
            <th  style="border: 1px solid black;">Action</th>
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
                <button><a href="/tambahpesertapadakelas/{{ $kls->id }}"> Tambah Peserta Pada Kelas</a></button>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
