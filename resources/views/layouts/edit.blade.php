@extends('master')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Pegawai
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('pegawai.update', $pegawai->nip) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nip">NIP</label><br>
                        <input type="text" name="nip" class="formcontrol" id="nip" value="{{$pegawai->nip}}" aria-describedby="nip">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label><br>
                        <input type="nama" name="nama" class="formcontrol" id="nama" value="{{$pegawai->nama}}" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label><br>
                        <input type="alamat" name="alamat" class="formcontrol" id="alamat" value="{{$pegawai->alamat}}" aria-describedby="alamat">
                    </div>
                    <div class="form-group">
                        <label for="Jabatan">Jabatan</label><br>
                        <input type="jabatan" name="jabatan" class="formcontrol" id="jabatan" value="{{$pegawai->jabatan}}" aria-describedby="jabatan">
                    </div>
                    <div class="form-group">
                        <label for="Gaji_Pokok">Gaji Pokok</label><br>
                        <input type="gaji_pokok" name="gaji_pokok" class="formcontrol" id="gaji_pokok" value="{{$pegawai->gaji_pokok}}" aria-describedby="gaji_pokok">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection