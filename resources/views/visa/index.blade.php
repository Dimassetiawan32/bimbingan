@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pt-3">
        <div class="col-md-12">
            <h3 class="text-success font-weight-bold">
                Daftar Visa
                <a href="{{route('visa.create')}}" class="btn btn-success" style="float: right;">Tambah Visa</a>
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
                            <th>Waktu Pemesanan</th>
                            <th>Layanan Visa</th>
                            <th>Tanggal Keberangkatan</th>
                            <th>Harga Per Visa</th>
                            <th>Jumlah Visa</th>
                            <th>Total Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($visas as $visa)
                        <tr>
                            <td>{{$loop->iteration}}</td>                            
                            <td>{{$visa->waktu}}</td>                            
                            <td>{{$visa->layanan}}</td>                            
                            <td>{{$visa->tgl_brkt}}</td>                            
                            <td>Rp. {{$visa->harga}}</td>                            
                            <td>{{$visa->jumlah}}</td>                            
                            <td>Rp. {{$visa->jumlah * $visa->harga}}</td>                            
                            <td>
                                <form action="{{route('visa.delete', $visa->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('visa.edit', $visa->id)}}" class="btn btn-success btn-sm">Edit</a>
                                    <button href="" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">
                                Maaf Data Belum Tersedia. <a href="{{route('visa.create')}}">Tekan Disini Untuk menambahkan</a> 
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