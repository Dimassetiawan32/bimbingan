@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('visa.update', $visa->id)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <h5 class="font-weight-bold text-center">Form Tambah Visa</h5>
                    </div>
                    <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Waktu Pemesanan</label>
                                    <input type="date" name="waktu" class="form-control" id="" value="{{$visa->waktu}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Layanan Visa</label>
                                    <select class="form-control" name="layanan" id="">
                                        <option>{{$visa->waktu}}</option>
                                        <option>Visa Almadinah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal Keberangkatan</label>
                                    <input type="date" name="tgl_brkt" class="form-control" id="" value="{{$visa->tgl_brkt}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jumlah Visa</label>
                                    <input type="number" name="jumlah" class="form-control" id="" value="{{$visa->jumlah}}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Harga Visa</label>
                                    <input type="number" name="harga" class="form-control" id="" value="{{$visa->harga}}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-sm btn-block">Save</button>
                            <a href="{{route('visa.index')}}" class="btn btn-secondary btn-sm btn-block">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

