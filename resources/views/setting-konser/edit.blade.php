@extends('layout.admin')

@section('content')
    <section>
        <div class="card">
            <div class="card-title">
                <h4 class="mt-3 mx-3">Edit Data Konser</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('setting-konser.update', $konser->id) }}" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    @method('PUT')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama_konser">Nama Konser</label>
                            <input type="text" class="form-control" id="nama_konser" name="nama_konser"
                                placeholder="Masukkan Nama Konser" autofocus style="background-color: #f3c5e0;"
                                value="{{ $konser->nama_konser }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tgl_konser">Tanggal Diselenggarakan</label>
                            <input type="date" class="form-control" id="tgl_konser" name="tgl_konser"
                                placeholder="Masukkan Tanggal Konser" style="background-color: #f3c5e0;"
                                value="{{ $konser->tgl_konser }}">
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary">Edit Data Konser</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
