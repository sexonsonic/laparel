<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Film</center>

    @foreach ($film as $data)
        Judul   : {{ $data->judul }}<br>
        Sutradara   : {{ $data->sutradara }} <br>
        Tanggal Rilis   : {{ $data->tgl_rilis }} <br>
        Genre   : {{ $data->genre }}<br>
        Durasi  : {{ $data->durasi }} <br>
        Bahasa  : {{ $data->bahassa }}<br>
        Negara  : {{ $data->negara }} <hr>
    @endforeach
</body>
</html>
