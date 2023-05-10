@extends('layout.admin')

@section('content')
    <section>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <form action="/check-in/cari" method="GET" autocomplete="off">
            @csrf
            <div class="row mt-4">
                <div class="col-md-8">
                    <input type="text" id="cari" name="cari" class="form-control"
                        placeholder="Cari berdasarkan ID..." value="{{ old('cari') }}" style="background-color: #f3c5e0;">
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary btn-md">Cari Data</button>
                </div>
            </div>
        </form>
        <div class="card mt-3">
            <div class="card-body">
                <table id="datatable" class="display">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Nama Konser</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formulir as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->tgl_pemesanan }}</td>
                                <td>{{ $data->nama_konser }}</td>
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
                                <td>
                                    <form action="{{ route('check-in.updateStatus', $data->id) }}" method="POST">
                                        @csrf
                                        @if ($data->status == 'sudah')
                                            <button type="submit" class="btn btn-secondary" disabled>Done</button>
                                        @else
                                            <button type="submit" class="btn btn-primary">Check In</button>
                                        @endif
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
