<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use DB;
use Session;

use App\Models\Salam;
use App\Models\Tamu;
use App\Models\Kado;

class WeddingController extends Controller
{

    public function wedding($tamu)
    {
        $nama = $tamu;//'';
        if($tamu == 'invitation') {
            $tamu = 'Tamu Undangan';
            $nama = '';
        } else if($tamu == 'filter') {
            return redirect()->to('https://pgn.co.id');
        } else if($tamu == 'wtdsolo') {
            return redirect()->to('https://pertamina.com');
        }
        // $exist = Tamu::where('nama', $tamu)->first();
        // if(!$exist) $tamu = 'Tamu Undangan';
        // else {
        //     $nama = $tamu;
        // }

        return view('wedding')->with([ 'tamu' => $tamu, 'nama' => $nama ]);
    }

    public function getRSVP(Request $request)
    {
        try {
            $salam = Salam::orderBy('id', 'desc')->get();
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
        try {
            $req=json_decode($request->getContent());
            $data = [
                'nama' => $req->nama,
                'rsvp' => $req->rsvp,
                'pesan' => $req->pesan
            ];
        
            $submit = Salam::create($data);
            $data = Array(
                "status" => 'S',
                "data" => $data
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

    public function copyKado(Request $request)
    {
        try {
            $req=json_decode($request->getContent());
            $data = [
                'nama' => $req->nama,
                'rsvp' => $req->rsvp,
                'pesan' => $req->pesan
            ];
        
            $submit = Salam::insert($data);
            $data = Array(
                "status" => 'S',
                "data" => $data
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

    public function submitKado(Request $request)
    {
        try {
            $req=json_decode($request->getContent());

            if($req->jenis == 'm') $jenis = 'mandiri';
            else if($req->jenis == 'd') $jenis = 'dana';
            else $jenis = 'bca';
            $data = [
                'nama' => $req->nama,
                'jenis' => $jenis
            ];
        
            $submit = Kado::insert($data);
            $data = Array(
                "status" => 'S',
                "data" => $data
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
}