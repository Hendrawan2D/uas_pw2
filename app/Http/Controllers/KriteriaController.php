<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
// use App\Models\kriterias;
use Illuminate\Routing\Controller;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;


class KriteriaController extends Controller
{
    public function index()
    {
        //
        $kriteria = Kriteria::all();
        // dd($kriteri);
        return view('dashboard.kriteria.index', compact('kriteria'));
    }
    public function create(){
        return view('dashboard.kriteria.add');
    }
    public function store(Request $request){
        // dd($request->all());
        // dd($request->except(['_token','submit']));
         $request->validate([
            "nama" => 'required|min:3|max:50',
            "bobot" => 'required',
            "label" => 'required'
        ]);


        $kriteria = new kriteria;
        $kriteria->nama = $request->nama;
        $kriteria->bobot = $request->bobot;
        $kriteria->label = $request->label;
        $kriteria->save();

        return redirect('/kriteria');
    }
    public function delete($id)
    {
        $kriteria = kriteria::find($id);
        $kriteria->delete();
        return redirect('/kriteria')->with('success', 'berhasil dihapus');
    }
    public function edit($id)
    {
        $kriteria = kriteria::find($id);
        // $kriteria->update();
        // dd($kriteria);
        return view('dashboard.kriteria.edit', compact(['kriteria']));
    }
    public function update($id, Request $request)
    {
       // dd($request->all());
        // dd($request->except(['_token','submit']));
        $request->validate([
            "nama" => 'required|min:3|max:50',
            "bobot" => 'required',
            "label" => 'required'
        ]);
        $kriteria = kriteria::find($id);
        $kriteria->nama = $request->nama;
        $kriteria->bobot = $request->bobot;
        $kriteria->label = $request->label;
        $kriteria->save();

        return redirect('/kriteria');
    }

}
