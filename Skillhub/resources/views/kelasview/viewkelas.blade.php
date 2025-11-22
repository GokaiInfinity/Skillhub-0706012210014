<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>List Kelas</h1>
    <table style="border: 1px solid black;">
        <tr>
            <th>ID</th>
            <th>Nama Kelas</th>
            <th>Deskripsi</th>
            <th>Instruktur</th>
        </tr>
        @foreach($kelas as $kls)
        <tr>
            <td>{{ $kls->id }}</td>
            <td>{{ $kls->nama_kelas }}</td>
            <td>{{ $kls->deskripsi_singkat }}</td>
            <td>{{ $kls->instruktur }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
