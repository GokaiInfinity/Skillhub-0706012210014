<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Peserta</h1>
    <form action="/updatepeserta/{{ $peserta->id }}" method="POST">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ $peserta->nama }}"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ $peserta->email }}"><br>
        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $peserta->tanggal_lahir }}"><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
