@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('paket.save')}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="mb-3">
                        <h5 class="font-weight-bold text-center">Form Tambah Paket Umrah</h5>
                    </div>
                    <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Paket</label>
                                    <input type="text" name="nama" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jenis Layanan</label>
                                    <select class="form-control" name="jenis" id="">
                                        <option></option>
                                        <option>Land Arrangement & Hotel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Penginapan</label>
                                    <input type="text" name="penginapan" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="text" name="harga" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Agen</label>
                                    <select name="agen_id" id="" class="form-control">
                                        <option>---- Pilih Agen ----</option>
                                        @foreach($agens as $agen)
                                            <option value="{{$agen->id}}">{{$agen->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-sm btn-block">Save</button>
                            <a href="{{route('paket.index')}}" class="btn btn-secondary btn-sm btn-block">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

