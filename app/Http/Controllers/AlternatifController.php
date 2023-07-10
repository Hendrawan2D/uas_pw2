<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
// use App\Models\kriterias;
use Illuminate\Routing\Controller;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index()
    {
        //
        $alternatif = Alternatif::all();
        // dd($alternatif);
        return view('dashboard.alternatif.index', compact('alternatif'));
    }

    public function create(){
        return view('dashboard.alternatif.add');
    }

    public function store(Request $request){
        // dd($request->all());
        // dd($request->except(['_token','submit']));
         $request->validate([
            "nama" => 'required',
            "deskripsi" => 'required',
            "harga" => 'required',
            "kualitas" => 'required',
            "kemasan" => 'required',
            "daya_tahan" => 'required',
            "kemudahan_pengiriman" => 'required'
        ]);
        // dd($request->all());
        $alternatif = new Alternatif;
        $alternatif->nama = $request->nama;
        $alternatif->deskripsi = $request->deskripsi;
        $alternatif->harga = $request->harga;
        $alternatif->kualitas = $request->kualitas;
        $alternatif->kemasan = $request->kemasan;
        $alternatif->daya_tahan = $request->daya_tahan;
        $alternatif->kemudahan_pengiriman = $request->kemudahan_pengiriman;
        $alternatif->save();

        return redirect('/alternatif');
    }

    public function delete($id)
    {
        $alternatif = Alternatif::find($id);
        $alternatif->delete();
        return redirect('/alternatif')->with('success', 'berhasil dihapus');
    }

    public function edit($id)
    {
        $alternatif = Alternatif::find($id);
        // $alternatif->update();
        // dd($alternatif);
        return view('dashboard.alternatif.edit', compact(['alternatif']));
    }

    public function update($id, Request $request)
    {
       // dd($request->all());
        // dd($request->except(['_token','submit']));
        $request->validate([
            "nama" => 'required|min:3|max:50',
            "deskripsi" => 'required',
            "harga" => 'required',
            "kualitas" => 'required',
            "kemasan" => 'required',
            "daya_tahan" => 'required',
            "kemudahan_pengiriman" => 'required'
        ]);
        $alternatif = Alternatif::find($id);
        $alternatif->nama = $request->nama;
        $alternatif->deskripsi = $request->deskripsi;
        $alternatif->harga = $request->harga;
        $alternatif->kualitas = $request->kualitas;
        $alternatif->kemasan = $request->kemasan;
        $alternatif->daya_tahan = $request->daya_tahan;
        $alternatif->kemudahan_pengiriman = $request->kemudahan_pengiriman;
        $alternatif->save();

        return redirect('/alternatif');
    }

}
