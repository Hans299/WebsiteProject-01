<?php

namespace App\Http\Controllers;

// Menggunakan nama model persis seperti yang Anda kembangkan.
use App\Models\beritaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
// PERBAIKAN: Memperbaiki kesalahan penulisan 'illuminate' menjadi 'Illuminate'.
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
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            // PERBAIKAN LOGIKA: Jika validasi gagal, kembalikan ke form create, bukan ke halaman daftar.
            // Asumsi route untuk method create() Anda bernama 'berita.create'.
            return redirect()->route('berita.create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $imageName = 'img-' . time() . '.' . $request->file('gambar')->extension();
        $request->file('gambar')->storeAs('public/img', $imageName);

        // Menggunakan model 'beritaModel' untuk menyimpan data.
        beritaModel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $imageName,
        ]);

        // Mengarahkan ke halaman daftar (index) setelah berhasil.
        // Asumsi route untuk method index() Anda bernama 'berita.index' atau 'berita'.
        return redirect()->route('berita')->with('success', 'Berita berhasil ditambahkan!');
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
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
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