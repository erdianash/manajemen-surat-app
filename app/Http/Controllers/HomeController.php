<?php

namespace App\Http\Controller;
use App\Models\AsingModel;
use App\Models\NpModel;
use App\Models\KawinModel;
use App\Models\KelahiranModel;
use App\Models\KematianModel;
use App\Models\Keterangan_BaikModel;
use App\Models\PindahModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asing = AsingModel::all()->count();
        $np = NpModel::all()->count();
        $kawin = KawinModel::all()->count();
        $kelahiran = KelahiranModel::all()->count();
        $kematian = KematianModel::all()->count();
        $keterangan_baik = Keterangan_BaikModel::all()->count();
        $pindah = PindahModel::all()->count();
     
        return view('pages.home', compact('np','asing','kawin','kelahiran','kematian','keterangan_baik','pindah'));

    }
    public function asing()
    {
        return view('/asing');
    }
    public function np()
    {
        return view('/np');
    }
    public function kawin()
    {
        return view('/kawin');
    }
    public function pindah()
    {
        return view('/pindah');
    }
    public function kelahiran()
    {
        return view('/kelahiran');
    }
    public function kematian()
    {
        return view('/kematian');
    }
    public function keterangan_baik()
    {
        return view('/keterangan_baik');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
