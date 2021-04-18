<?php

namespace App\Http\Controllers\Transaksi;

use App\Agen;
use App\Paket;
use App\Transaksi;
use App\Mail\NotifTransaksi;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    public function index()
    {
        $agens = Agen::all();
        $pakets = Paket::all();
        $transaksis = Transaksi::all();
        return view('transaksi.index', compact('agens','pakets','transaksis'));
    }
    
    public function create()
    {
        $pakets = Paket::all();
        return view('transaksi.create', compact('pakets'));
    }

    public function store(Request $request)
    {
        $transaksis = Transaksi::create([
            'paket_id'  => $request->paket_id,
            'pemesan'   => $request->pemesan,
            'no_telp'   => $request->no_telp,
            'email'     => $request->email,
            'jumlah'    => $request->jumlah,
            
        ]);
        
        Nexmo::message()->send([
            'to'   => $request->no_telp,
            'from' => 'Dimas Setiawan',
            'text' => 'Tugas Send SMS XII RPL Dimas Setiawan',
        ]);
        
        // \Mail::raw('Terima kasih' .$transaksis->pemesan, function($message) use($transaksis) {
        //     $message->to($transaksis->email, $transaksi->pemesan);
        //     $message->subject('Terima Kasih Sudah Memesan');
        // });

        \Mail::to($transaksis->email)->send(new NotifTransaksi);

        $transaksis->save();
        toast('Transaksi Berhasil Ditambahkan','success');
        return redirect('transaksi/index');
    }
    
    public function edit($id)
    {
        $paket = Paket::all();
        $agen = Agen::all();
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('paket','transaksi'));
    }

    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->all());
        toast('Transaksi Berhasil Diperbarui','success');
        return redirect('transaksi/index');
    }
    
    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete($transaksi->all());
        toast('Transaksi Berhasil Dihapus','success');
        return redirect('transaksi/index');
    }
}
