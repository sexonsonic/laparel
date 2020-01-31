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
        Jumlah :{{ $data->jml }}<br>

        @if ($data->jml >= 100000)
            {{ "Termasuk ke Paket A" }}

            @elseif ($data->jml > 25000 && $data->jml < 100000)
                {{ "Termasuk ke Paket B" }}

            @elseif ($data->jml > 10000 && $data->jml < 25000)
                {{ "Termasuk ke Paket C" }}
        @endif
        <hr>

    @endforeach
</body>
</html>
