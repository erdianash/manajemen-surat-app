<?php

namespace App\Http\Controllers;

use App\Models\AsingModel;
use App\Models\KawinModel;
use App\Models\KelahiranModel;
use App\Models\KematianModel;
use App\Models\NpModel;
use App\Models\PindahModel;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function getTrackingSurat($nama,$nama_tb){
        $data = "";
        if($nama_tb == 'asing'){
            $data = AsingModel::select('*')->where('nama',$nama)->get();
            }
        else if($nama_tb == 'np'){
            $data = NpModel::select('*')->where('nama',$nama)->get();
        }
        else if($nama_tb == 'pindah'){
            $data = PindahModel::select('*')->where('nama',$nama)->get();
        }
        else if($nama_tb == 'kelahiran'){
            $data = KelahiranModel::select('*')->where('nama',$nama)->get();
        }
        else if($nama_tb == 'kematian'){
            $data = KematianModel::select('*')->where('nama',$nama)->get();
        }
        else if($nama_tb == 'kawin'){
            $data = KawinModel::select('*')->where('nama',$nama)->get();
        }
        return view('tracking', compact(['data','nama_tb']));
    }
}