<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;

class TiketController extends Controller
{
    public function index()
    {
        $formulir = Formulir::latest()->paginate(1);
        // dd($formulir);
        return view('tiket.index', [
            'formulir' => $formulir,
        ]);
    }
}
