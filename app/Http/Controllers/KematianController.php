<?php

namespace App\Http\Controllers;

use App\Models\KematianModel;
use Illuminate\Http\Request;


class KematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KematianModel::all();
        // return $data;
        return view('pages.kematian', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new KematianModel;
        return view('pages.create.add_kematian', compact('data'));
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
            'tanggal_meninggal' => 'Required',
            'alamat' => 'Required',
            'jenis_kelamin' => 'Required',
            'ahli_waris' => 'Required',
            'status_surat' => 'Required',
        ]);

        $data = new KematianModel();
        $data->tanggal = $request->tanggal;
        $data->nama = $request->nama;
        $data->tempat_tanggal_lahir = $request->tempat_tanggal_lahir;
        $data->tanggal_meninggal = $request->tanggal_meninggal;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->ahli_waris = $request->ahli_waris;
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
        $data = KematianModel::find($id);
        return view('pages.edit.edit_kematian', compact('data'));
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
   
        
        $data = KematianModel::find($id);
        $data->tanggal = $request->tanggal;
        $data->nama = $request->nama;
        $data->tempat_tanggal_lahir = $request->tempat_tanggal_lahir;
        $data->tanggal_meninggal = $request->tanggal_meninggal;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->ahli_waris = $request->ahli_waris;
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
        $data = KematianModel::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
