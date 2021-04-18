@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pt-3">
        <div class="col-md-12">
            <h3 class="text-success font-weight-bold">
                Daftar Paket
                <a href="{{route('paket.create')}}" class="btn btn-success" style="float: right;">Tambah Paket</a>
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
                            <th>Nama Paket</th>
                            <th>Jenis Layanan</th>
                            <th>Agen</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($pakets as $paket)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$paket->nama}}</td>
                            <td>{{$paket->jenis}}</td>
                            <td>{{$paket->agen->nama}}</td>
                            <td>{{$paket->harga}}</td>
                            <td>
                                <form action="{{route('paket.delete', $paket->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="" class="btn btn-primary btn-sm">Detail</a>
                                    <a href="{{route('paket.edit', $paket->id)}}" class="btn btn-success btn-sm">Edit</a>
                                    <button href="" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                Maaf Data Belum Tersedia. <a href="{{route('paket.create')}}">Tekan Disini Untuk menambahkan</a> 
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