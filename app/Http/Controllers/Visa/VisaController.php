<?php

namespace App\Http\Controllers\Visa;

use App\Visa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisaController extends Controller
{
    public function index()
    {
        $visas = Visa::all();
        return view('visa.index', compact('visas'));
    }

    public function create()
    {
        return view('visa.create');
    }

    public function store(Request $request)
    {
        $visas = Visa::create([
            'waktu'     => $request->waktu,
            'layanan'   => $request->layanan,
            'tgl_brkt'  => $request->tgl_brkt,
            'jumlah'    => $request->jumlah,
            'harga'     => $request->harga,
        ]);

        $visas->save();
        toast('Visa Berhasil Ditambahkan','success');
        return redirect('visa/index');
            
    }

    public function edit($id)
    {
        $visa = Visa::findOrFail($id);
        return view('visa.edit', compact('visa'));
    }

    public function update(Request $request, $id)
    {
        $visa = Visa::find($id);
        $visa->update($request->all());
        toast('Visa Berhasil Diperbarui','success');
        return redirect('visa/index');
    }

    public function destroy($id)
    {
        $visa = Visa::find($id);
        $visa->delete($visa->all());
        toast('Visa Berhasil DiHapus','success');
        return redirect('visa/index');
    }
}
