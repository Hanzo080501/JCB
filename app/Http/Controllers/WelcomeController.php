<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('welcome', [
            'title' => 'Welcome',
            'kegiatan' => $kegiatan
        ]);
    }
}
