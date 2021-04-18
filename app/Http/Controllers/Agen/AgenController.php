<?php

namespace App\Http\Controllers\Agen;

use App\Agen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgenController extends Controller
{
    public function index()
    {
        $agens = Agen::all();
        return view('agen.index', compact('agens'));
    }

    public function create()
    {
        return view('agen.create');
    }

    public function store(Request $request)
    {
        $agens = Agen::create([
            'nama' => $request->nama,
            'pemimpin' => $request->pemimpin,
            'no_telp' => $request->no_telp,
            'peran' => $request->peran,
        ]);

        $agens->save();
        toast('Agen Berhasil Ditambahkan','success');
        return redirect('agen/index');
            
    }

    public function edit($id)
    {
        $agen = Agen::findOrFail($id);
        return view('agen.edit', compact('agen'));
    }

    public function update(Request $request, $id)
    {
        $agen = Agen::find($id);
        $agen->update($request->all());
        toast('Agen Berhasil Diperbarui','success');
        return redirect('agen/index');
    }

    public function destroy($id)
    {
        $agen = Agen::find($id);
        $agen->delete($agen->all());
        toast('Agen Berhasil DiHapus','success');
        return redirect('agen/index');
    }
}
