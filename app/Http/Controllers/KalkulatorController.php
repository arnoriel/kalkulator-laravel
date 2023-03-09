<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function kalkulatorIndex(){

        return view('welcome');

    }
    public function kalkulatorFunc(Request $request){

        $first = $request->first;
        $second = $request->second;
        $operasi = $request->operasi;

        if($operasi == 'tambah'){
            $hasil = $first + $second;
            return view('welcome', compact('hasil'));
        }
        elseif($operasi == 'kurang'){
            $hasil = $first - $second;
            return view('welcome', compact('hasil'));
        }
        elseif($operasi == 'bagi'){
            $hasil = $first / $second;
            return view('welcome', compact('hasil'));
        }
        elseif($operasi == 'kali'){
            $hasil = $first * $second;
            return view('welcome', compact('hasil'));
        } else {
            return 'tidak ada';
        }

    }
}
