<?php

namespace App\Http\Controllers;
// PERBAIKAN: Memperbaiki kesalahan penulisan 'illuminate' menjadi 'Illuminate'.
// Menggunakan nama model persis seperti yang Anda kembangkan.
use App\Models\beritaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Storage;

class beritaController extends Controller
{
    /**
     * Display a listing of the resource.
     * SESUAI PERMINTAAN: Method ini akan menampilkan data ke view 'cms.berita.createBerita'.
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->role_id == 3) {
            abort(403, 'Anda tidak dapat mengakses halaman ini');
        }
        $beritaData = beritaModel::latest()->get();
        // Mengirim data daftar berita ke view yang Anda tentukan untuk halaman index.
        return view('cms.berita.createBerita', ['berita' => $beritaData]);
    }

    /**
     * Show the form for creating a new resource.
     * SESUAI PERMINTAAN: Method ini akan menampilkan form tambah data dari view 'content.content_create'.
     */
    public function create()
    {
        if (Auth::check() && Auth::user()->role_id == 3) {
            abort(403, 'Anda tidak dapat mengakses halaman ini');
        }
        // Mengarahkan ke view yang Anda tentukan untuk form create.
        return view('content.content_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //     // 1. Menangani unggahan file gambar.
    //     // Membuat nama file yang unik berdasarkan waktu untuk menghindari duplikasi.
    //     $imageName = 'img-' . time() . '.' . $request->file('gambar')->extension();
        
    //     // Menyimpan file ke dalam direktori 'storage/app/public/img'.
    //     $request->file('gambar')->storePubliclyAs('img', $imageName);

    //     // 2. Membuat record baru di database menggunakan data dari request.
    //     beritaModel::create([
    //         'judul' => $request->judul,
    //         'isi' => $request->isi,
    //         'gambar' => $imageName, // Menyimpan nama file ke database.
    //     ]);

    //     // 3. Mengarahkan kembali ke halaman daftar berita dengan pesan sukses.
    //     // Asumsi nama route untuk halaman daftar berita adalah 'berita.index'.
    //     return redirect()->route('berita')->with('success', 'Berita berhasil ditambahkan!');
    if ($request->hasFile('gambar')) {
            
            // Mengambil object file dari request
            $gambar = $request->file('gambar');
            
            // Membuat nama file baru yang unik
            // Format: nama-unik-berdasarkan-waktu.ekstensi
            $namaGambar = 'img-' . time() . '.' . $gambar->getClientOriginalExtension();

            // Menentukan folder tujuan di dalam direktori 'public'
            $tujuanFolder = 'uploads/img';

            // 3. Memindahkan file dari lokasi sementara ke folder tujuan
            $gambar->move($tujuanFolder, $namaGambar);

            // 4. Menyimpan data ke database
            beritaModel::create([
                'judul' => $request->judul,
                  'isi' => $request->isi,
                'gambar' => $namaGambar, // Simpan nama file yang baru
            ]);

            // 5. Mengarahkan kembali dengan pesan sukses
             return redirect()->route('berita')->with('success', 'Berita berhasil ditambahkan!');

        }

        // Jika tidak ada file, kembali dengan error
        return back()->with('error', 'Gagal mengunggah gambar.');
     }

    /**
     * Display the specified resource.
     * SESUAI PERMINTAAN: Method ini tidak Anda gunakan, jadi tetap dikosongkan.
     */
    public function show(string $id)
    {
        //
    }
    /**
 * Update status berita (publish/pending).
 */
    public function updateStatus(Request $request, string $id)
    {
        // Validasi input
        $request->validate([
            'status' => 'required|in:publish,pending',
        ]);

        // Cari berita
        $berita = beritaModel::findOrFail($id);

        // Update statusnya
        $berita->status = $request->status;

        // Simpan ke database
        $berita->save();

        // Kembalikan ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Status berita berhasil diperbarui!');
    }

    /**
     * Show the form for editing the specified resource.
     * SESUAI PERMINTAAN: Method ini menampilkan form edit dari view 'cms.berita.editBerita'.
     */
    public function edit(string $id)
    {
        $berita = beritaModel::findOrFail($id);
        // Mengarahkan ke view yang Anda tentukan untuk form edit.
        return view('cms.berita.editBerita', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $berita = beritaModel::findOrFail($id);

        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            Storage::delete('public/img/' . $berita->gambar);

            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->storeAs('public/img', $imageName);
            
            $validatedData['gambar'] = $imageName;
        }

        // PERBAIKAN KRUSIAL: Menambahkan perintah untuk menyimpan perubahan ke database.
        $berita->update($validatedData);

        // PERBAIKAN KRUSIAL: Menambahkan redirect setelah berhasil update.
        return redirect()->route('berita')->with('success', 'Berita berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // PERBAIKAN: Mengisi method destroy yang sebelumnya kosong.
        $berita = beritaModel::findOrFail($id);
        Storage::delete('public/img/' . $berita->gambar);
        $berita->delete();

        return redirect()->route('berita')->with('success', 'Berita berhasil dihapus!');
    }
}