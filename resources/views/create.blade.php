<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pariwisata</title>
</head>
<body>
    <form action="/create" method="post">
        @csrf
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive pt-3">
                  <table class="table table-bordered">
        <label for="">Nama</label><br>
        <input type="text" name="nama"><br>
        <label for="">Paket Wisata</label><br>
        <input type="text" name="paket_wisata"><br>
        <label for="">Harga</label><br>
        <input type="text" name="harga"><br>
        <label for="">Tanggal Reservasi</label><br>
        <input type="text" name="tgl_reservasi"><br>
        <label for="">No Telepon</label><br>
        <input type="text" name="no_tlp"><br>

        <button type="submit">Kirim Data</button>
        </table>
            </div>
          </div>
        </div>
    </div>
    </form>
              </table>
            </div>
          </div>
        </div>
    </div>
</body>
</html>
