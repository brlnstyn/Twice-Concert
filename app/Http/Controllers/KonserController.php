<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konser;

class KonserController extends Controller
{
    public function index()
    {
        $konser = Konser::all();
        return view('setting-konser.index', [
            'konser' => $konser
        ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Konser::create($input);
        return redirect()->route('setting-konser.index')->with('success', 'Data konser berhasil dibuat!');
    }

    public function edit($id)
    {
        $konser = Konser::find($id);
        return view('setting-konser.edit', [
            'konser' => $konser
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $konser = Konser::find($id);
        $input = $request->all();
        $konser->update($input);
        // dd($tes);
        return redirect()->route('setting-konser.index')->with('success', 'Data konser berhasil diedit!');
    }

    public function destroy($id, Konser $konser)
    {
        if ($konser->tgl_konser >= date('Y-m-d')) {
            Konser::where('id', $id)->delete();
            return redirect()->route('setting-konser.index')->with('success', 'Data konser berhasil dihapus!');
        } else {
            Konser::where('id', $id)->delete();
            return redirect()->route('setting-konser.index')->with('success', 'Data konser berhasil dihapus!');
        }
    }
}
