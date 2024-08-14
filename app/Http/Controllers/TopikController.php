<?php

namespace App\Http\Controllers;

use App\Http\Requests\TopikStoreRequest;
use App\Http\Requests\TopikUpdateRequest;
use App\Models\TopikModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TopikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $topik = TopikModel::orderBy('id', 'desc')->paginate(10);
        $topik = TopikModel::filter(request()->only('search'))->orderBy('id', 'desc')->paginate(10);
        return view('admin.table.learningtopik.index', [
            'title' => 'Topik',
            'topik' => $topik
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.table.learningtopik.create', ['title' => 'Topik']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TopikStoreRequest $request)
    {
        $topik = new TopikModel();
        $validated = $request->validated();
        $topik->title = $validated['title'];
        $topik->published_at = $validated['publish_at'];
        $topik->published_by = $validated['publish_by'];
        $topik->slug = Str::slug($validated['title']);
        $topik->save();
        // dd($validated);
        return redirect()->route('topik.index')->with('success', 'Topik baru ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $topik = TopikModel::find($id);
        return view('admin.table.learningtopik.show', [
            'title' => 'Topik',
            'topik' => $topik
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $topik = TopikModel::find($id);
        return view('admin.table.learningtopik.edit', [
            'title' => 'Topik',
            'topik' => $topik
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TopikUpdateRequest $request, string $id)
    {
        // dd($request->all());

        $validated = $request->validated();

        // dd($validated);

        $topik = TopikModel::findOrFail($id);
        $topik->title = $validated['title'];
        $topik->published_at = $validated['publish_at'];
        $topik->published_by = $validated['publish_by'];
        $topik->slug = Str::slug($validated['title']);

        $topik->save();

        return redirect()->route('topik.index')->with('success', 'Topik berhasil diperbarui');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $topik = TopikModel::find($id);
        $topik->delete();
        return redirect()->route('topik.index')->with('success', 'Topik Berhasil dihapus');
    }
}
