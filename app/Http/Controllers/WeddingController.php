<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use DB;
use Session;

use App\Models\Salam;
use App\Models\Tamu;

class WeddingController extends Controller
{

    public function wedding($tamu)
    {
        $nama = '';
        $exist = Tamu::where('nama', $tamu)->first();
        if(!$exist) $tamu = 'Tamu Undangan';
        else {
            $nama = $tamu;
        }

        return view('wedding')->with([ 'tamu' => $tamu, 'nama' => $nama ]);
    }

    public function getRSVP(Request $request)
    {
        try {
            $salam = Salam::all();
            $data = Array(
                "status" => 'S',
                "data" => $salam
            );
            return json_encode($data);
        } catch (\Exception $e) {
            $data = Array(
                "status" => 'E',
                "data" => $e->getMessage()
            );
            return json_encode($data);
        }
    }

    public function submitRSVP(Request $request)
    {

    }
}