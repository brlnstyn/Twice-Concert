@extends('layout.master')

@section('content')
    <section>
        <div class="card">
            <div class="card-body m-2">
                <div class="card-title">
                    <h3>Formulir Pemesanan Tiket</h3>
                </div>
                <form action="{{ route('formulir.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan Nama" autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nik">NIK</label>
                            <input type="number" class="form-control" id="nik" name="nik"
                                placeholder="Masukkan NIK">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="no_hp">No HandPhone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp"
                                placeholder="Masukkan No HandPhone" autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Masukkan Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="ttl">Tempat Tanggal Lahir</label>
                            <input type="date" class="form-control" id="ttl" name="ttl"
                                placeholder="Masukkan Tanggal Tempat Lahir">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="umur">Umur</label>
                            <input type="number" class="form-control" id="umur" name="umur"
                                placeholder="Masukkan Umur">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ktp">KTP</label>
                            <input type="file" class="form-control" id="ktp" name="ktp"
                                placeholder="Upload KTP">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="tgl_pemesanan">Tanggal Pemesanan</label>
                            <input type="date" class="form-control" id="tgl_pemesanan" name="tgl_pemesanan"
                                value="{{ date('Y-m-d') }}" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nama_konser">Nama Konser</label>
                            <select name="nama_konser" id="nama_konser" class="form-control">
                                @foreach ($konser as $data)
                                    <option value="{{ $data->nama_konser }}">{{ $data->nama_konser }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="tgl_konser">Tanggal Konser</label>
                            <select name="tgl_konser" id="tgl_konser" class="form-control">
                                @foreach ($konser as $data)
                                    <option value="{{ $data->tgl_konser }}">{{ $data->tgl_konser }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary">Pesan Tiket</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
