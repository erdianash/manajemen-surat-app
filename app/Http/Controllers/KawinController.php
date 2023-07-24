<?php

namespace App\Http\Controllers;

use App\Models\KawinModel;
use Illuminate\Http\Request;


class KawinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KawinModel::all();
        // return $data;
        return view('pages.kawin', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new KawinModel;
        return view('pages.create.add_kawin', compact('data'));
        // return view('pages.create.test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'Required',
            'nama_suami' => 'Required',
            'alamat_suami' => 'Required',
            'tanggal_lahir_suami' => 'Required',
            'nama_istri' => 'Required',
            'alamat_istri' => 'Required',
            'tanggal_lahir_istri' => 'Required',
            'tanggal_menikah' => 'Required',
            'status_surat' => 'Required',
        ]);

        $data = new KawinModel();
        $data->tanggal = $request->tanggal;
        $data->nama_suami = $request->nama_suami;
        $data->alamat_suami = $request->alamat_suami;
        $data->tanggal_lahir_suami = $request->tanggal_lahir_suami;
        $data->nama_istri = $request->nama_istri;
        $data->alamat_istri = $request->alamat_istri;
        $data->tanggal_lahir_istri = $request->tanggal_lahir_istri;
        $data->tanggal_menikah = $request->tanggal_menikah;
        $data->status_surat = $request->status_surat;
        $data->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
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
        $data = KawinModel::find($id);
        return view('pages.edit.edit_kawin', compact('data'));
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
   
        
        $data = KawinModel::find($id);
        $data->tanggal = $request->tanggal;
        $data->nama_suami = $request->nama_suami;
        $data->alamat_suami = $request->alamat_suami;
        $data->tanggal_lahir_suami = $request->tanggal_lahir_suami;
        $data->nama_istri = $request->nama_istri;
        $data->tanggal_lahir_istri = $request->tanggal_lahir_istri;
        $data->tanggal_menikah = $request->tanggal_menikah;
        $data->status_surat = $request->status_surat;
        $data->save();
        return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = KawinModel::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
