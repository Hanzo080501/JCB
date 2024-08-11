<?php

namespace App\Http\Controllers;

use App\Http\Requests\KegiatanStoreRequest;
use App\Http\Requests\KegiatanUpdateRequest;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Kegitancroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = Kegiatan::orderBy('id', 'desc')->paginate(10);
        return view('admin.table.kegiatan.index', [
            'title' => 'Kegiatan',
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.table.kegiatan.create', ['title' => 'Kegiatan']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KegiatanStoreRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/kegiatan/', $fileName);
            $validated['image'] = $fileName;
        } else {
            $validated['image'] = null;
        }

        Kegiatan::create($validated);

        // dd($validated);

        return redirect()->route('kegiatan.index')->with('success', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        return view('admin.table.kegiatan.show', ['title' => 'Kegiatan', 'kegiatan' => $kegiatan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('admin.table.kegiatan.edit', ['title' => 'Kegiatan', 'kegiatan' => $kegiatan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KegiatanUpdateRequest $Request, Kegiatan $kegiatan)
    {
        $validated = $Request->validated();

        if ($Request->hasFile('image')) {
            $oldImage = $kegiatan->image;
            Storage::delete('public/kegiatan/' . $oldImage);
            $image = $Request->file('image');
            $fileName = time() . '.' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/kegiatan/', $fileName);
            $validated['image'] = $fileName;
        } else {
            $validated['image'] = $kegiatan->image;
        }

        // dd($validated);
        $kegiatan->update($validated);

        return redirect()->route('kegiatan.index')->with('success', 'Data Berhasil perbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $oldImage = $kegiatan->image;
        Storage::delete('public/kegiatan/' . $oldImage);
        $kegiatan->delete();
        return redirect()->route('kegiatan.index')->with('success', 'Data Berhasil dihapus');
    }
}
