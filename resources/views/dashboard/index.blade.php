@extends('layout.admin')

@section('content')
    <section>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card mt-5">
            <div class="card-body">
                <table id="datatable" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Umur</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Nama Konser</th>
                            <th>Tanggal Konser</th>
                            <th>Status</th>
                            <th>KTP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formulir as $data)
                            <tr>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->nik }}</td>
                                <td>{{ $data->umur }}</td>
                                <td>{{ $data->tgl_pemesanan }}</td>
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
                                <td>
                                    <img src="{{ asset('storage/image/' . $data->ktp) }}" alt="" width="100px">
                                </td>
                                <td>
                                    <form action="{{ route('formulir.destroy', $data->id) }}" method="POST">
                                        <a href="{{ route('formulir.edit', $data->id) }}" class="btn btn-info">Edit</a>
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Umur</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Nama Konser</th>
                            <th>Tanggal Konser</th>
                            <th>Status</th>
                            <th>KTP</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
@endsection
