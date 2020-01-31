<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Film</center>
        Judul   : {{ $film->judul }}<br>
        Sutradara   : {{ $film->sutradara }} <br>
        Tanggal Rilis   : {{ $film->tgl_rilis }} <br>
        Genre   : {{ $film->genre }}<br>
        Durasi  : {{ $film->durasi }} <br>
        Bahasa  : {{ $film->bahassa }}<br>
        Negara  : {{ $film->negara }} <hr>
</body>
</html>
