@extends('layout.master')

@section('content')
    <section>
        <div class="card">
            @foreach ($formulir as $data)
                <div class="card-header" style="background-color: #faa2d6">
                    <img src="../landing/images/logo.png" width="30" height="30" alt="">
                    {{ $data->nama_konser }}
                    | {{ $data->tgl_konser }}
                </div>
                {{-- {{ dd($data->nama_konser) }} --}}
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <h4>Nama: {{ $data->nama }}</h4>
                        <p style="font-weight: bolder;">{{ $data->id }}</p>
                        <p>Tanggal Pemesanan: {{ $data->tgl_pemesanan }}</p>
                        <footer class="blockquote-footer">Let's enjoy the concert!</footer>
                        </footer>
                    </blockquote>
                </div>
            @endforeach
        </div>
        <script src="#" onload="window.print()"></script>
    </section>
@endsection
