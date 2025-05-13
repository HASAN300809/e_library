<?php

namespace App\Http\Controllers;

use App\Models\DetailManajemen;
use App\Models\Manajemen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ManajemenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Manajemen::with('detailmanajemen')->get();

        return view('admin.manajemen', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crudmanajemen.createdata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judulbuku' => 'required',
            'deskripsi' => 'required',
            'kodebuku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunterbit' => 'required|digits:4|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'judulbuku.required' => 'Judul buku harus diisi',
            'deskripsi.required' => 'Deskripsi buku harus diisi',
            'kodebuku.required' => 'Kode buku harus diisi',
            'penulis.required' => 'Penulis harus diisi',
            'penerbit.required' => 'Penerbit harus diisi',
            'tahunterbit.required' => 'Tahun terbit harus diisi',
            'tahunterbit.digits' => 'Tahun terbit harus terdiri dari 4 angka',
            'tahunterbit.integer' => 'Tahun terbit harus berupa angka',
            'image.image' => 'File yang diupload harus berupa gambar',
            'image.mimes' => 'Format gambar yang diizinkan adalah jpeg, png, jpg, dan gif',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB',
        ]);

        // upload image
        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        $manajemen = Manajemen::create([
            'judulbuku' => $request->judulbuku,
            'gambarbuku' => $image->hashName(),
            'deskripsi' => $request->deskripsi,
        ]);

        DetailManajemen::create([
            'manajemen_id' => $manajemen->id,
            'kodebuku' => $request->kodebuku,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahunterbit
        ]);

        return redirect()->route('manajemen.index')->with('success', 'Buku berhasil ditambahkan');
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
        $manajemen = Manajemen::with('detailmanajemen')->findOrFail($id);

        return view('admin.crudmanajemen.editdata', compact('manajemen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judulbuku' => 'required',
            'deskripsi' => 'required',
            'kodebuku' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunterbit' => 'required|digits:4|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // cari buku berdasarkan id
        $manajemen = Manajemen::findOrFail($id);

        // cek jika ada gambar baru yang diupload
        if ($request->hasFile('image')) {
            
            // hapus gambar lama
            Storage::delete('public/products/' . $manajemen->gambarbuku);

            // upload gambar baru
            $image = $request->file('image');
            $image->storeAs('public/products', $image->hashName());

            // update data buku
            $manajemen->update([
                'judulbuku' => $request->judulbuku,
                'gambarbuku' => $image->hashName(),
                'deskripsi' => $request->deskripsi,
            ]);
        } else {
            // update data buku tanpa mengubah gambar
            $manajemen->update([
                'judulbuku' => $request->judulbuku,
                'deskripsi' => $request->deskripsi,
            ]);
        }

        // update data detail buku
        DetailManajemen::where('manajemen_id', $id)->update([
            'kodebuku' => $request->kodebuku,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahunterbit
        ]);

        return redirect()->route('manajemen.index')->with('success', 'Buku berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // cari buku berdasarkan id
        $manajemen = Manajemen::findOrFail($id);

        // hapus image dari storage atau dari vscode
        Storage::delete('public/products/' . $manajemen->gambarbuku);

        // hapus data buku dari tabel manajemen
        $manajemen->delete();

        return redirect()->route('manajemen.index')->with('success', 'Buku berhasil dihapus!');
    }
}
