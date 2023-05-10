@extends('layout.master')

@section('content')
    <section>
        <div class="card">
            <div class="card-body m-2">
                <div class="card-title">
                    <h3>Edit Formulir</h3>
                </div>
                <form action="{{ route('formulir.update', $formulir->id) }}" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    @method('PUT')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukkan Nama" value="{{ $formulir->nama }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nik">NIK</label>
                            <input type="number" class="form-control" id="nik" name="nik"
                                placeholder="Masukkan NIK" value="{{ $formulir->nik }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="no_hp">No HandPhone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp"
                                placeholder="Masukkan No HandPhone" value="{{ $formulir->no_hp }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Masukkan Email" value="{{ $formulir->email }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="ttl">Tempat Tanggal Lahir</label>
                            <input type="date" class="form-control" id="ttl" name="ttl"
                                placeholder="Masukkan Tanggal Tempat Lahir" value="{{ $formulir->ttl }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="umur">Umur</label>
                            <input type="number" class="form-control" id="umur" name="umur"
                                placeholder="Masukkan Umur" value="{{ $formulir->umur }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="tgl_pemesanan">Tanggal Pemesanan</label>
                            <input type="date" class="form-control" id="tgl_pemesanan" name="tgl_pemesanan"
                                value="{{ $formulir->tgl_pemesanan }}">
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
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
