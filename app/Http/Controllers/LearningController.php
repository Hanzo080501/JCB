<?php

namespace App\Http\Controllers;

use App\Models\PeluangModel;
use App\Models\TopikModel;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function index(Request $request, $topikId = null)
    {
        $topik = TopikModel::all();
        $selectedTopik = null; // Inisialisasi default

        if ($topikId) {
            $selectedTopik = TopikModel::find($topikId);
            $peluang = PeluangModel::where('topik_id', $topikId)
                ->filter($request->only('search'))
                ->orderBy('id', 'desc')
                ->paginate(8);
        } else {
            $peluang = PeluangModel::filter($request->only('search'))
                ->orderBy('id', 'desc')
                ->paginate(8);
        }

        return view('users.learningalltopik', [
            'title' => 'All Topik',
            'topik' => $topik,
            'peluang' => $peluang,
            'selectedTopikId' => $selectedTopik
        ]);
    }
}
