@extends('master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Pegawai
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>NIP: </b>{{$pegawai->nip}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$pegawai->nama}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$pegawai->alamat}}</li>
                    <li class="list-group-item"><b>Jabatan: </b>{{$pegawai->jabatan}}</li>
                    <li class="list-group-item"><b>Gaji Pokok: </b>{{$pegawai->gaji_pokok}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{ route('pegawai.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection