<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Laporan Data Pemesan Tiket Konser</title>
</head>

<body>
    <div class="text-center">
        <h5>Laporan Data Pemesan Tiket Konser</h5>
        <p class="text-bold">Periode: {{ $from }} sampai {{ $to }}</p>
    </div>
    <div class="col-lg-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Tanggal Pemesanan</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Umur</th>
                    <th>Nama Konser</th>
                    <th>Tanggal Konser</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formulir as $data)
                    <tr>
                        <td>{{ $data->tgl_pemesanan }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->nik }}</td>
                        <td>{{ $data->ttl }}</td>
                        <td>{{ $data->umur }}</td>
                        <td>{{ $data->nama_konser }}</td>
                        <td>{{ $data->tgl_konser }}</td>
                        <td>
                            @if ($data->status == 'belum')
                                <span href="" class="badge text-black"
                                    style="background-color: red; text-decoration: none; color: white;">Belum
                                    check
                                    in</span>
                            @else
                                <span href="" class="badge text-black"
                                    style="background-color: green; text-decoration: none; color: white;">Sudah
                                    check
                                    in</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
