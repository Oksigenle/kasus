@extends('layouts.app')

@section('content')
        <div class="container">
         
            @foreach($siswa as $datas)
            <form action="{{ route('siswa.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama" value="{{ $datas->nama }}">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis kelamin:</label>
                    <input type="text" class="form-control" id="jk" name="jk" value="{{ $datas->jk }}">
                </div>
                <div class="form-group">
                    <label for="ttl">Ttl:</label>
                    <input type="text" class="form-control" id="ttl" name="ttl" value="{{ $datas->ttl }}">
                </div>
                <div class="form-group">
                    <label for="agama">Agama:</label>
                    <input type="text" class="form-control" id="agama" name="agama" value="{{ $datas->agama }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat">{{ $datas->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Update</button>
                </div>
            </form>
            @endforeach
      
    </section>
@endsection