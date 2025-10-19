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
    // Pastikan nama view sudah benar sesuai nama file Anda
        return view('content.content_landing', [
            'beritaTrending' => $beritaTrending
        ]);
    }
    public function show($id) // 1. Menerima $id dari URL
    {
         // 1. Menerima $id dari URL
        // 2. Ambil SATU berita utama berdasarkan id
        $berita = beritaModel::where('id', $id)
                             ->where('status', 'publish')
                             ->firstOrFail(); // Akan 404 jika tidak ketemu

        // 3. Ambil 5 berita trending untuk list di bawah
        $beritaTrending = beritaModel::where('status', 'publish')
                                 ->where('id', '!=', $berita->id) // Agar berita utama tidak muncul lagi
                                 ->latest()
                                 ->take(5)
                                 ->get();

        // 4. Kirim KEDUA data ke view detail Anda
        // Ganti 'berita.show' jika nama file view Anda berbeda
        
        return view('content.content_index', [
            'berita' => $berita,                // Data artikel utama
            'beritaTrending' => $beritaTrending // Data untuk @foreach di bawah
        ]);
    }
    
}