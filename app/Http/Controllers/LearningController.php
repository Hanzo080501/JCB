<?php

namespace App\Http\Controllers;

use App\Models\PeluangModel;
use App\Models\TopikModel;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function index($topikId = null)
    {
        $topik = TopikModel::all();
        $selectedTopik = null; // Inisialisasi default

        if ($topikId) {
            $selectedTopik = TopikModel::find($topikId);
            $peluang = PeluangModel::where('topik_id', $topikId)->orderBy('id', 'desc')->paginate(10);
        } else {
            $peluang = PeluangModel::orderBy('id', 'desc')->paginate(10);
        }

        return view('users.learningalltopik', [
            'title' => 'Learning',
            'topik' => $topik,
            'peluang' => $peluang,
            'selectedTopikId' => $selectedTopik
        ]);
    }
}
