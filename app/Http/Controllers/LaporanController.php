<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;
use Illuminate\Support\Facades\DB;
use \PDF;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }

    public function getLaporan(Request $request)
    {
        // dd($request);
        $from = $request->from . ' ' . '00:00:00';
        $to = $request->to . ' ' . '23:59:59';
        $status = $request->status;

        $formulir = DB::table('formulir')
            ->whereBetween('tgl_pemesanan', [$from, $to])
            ->where('status', $status)
            ->get();
        // dd($formulir);
        return view('laporan.index', [
            'formulir' => $formulir,
            'from' => $from,
            'to' => $to,
            'status' => $status
        ]);
    }

    public function cetakLaporan($from, $to, $status)
    {
        $formulir = Formulir::whereBetween('tgl_pemesanan', [$from, $to])->where('status', $status)->orderBy('tgl_pemesanan', 'DESC')->get();
        $pdf = PDF::loadView('laporan.cetak', [
            'formulir' => $formulir,
            'from' => $from,
            'to' => $to,
            'status' => $status
        ])->setPaper('a4', 'landscape');;
        return $pdf->download('laporan-konser-twice.pdf');
    }
}
