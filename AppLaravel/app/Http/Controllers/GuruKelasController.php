<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class GuruKelasController extends Controller
{
    //

    public function index()
    {
        $kelas = Kelas::latest()->get();
        return view('guru.kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('guru.kelas.create');
    }

    public function store(Request $request)
    {
        Kelas::create($request->all());
        return redirect()->route('guru-index.kelas');
    }
}
