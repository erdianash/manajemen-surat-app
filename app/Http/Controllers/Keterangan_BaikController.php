<?php

namespace App\Http\Controllers;

use App\Models\Keterangan_BaikModel;
use Illuminate\Http\Request;


class Keterangan_BaikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Keterangan_BaikModel::all();
        // return $data;
        return view('pages.keterangan_baik', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Keterangan_BaikModel;
        return view('pages.create.add_keterangan_baik', compact('data'));
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
            'nama' => 'Required',
            'tempat_tanggal_lahir' => 'Required',
            'alamat' => 'Required',
            'keperluan' => 'Required',
            'status_surat' => 'Required',
        ]);

        $data = new Keterangan_BaikModel();
        $data->tanggal = $request->tanggal;
        $data->nama = $request->nama;
        $data->tempat_tanggal_lahir = $request->tempat_tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->keperluan = $request->keperluan;
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
        $data = Keterangan_BaikModel::find($id);
        return view('pages.edit.edit_keterangan_baik', compact('data'));
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
   
        
        $data = Keterangan_BaikModel::find($id);
        $data->tanggal = $request->tanggal;
        $data->nama = $request->nama;
        $data->tempat_tanggal_lahir = $request->tempat_tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->keperluan = $request->keperluan;
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
        $data = Keterangan_BaikModel::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
