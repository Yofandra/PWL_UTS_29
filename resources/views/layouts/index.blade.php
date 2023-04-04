@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Data Pegawai</h2>
        </div>
        <form action="{{ route('pegawai.index') }}" method="GET" role="search">
            <input type="text" name="search" placeholder="Cari Pegawai">
            <button type="submit">Search</button>
        </form>
        <div class="float-right my-2">
            <a class="btn btnsuccess" href="{{ route('pegawai.create') }}"> Input Pegawai</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>Gaji Pokok</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($pegawai as $Pegawai)
    <tr>

        <td>{{ $Pegawai->nip }}</td>
        <td>{{ $Pegawai->nama }}</td>
        <td>{{ $Pegawai->alamat }}</td>
        <td>{{ $Pegawai->jabatan }}</td>
        <td>{{ $Pegawai->gaji_pokok }}</td>
        <td>
            <form action="{{ route('pegawai.destroy',$Pegawai->nip) }}" method="POST">

                <a class="btn btn-info" href="{{ route('pegawai.show',$Pegawai->nip) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('pegawai.edit',$Pegawai->nip) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<!-- pagination -->
{!! $pegawai->links()!!}

@endsection