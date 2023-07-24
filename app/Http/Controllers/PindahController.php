<?php

namespace App\Http\Controllers;

use App\Models\PindahModel;
use Illuminate\Http\Request;


class PindahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PindahModel::all();
        // return $data;
        return view('pages.pindah', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new PindahModel;
        return view('pages.create.add_pindah', compact('data'));
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
            'jenis_kelamin' => 'Required',
            'alamat_asal' => 'Required',
            'alamat_tujuan' => 'Required',
            'alasan_pindah' => 'Required',
            'status_surat' => 'Required',
        ]);

        $data = new PindahModel();
        $data->tanggal = $request->tanggal;
        $data->nama = $request->nama;
        $data->tempat_tanggal_lahir = $request->tempat_tanggal_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->alamat_asal = $request->alamat_asal;
        $data->alamat_tujuan = $request->alamat_tujuan;
        $data->alasan_pindah = $request->alasan_pindah;
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
        $data = PindahModel::find($id);
        return view('pages.edit.edit_pindah', compact('data'));
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
   
        
        $data = PindahModel::find($id);
        $data->tanggal = $request->tanggal;
        $data->nama = $request->nama;
        $data->tempat_tanggal_lahir = $request->tempat_tanggal_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->alamat_asal = $request->alamat_asal;
        $data->alamat_tujuan = $request->alamat_tujuan;
        $data->alasan_pindah = $request->alasan_pindah;
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
        $data = PindahModel::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
