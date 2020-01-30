<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Passing Controller ke View</title>
</head>
<body>
    <center>Daftar Siswa Abadi</center>
    @foreach ($data as $index)
        {{ $index['nama'] }}<br>
        {{ $index['kelas']}}<hr>
    @endforeach
</body>
</html>
