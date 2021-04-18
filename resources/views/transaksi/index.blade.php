@extends('layouts.app')

@section('content')
<div class="container">
    <div class="pt-3">
        <div class="col-md-12">
            <h3 class="text-success font-weight-bold">
                Daftar Transaksi
                <a href="{{route('transaksi.create')}}" class="btn btn-success" style="float: right;">Tambah Transaksi</a>
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
                            <th>Nama Pemesan</th>
                            <th>Paket</th>
                            <th>Agen</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($transaksis as $transaksi)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$transaksi->pemesan}}</td>
                            <td>{{$transaksi->paket->nama}}</td>
                            <td>{{$transaksi->paket->agen->nama}}</td>
                            <td>{{$transaksi->jumlah}}</td>
                            <td>Rp. {{$transaksi->jumlah * $transaksi->paket->harga}}</td>
                            <td>
                                <form action="{{route('transaksi.delete', $transaksi->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="" class="btn btn-primary btn-sm">Cek Nota</a>
                                    <a href="{{route('transaksi.edit', $transaksi->id)}}" class="btn btn-success btn-sm">Edit</a>
                                    <button href="" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Maaf Data Belum Tersedia. <a href="{{route('transaksi.create')}}">Tekan Disini Untuk menambahkan</a> 
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