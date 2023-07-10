<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Alternatif;
use App\Http\Controllers\Controller;



class NormalisasiController extends Controller
{
    public function calculateSaw()
    {
        $alternatives = Alternatif::all();
        $weights = [0.2,0.25,0.2,0.125,0.125]; // Bobot kriteria

        // $minValues = $alternatives->min(); // Mendapatkan nilai minimum dari setiap kolom
        // $maxValues = $alternatives->max(); // Mendapatkan nilai maksimum dari setiap kolom

        $results = [];
        $nomor = 0;

        foreach ($alternatives as $alternative) {
            $harga = $alternative->harga;
            $kualitas = $alternative->kualitas;
            $kemasan = $alternative->kemasan;
            $daya_tahan = $alternative->daya_tahan;
            $kemudahan_pengiriman = $alternative->kemudahan_pengiriman;
            // $keawetan = $alternative->keawetan;

            // Normalisasi setiap nilai kriteria
            $norm_harga = 10000 / $harga;
            $norm_kualitas =  $kualitas / 85 ;
            $norm_kemasan = $kemasan / 85;
            $norm_daya_tahan = $daya_tahan / 85;
            $norm_kemudahan_pengiriman = $kemudahan_pengiriman/ 90;
            // $norm_keawetan = ($keawetan - $minValues->keawetan) / ($maxValues->keawetan - $minValues->keawetan);


            // Hitung hasil SAW
            $hasil = 
            ($weights[0] * $norm_harga)+ 
            ($weights[1] * $norm_kualitas)  + 
            ($weights[2] * $norm_kemasan)+ 
            ($weights[3] * $norm_daya_tahan) + 
            ($weights[4] * $norm_kemudahan_pengiriman);

            $nomor++;

            $nama_alt = $alternative->nama;
            $results[] = ['nomor' => $nomor, 
            'nama_alt' => $nama_alt, 
            'harga' => $norm_harga,
            'kualitas' => $norm_kualitas,
            'kemasan' => $norm_kemasan, 
            'daya_tahan' => $norm_daya_tahan,
            'kemudahan_pengiriman' => $norm_kemudahan_pengiriman,
            'hasil'=>$hasil];
            arsort($results);
        }



        return view('dashboard.hasil.hasil', ['results' => collect($results)->sortByDesc('hasil')->values()->all()]);
    }
}
