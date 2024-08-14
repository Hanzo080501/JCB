<?php

namespace App\Http\Controllers;

use App\Models\PeluangModel;
use App\Models\TopikModel;
use Illuminate\Http\Request;

class DetailCourseController extends Controller
{
    public function index($id)
    {
        $topik = TopikModel::all();
        $peluang = PeluangModel::findOrFail($id);
        $materiArray = explode("\n", $peluang->materi);
        return view('users.detailcourse', [
            'title' => 'Detail course',
            'topik' => $topik,
            'peluang' => $peluang,
            'materi' => $materiArray
        ]);
    }

    public function video($id)
    {
        $topik = TopikModel::all();
        $peluang = PeluangModel::findOrFail($id);
        return view('users.learningvideo', [
            'title' => 'Learning video',
            'topik' => $topik,
            'peluang' => $peluang
        ]);
    }
}
