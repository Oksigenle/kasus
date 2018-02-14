@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('siswa.store') }}" method="post" >
        {{csrf_field()}}
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="">Jenis kelamin</label>
                <input type="text" class="form-control" name="jk" placeholder="jenis kelamin">
            </div>
            <div class="form-group">
                <label for="">TTl</label>
                <input type="text" class="form-control" name="ttl" placeholder="tempat tanggal lahir">
            </div>
            <div class="form-group">
                <label for="">Agama</label>
                <input type="text" class="form-control" name="agama" placeholder="agama">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="alamat">
            </div>
            
            

            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </form>
    </div>
@endsection