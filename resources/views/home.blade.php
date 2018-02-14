@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Siswa </div>
                

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                      <thead>
                        <tr> 
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis kelamin</th>
                            <th>TTL</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th width="200px">Action</th>
                        </tr>
                       </thead>
                       <tbody>
                       @php $no = 1; @endphp
                       @foreach($siswa as $datas)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $datas->nama }}</td>
                                <td>{{ $datas->jk }}</td>
                                <td>{{ $datas->ttl }}</td>
                                <td>{{ $datas->agama }}</td>
                                <td>{{ $datas->alamat }}</td>
                                
                                <td>
                                    <form action="{{ route('siswa.destroy', $datas->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a href="{{ route('siswa.create') }}" class=" btn btn-sm btn-primary">Tambah</a>
                                        <a href="{{ route('siswa.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                        
                                    </form>
                                </td>
                            </tr>
                       @endforeach
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
