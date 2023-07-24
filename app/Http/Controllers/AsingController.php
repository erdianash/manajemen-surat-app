<?php

namespace App\Http\Controllers;

use App\Models\AsingModel;
use Illuminate\Http\Request;


class AsingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AsingModel::all();
        // return $data;
        return view('pages.asing', compact('data'));
    
    $search = $request->input('search');

    // Query data dengan pencarian jika ada
    $data = AsingModel::where('nama', 'LIKE', "%$search%")
                 ->orWhere('description', 'LIKE', "%$search%")
                 ->paginate(10);

    return view('pages.asing', compact('data'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new AsingModel;
        return view('pages.create.add_asing', compact('data'));
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
            'paspor' => 'Required',
            'kitas' => 'Required',
            'alamat' => 'Required',
            'nama_sponsor' => 'Required',
            'nik' => 'Required',
            'status_surat' => 'Required',
        ]);

        $data = new AsingModel();
        $data->tanggal = $request->tanggal;
        $data->nama = $request->nama;
        $data->paspor = $request->kitas;
        $data->kitas = $request->paspor;
        $data->alamat = $request->alamat;
        $data->nama_sponsor = $request->nama_sponsor;
        $data->nik = $request->nik;
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
        $data = AsingModel::find($id);
        return view('pages.edit.edit_asing', compact('data'));
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
   
        
        $data = AsingModel::find($id);
        // $data->tanggal = $request->tansggal;
        // $data->nama = $request->nama;
        $data->paspor = $request->paspor;
        $data->kitas = $request->kitas;
        $data->alamat = $request->alamat;
        $data->nama_sponsor = $request->nama_sponsor;
        $data->nik = $request->nik;
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
        $data = AsingModel::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
    
}
