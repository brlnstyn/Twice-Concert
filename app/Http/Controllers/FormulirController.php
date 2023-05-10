<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;
use App\Models\Konser;

class FormulirController extends Controller
{
    public function index()
    {
        $konser = Konser::all();
        // dd($konser);
        return view('formulir.index', [
            'konser' => $konser
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $input = $request->all();
        // dd($input);
        if ($image = $request->file('ktp')) {
            // dd($image->getClientOriginalName());
            $destinationPath = 'storage/image';
            $fileName = date('YmdHis') . "." . $image->getClientOriginalName();
            $image->move($destinationPath, $fileName);
            $input['ktp'] = "$fileName";
        }
        Formulir::create($input);
        return redirect('/tiket');
    }

    public function edit($id)
    {
        // dd($id);
        $formulir = Formulir::find($id);
        $konser = Konser::all();
        // dd($formulir);
        return view('formulir.edit', [
            'formulir' => $formulir,
            'konser' => $konser
        ]);
    }

    public function update(Request $request, Formulir $formulir)
    {
        $input = $request->all();
        $formulir->update($input);
        return redirect('dashboard')->with('success', 'Data berhasil diedit!');
    }

    public function destroy($id)
    {
        Formulir::where('id', $id)->delete();
        // dd($tes);
        return redirect('dashboard')->with('success', 'Data berhasil dihapus!');
    }
}
