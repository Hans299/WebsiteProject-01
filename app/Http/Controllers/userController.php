<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;


class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->role_id == 3) {
            abort(403, 'Anda tidak dapat mengakses halaman ini');
        }
        $UserData = User::latest()->get();
        return view('cms.user.createUser',['userData'=>$UserData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.user.addUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // Langkah 1: Validasi input dari form Super Admin
        $validator = Validator::make($request->all(), [
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users,email',
            'password'  => [
                'required',
                'confirmed', // Tetap berguna agar admin tidak salah ketik password
                Password::min(8)->mixedCase()->numbers(),
            ],
            'role_id'   => 'required|integer|exists:roles,id',
        ]);
        //Langkah 2: Jika validasi gagal, kembalikan ke form 'create'
        if ($validator->fails()) {
            return redirect()->route('supervisor.user.create') // Redirect ke form tambah user
                             ->withErrors($validator)
                             ->withInput();
        }
        //Langkah 3: Jika validasi berhasil, buat pengguna baru di database
        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password), // Password di-hash demi keamanan
            'role_id'   => $request->role_id,
        ]);
        // Langkah 4: Redirect KEMBALI ke halaman daftar pengguna dengan pesan sukses
        // Ini adalah alur kerja yang lebih baik untuk CMS.
        return redirect()->route('supervisor.user')
                         ->with('success', 'Akun pengguna baru berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Temukan data user, simpan ke variabel bernama '$user'
        $user = User::findOrFail($id);
        
        // Kirim data ke view 'editUser' dengan nama variabel 'user'
        return view('cms.user.editUser', compact('user'));
    }

    /**
     * LENGKAP: Memperbarui data pengguna di database.
     */
    public function update(Request $request, string $id)
    {
        // Langkah 1: Validasi input dari form
        $request->validate([
            'name'      => 'required|string|max:255',
            // Aturan 'unique' harus mengabaikan email dari user yang sedang kita edit
            'email'     => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($id)],
            // Password tidak wajib diisi (nullable). Hanya divalidasi jika diisi.
            'password'  => ['nullable', 'confirmed', Password::min(8)],
        ]);

        // Langkah 2: Temukan user yang akan diupdate
        $user = User::findOrFail($id);

        // Langkah 3: Siapkan data yang akan di-update
        $dataToUpdate = [
            'name'  => $request->name,
            'email' => $request->email,
        ];

        // Langkah 4: Cek apakah admin mengisi password baru
        if ($request->filled('password')) {
            // Jika diisi, tambahkan password yang sudah di-hash ke data update
            $dataToUpdate['password'] = Hash::make($request->password);
        }

        // Langkah 5: Update data user di database
        $user->update($dataToUpdate);

        // Langkah 6: Redirect kembali ke halaman profil/daftar user dengan pesan sukses
        // Asumsi Anda punya halaman untuk menampilkan profil user
        // Jika tidak, Anda bisa redirect ke halaman daftar user: route('supervisor.user.index')
        return redirect()->route('supervisor.user.profile') // Ganti dengan nama route halaman profil Anda
                         ->with('success', 'Profil berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        // // Langkah 2 (Keamanan Tambahan): Jangan biarkan pengguna menghapus akunnya sendiri
        // if (auth()->user()->id == $user->id) {
        //     return redirect()->route('supervisor.user') // Kembali ke halaman daftar user
        //                      ->with('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
        // }

        // Langkah 3: Hapus pengguna dari database
        $user->delete();

        // Langkah 4: Redirect kembali ke halaman daftar user dengan pesan sukses
        return redirect()->route('supervisor.user') // Kembali ke halaman daftar user
                         ->with('success', 'Akun pengguna berhasil dihapus!');
    }
}
