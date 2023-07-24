<?php

namespace App\Http\Controllers;

use App\Models\KelahiranModel;
use Illuminate\Http\Request;


class KelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KelahiranModel::all();
        // return $data;
        return view('pages.kelahiran', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new KelahiranModel;
        return view('pages.create.add_kelahiran', compact('data'));
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
            'jenis_kelamin' => 'Required',
            'nama' => 'Required',
            'tempat_tanggal_lahir' => 'Required',
            'alamat' => 'Required',
            'status_surat' => 'Required',
        ]);

        $data = new KelahiranModel();
        $data->tanggal = $request->tanggal;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->nama = $request->nama;
        $data->tempat_tanggal_lahir = $request->tempat_tanggal_lahir;
        $data->alamat = $request->alamat;
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
        $data = KelahiranModel::find($id);
        return view('pages.edit.edit_kelahiran', compact('data'));
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
   
        
        $data = KelahiranModel::find($id);
        $data->tanggal = $request->tanggal;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->nama = $request->nama;
        $data->tempat_tanggal_lahir = $request->tempat_tanggal_lahir;
        $data->alamat = $request->alamat;
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
        $data = KelahiranModel::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
