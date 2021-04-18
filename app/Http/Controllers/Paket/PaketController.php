<?php

namespace App\Http\Controllers\Paket;

use App\Agen;
use App\Paket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaketController extends Controller
{
    public function index()
    {
        $agens = Agen::all();
        $pakets = Paket::all();
        return view('paket.index', compact('agens','pakets'));
    }
    
    public function create()
    {
        $agens = Agen::all();
        return view('paket.create', compact('agens'));
    }

    public function store(Request $request)
    {
        $pakets = Paket::create([
            'agen_id'       => $request->agen_id,
            'nama'          => $request->nama,
            'jenis'         => $request->jenis,
            'penginapan'    => $request->penginapan,
            'harga'         => $request->harga,
            
        ]);

        $pakets->save();
        toast('Paket Berhasil Ditambahkan','success');
        return redirect('paket/index');
    }
    
    public function edit($id)
    {
        $agen = Agen::all();
        $paket = Paket::findOrFail($id);
        return view('paket.edit', compact('agen','paket'));
    }

    public function update(Request $request, $id)
    {
        $paket = Paket::find($id);
        $paket->update($request->all());
        toast('Paket Berhasil Diperbarui','success');
        return redirect('paket/index');
    }
    
    public function destroy($id)
    {
        $paket = Paket::find($id);
        $paket->delete($paket->all());
        toast('Paket Berhasil Dihapus','success');
        return redirect('paket/index');
    }
}
