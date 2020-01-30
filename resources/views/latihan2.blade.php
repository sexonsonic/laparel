<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar tabungan</center>

    @foreach ($tabungan as $data)
        Nis :{{ $data->nis }}<br>
        Nama :{{ $data->nama }}<br>
        Kelas :{{ $data->kelas }}<br>
        Jumlah :{{ $data->jml }}<hr>
    @endforeach
</body>
</html>
