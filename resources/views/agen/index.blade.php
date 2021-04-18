@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pt-3">
        <div class="col-md-12">
            <h3 class="text-success font-weight-bold">
                Daftar Keagenan
                <a href="{{route('agen.create')}}" class="btn btn-success" style="float: right;">Tambah Agen</a>
            </h3>
        </div>
        <hr>
        @csrf
        <div class="container">
            <div class="pt-2">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="table-success">
                        <tr>
                            <th>No</th>
                            <th>Kode Agen</th>
                            <th>Nama Agen</th>
                            <th>Pemimpin Agen</th>
                            <th>Peran</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($agens as $agen)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$agen->kode_agen}}</td>
                            <td>{{$agen->nama}}</td>
                            <td>{{$agen->pemimpin}}</td>
                            <td>{{$agen->peran}}</td>
                            <td>
                                <form action="{{route('agen.delete', $agen->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('agen.edit', $agen->id)}}" class="btn btn-success btn-sm">Edit</a>
                                    <button href="" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                Maaf Data Belum Tersedia. <a href="{{route('agen.create')}}">Tekan Disini Untuk menambahkan</a> 
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection