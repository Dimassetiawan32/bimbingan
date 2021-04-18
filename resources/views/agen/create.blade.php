@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow">
                <div class="card-body">
                <form action="{{route('agen.save')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                    <div class="mb-3">
                        <h5 class="font-weight-bold text-center">Form Tambah Agen</h5>
                    </div>
                    <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Pemimpin</label>
                                    <input type="text" name="pemimpin" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Telepon</label>
                                    <input type="number" name="no_telp" class="form-control" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Peran</label>
                                    <select name="peran" class="form-control" id="">
                                        <option>---- Pilih Peran ----</option>
                                        <option>Tim Handling</option>
                                        <option>Travel</option>
                                        <option>Tim Handling & Travel</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-sm btn-block">Save</button>
                            <a href="{{route('agen.index')}}" class="btn btn-secondary btn-sm btn-block">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

