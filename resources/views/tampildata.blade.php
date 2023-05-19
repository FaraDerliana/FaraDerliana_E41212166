<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tabel Pengurus</h4>
    <div class="container">
        <button type="button" class="btn btn-primary"><a href="/">Tambah data</a></button></div>
        <div class="table-responsive pt-3">
            <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">Paket Wisata</th>
                <th scope="col">Harga</th>
                <th scope="col">Tanggal Reservasi</th>
                <th scope="col">No Telepon</th>
                <th colspan="2">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($item as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->paket_wisata }}</td>
                        <td>{{ $data->harga }}</td>
                        <td>{{ $data->tgl_reservasi }}</td>
                        <td>{{ $data->no_tlp }}</td>
                        <td><button type="button" class="btn btn-warning"><a href="/delete/{{ $data->id }}">Hapus</a></button></td>
                        <td><button type="button" class="btn btn-danger"><a href="/tampilupdate/{{ $data->id }}">Update</a></button></td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
