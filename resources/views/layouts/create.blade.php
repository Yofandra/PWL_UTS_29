@extends('master')

@section('content')

        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Pegawai
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
                <form method="post" action="{{ route('pegawai.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="nip">NIP</label><br>
                        <input type="text" name="nip" class="formcontrol" id="nip" aria-describedby="nip">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label><br>
                        <input type="nama" name="nama" class="formcontrol" id="nama" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label><br>
                        <input type="alamat" name="alamat" class="formcontrol" id="alamat" aria-describedby="alamat">
                    </div>
                    <div class="form-group">
                        <label for="Jabatan">Jabatan</label><br>
                        <input type="jabatan" name="jabatan" class="formcontrol" id="jabatan" aria-describedby="jabatan">
                    </div>
                    <div class="form-group">
                        <label for="Gaji_Pokok">Gaji Pokok</label><br>
                        <input type="gaji_pokok" name="gaji_pokok" class="formcontrol" id="gaji_pokok" aria-describedby="gaji_pokok">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
@endsection