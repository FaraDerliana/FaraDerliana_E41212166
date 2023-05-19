<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pariwisata</title>
</head>
<body>
    <form action="/update/{{ $data->id }}" method="post">
        @csrf
        <label for="">Nama</label><br>
        <input type="text" name="nama" value="{{ $data->nama }}"><br>
        <label for="">Paket Wisata</label><br>
        <input type="text" name="paket_wisata" value="{{ $data->paket_wisata }}"><br>
        <label for="">Harga</label><br>
        <input type="text" name="harga" value="{{ $data->harga }}"><br>
        <label for="">Tanggal Reservasi</label><br>
        <input type="text" name="tgl_reservasi" value="{{ $data->tgl_reservasi }}"><br>
        <label for="">No Telepon</label><br>
        <input type="text" name="no_tlp" value="{{ $data->no_tlp }}"><br>

        <button type="submit">Kirim Data</button>
    </form>
</body>
</html>
