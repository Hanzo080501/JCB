<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('users.home', [
            'title' => 'Home',
            'kegiatan' => $kegiatan
        ]);
    }
}
