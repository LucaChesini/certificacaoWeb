<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Filme;

class FilmeController extends Controller
{
    public function index()
    {
        return view('filme');
    }

    public function adicionar()
    {
        return view('adicionar');
    }

    public function create($request)
    {
        dd($request);
    }
}
