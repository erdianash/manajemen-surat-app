<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class RekapitulasiController extends Controller
{
    public function showRowCounts()
    {
        $rowCounts = [
            'asing' => DB::table('asing')->count(),
            'np' => DB::table('np')->count(),
            'kawin' => DB::table('kawin')->count(),
            'kelahiran' => DB::table('kelahiran')->count(),
            'kematian' => DB::table('kematian')->count(),
            'pindah' => DB::table('pindah')->count(),
            'keterangan_baik' => DB::table('keterangan_baik')->count(),

        ];
        //dd($rowCounts);
        $pdf = pdf::loadview('rekapitulasi',compact('rowCounts'));
        return $pdf->stream('rekapitulasi_pdf');
        
    }
}
