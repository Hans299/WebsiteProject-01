<?php

namespace App\Http\Controllers;

use App\Models\beritaModel;
use Illuminate\Http\Request;

class landingBeritaController extends Controller
{
    public function index()
    {
        // Ambil berita yang statusnya 'publish'
        $beritaTrending = beritaModel::where('status', 'publish')
                                 ->latest()
                                 ->take(5)
                                 ->get();

        // ==========================================================
        // INI BAGIAN PALING PENTING: HENTIKAN DAN TAMPILKAN ISINYA
        // dd($beritaTrending);
        // ==========================================================

        // Kode di bawah ini tidak akan dijalankan sementara
    //     $beritaTrending = [
    //     (object)['judul' => 'Ini Judul Berita Palsu 1', 'gambar' => 'nama_gambar1.jpg'],
    //     (object)['judul' => 'Ini Judul Berita Palsu 2', 'gambar' => 'nama_gambar2.jpg'],
    // ];

    // Pastikan nama view sudah benar sesuai nama file Anda
        return view('content.content_landing', [
            'beritaTrending' => $beritaTrending
        ]);
    }
}