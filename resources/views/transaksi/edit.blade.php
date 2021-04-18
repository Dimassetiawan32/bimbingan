@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('transaksi.update', $transaksi->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <h5 class="font-weight-bold text-center">Form Edit Transaksi</h5>
                    </div>
                    <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Pemesan</label>
                                    <input type="text" name="pemesan" class="form-control" id="" value="{{$transaksi->pemesan}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nomor Telepon</label>
                                    <input type="number" name="no_telp" class="form-control" id="" value="{{$transaksi->no_telp}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Paket</label>
                                    <select name="paket_id" id="" class="form-control">
                                            @foreach($paket as $paket)
                                            <option value="{{$paket->id}}">{{$paket->nama}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jumlah</label>
                                    <input type="number" name="jumlah" class="form-control" id="" value="{{$transaksi->jumlah}}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-sm btn-block">Save</button>
                            <a href="{{route('transaksi.index')}}" class="btn btn-secondary btn-sm btn-block">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

