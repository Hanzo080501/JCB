<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeluangStoreRequest;
use App\Http\Requests\PeluangUpadateRequest;
use App\Models\PeluangModel;
use App\Models\TopikModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PeluangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topik = TopikModel::all();
        $peluang = PeluangModel::orderBy('id', 'desc')->paginate(10);
        return view('admin.table.learningpeluang.index', [
            'title' => 'Peluang',
            'topik' => $topik,
            'peluang' => $peluang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $topik = TopikModel::all();
        return view('admin.table.learningpeluang.create', [
            'title' => 'Peluang',
            'topik' => $topik
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PeluangStoreRequest $request)
    {
        $validated = $request->validated();

        // Buat instance baru dari model PeluangModel
        $peluang = new PeluangModel();

        // Mengisi data model
        $peluang->title = $validated['title'];
        $peluang->slug = Str::slug($validated['title']);
        $peluang->materi = $validated['materi'];
        $peluang->isi = $validated['isi'];
        $peluang->topik_id = $validated['topik_id'];
        $peluang->deskripsi = $validated['deskripsi'];

        // Penanganan file image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/peluang/images/', $fileName);
            $peluang->image = $fileName;
        }

        // Penanganan file
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/peluang/files/', $fileName);
            $peluang->file = $fileName;
        }

        // Penanganan video
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $fileName = time() . '.' . uniqid() . '.' . $video->getClientOriginalExtension();
            $video->storeAs('public/peluang/videos/', $fileName);
            $peluang->video = $fileName;
        }

        // Simpan data ke database
        $peluang->save();

        return redirect()->route('peluang.index')->with('success', 'Data Berhasil ditambahkan');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peluang = PeluangModel::find($id);
        // dd($peluang->published_by);
        $materiArray = explode("\n", $peluang->materi);
        return view('admin.table.learningpeluang.show', [
            'title' => 'Peluang',
            // 'topik' => $peluang
            'peluang' => $peluang,
            'materi' => $materiArray
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $topik = TopikModel::all();
        $peluang = PeluangModel::find($id);
        return view('admin.table.learningpeluang.edit', [
            'title' => 'Peluang',
            'peluang' => $peluang,
            'topik' => $topik
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PeluangUpadateRequest $request, string $id)
    {
        $peluang = PeluangModel::findOrFail($id);
        $validated = $request->validated();

        // Update data model
        $peluang->title = $validated['title'];
        $peluang->slug = Str::slug($validated['title']);
        $peluang->materi = $validated['materi'];
        $peluang->isi = $validated['isi'];
        $peluang->deskripsi = $validated['deskripsi'];
        $peluang->topik_id = $validated['topik_id'];

        // Penanganan file image
        if ($request->hasFile('image')) {
            // Hapus file lama jika ada
            if ($peluang->image) {
                Storage::disk('public')->delete('peluang/images/' . $peluang->image);
            }

            // Simpan file baru
            $image = $request->file('image');
            $fileName = time() . '.' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/peluang/images/', $fileName);
            $peluang->image = $fileName;
        }

        // Penanganan file
        if ($request->hasFile('file')) {
            // Hapus file lama jika ada
            if ($peluang->file) {
                Storage::disk('public')->delete('peluang/files/' . $peluang->file);
            }

            // Simpan file baru
            $file = $request->file('file');
            $fileName = time() . '.' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/peluang/files/', $fileName);
            $peluang->file = $fileName;
        }

        // Penanganan video
        if ($request->hasFile('video')) {
            // Hapus video lama jika ada
            if ($peluang->video) {
                Storage::disk('public')->delete('peluang/videos/' . $peluang->video);
            }

            // Simpan video baru
            $video = $request->file('video');
            $fileName = time() . '.' . uniqid() . '.' . $video->getClientOriginalExtension();
            $video->storeAs('public/peluang/videos/', $fileName);
            $peluang->video = $fileName;
        }

        // Simpan perubahan model
        $peluang->save();

        return redirect()->route('peluang.index')->with('success', 'Data Berhasil Diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $peluang = PeluangModel::find($id);

        if (!$peluang) {
            return redirect()->route('peluang.index')->with('error', 'Peluang tidak ditemukan.');
        }

        if ($peluang->image) {
            Storage::disk('public')->delete('peluang/images/' . $peluang->image);
        }

        if ($peluang->file) {
            Storage::disk('public')->delete('peluang/files/' . $peluang->file);
        }

        if ($peluang->video) {
            Storage::disk('public')->delete('peluang/videos/' . $peluang->video);
        }

        $peluang->delete();

        return redirect()->route('peluang.index')->with('success', 'Peluang berhasil dihapus.');
    }
}
