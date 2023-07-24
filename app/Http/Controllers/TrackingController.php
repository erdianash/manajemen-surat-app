<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function getTrackingSurat($nama,$nama_tb){
        $data = "";
        if($nama_tb == 'asing'){
            $data = modelAsing::select('*')->where('nama',$nama)->get();
            }
        else if($nama_tb == 'np'){
            $data = modelNp::select('*')->where('nama',$nama)->get();
        }
        else if($nama_tb == 'pindah'){
            $data = modelPindah::select('*')->where('nama',$nama)->get();
        }
        else if($nama_tb == 'kelahiran'){
            $data = modelKelahiran::select('*')->where('nama',$nama)->get();
        }
        else if($nama_tb == 'kematian'){
            $data = modelKematian::select('*')->where('nama',$nama)->get();
        }
        else if($nama_tb == 'kawin'){
            $data = modelKawin::select('*')->where('nama',$nama)->get();
        }
        return view('tracking', compact('data'));
}
        
    
    }