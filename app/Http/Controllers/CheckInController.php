<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;
use Illuminate\Support\Facades\DB;

class CheckInController extends Controller
{
    public function index()
    {
        $formulir = Formulir::all();
        return view('check-in.index', [
            'formulir' => $formulir
        ]);
    }

    public function updateStatus($id)
    {
        $formulir   = Formulir::find($id);
        // dd($formulir);
        if ($formulir->status == "belum") {
            $formulir->update(['status' => "sudah"]);
            return redirect()->route('check-in.index')->with('success', 'Berhasil Check in');
        } else {
            return redirect()->route('check-in.index')->with('error', 'Something went wrong!');
        }
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $formulir = DB::table('formulir')
            ->where('id', 'like', "%" . $cari . "%")
            ->paginate();
        return view('check-in.index', [
            'formulir' => $formulir
        ]);
    }
}
