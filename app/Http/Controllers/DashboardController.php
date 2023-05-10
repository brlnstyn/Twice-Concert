<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;

class DashboardController extends Controller
{
    public function index()
    {
        $formulir = Formulir::all();
        return view('dashboard.index', [
            'formulir' => $formulir
        ]);
    }
}
