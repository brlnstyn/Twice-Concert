@extends('layout.admin')

@section('content')
    <section>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-title">
                <h4 class="mt-3 mx-3">Buat Data Konser Baru</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('setting-konser.store') }}" method="POST" enctype="multipart/form-data"
                    autocomplete="off">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama_konser">Nama Konser</label>
                            <input type="text" class="form-control" id="nama_konser" name="nama_konser"
                                placeholder="Masukkan Nama Konser" autofocus style="background-color: #f3c5e0;">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tgl_konser">Tanggal Diselenggarakan</label>
                            <input type="date" class="form-control" id="tgl_konser" name="tgl_konser"
                                placeholder="Masukkan Tanggal Konser" style="background-color: #f3c5e0;">
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary">Buat Data Konser</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-body">
                <table id="datatable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Konser</th>
                            <th>Tanggal Konser</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($konser as $data)
                            <tr>
                                <td>{{ $data->nama_konser }}</td>
                                <td>{{ $data->tgl_konser }}</td>
                                <td>
                                    <form action="{{ route('setting-konser.destroy', $data->id) }}" method="POST">
                                        <a href="{{ route('setting-konser.edit', $data->id) }}"
                                            class="btn btn-primary">Edit</a>

                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
