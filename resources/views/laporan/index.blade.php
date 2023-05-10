@extends('layout.admin')

@section('content')
    <section>
        <div class="row mt-4">
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="card-header">
                        Cari Berdasarkan Tanggal Pemesanan dan Status
                    </div>
                    <div class="card-body">
                        <form action="{{ route('laporan.getLaporan') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="tgl_awal">Tanggal Awal</label>
                                <input type="date" name="from" class="form-control" style="background-color: #f3c5e0"
                                    id="tgl_awal">
                            </div>
                            <div class="form-group mb-3">
                                <label for="tgl_akhir">Tanggal Akhir</label>
                                <input type="date" name="to" class="form-control" id="tgl_akhir"
                                    style="background-color: #f3c5e0">
                            </div>
                            <div class="form-group mb-3">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control"
                                    style="background-color: #f3c5e0">
                                    <option value="0" selected>Pilih Status</option>
                                    <option value="belum">Belum check in</option>
                                    <option value="sudah">Sudah check in</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" style="width: 100%">Cari Data</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12">
                <div class="card">
                    <div class="card-header mb-2">
                        Data Berdasarkan Tanggal dan Status
                        <div class="float-right mt-2">
                            @if ($formulir ?? '')
                                <a href="{{ route('laporan.cetakLaporan', ['from' => $from, 'to' => $to, 'status' => $status]) }}"
                                    class="btn btn-danger">EXPORT PDF</a>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($formulir ?? '')
                            <table id="datatable" class="display">
                                <thead>
                                    <tr>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Nama Konser</th>
                                        <th>Nama</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($formulir as $data)
                                        <tr>
                                            <td>{{ $data->tgl_pemesanan }}</td>
                                            <td>{{ $data->nama_konser }}</td>
                                            <td>{{ $data->nama }}</td>
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
                        @else
                            <div class="text-center">
                                Tidak ada data
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
