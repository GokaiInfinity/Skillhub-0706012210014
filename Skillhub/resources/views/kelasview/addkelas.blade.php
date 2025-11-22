<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Kelas</h1>
    <form action="/insertkelas" method="POST">
        @csrf
        <label for="nama_kelas">Nama Kelas:</label><br>
        <input type="text" id="nama_kelas" name="nama_kelas"><br>
        <label for="deskripsi_singkat">Deskripsi Singkat:</label><br>
        <input type="text" id="deskripsi_singkat" name="deskripsi_singkat"><br>
        <label for="instruktur">Instruktur:</label><br>
        <input type="text" id="instruktur" name="instruktur"><br><br>
        <input type="submit" value="Submit">
</body>
</html>
