<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use DB;
use Session;

// use App\Models\Wedding;

class WeddingController extends Controller
{

    public function wedding($tamu)
    {
        return view('wedding');
        //     ->with([
        //         'data_paymentRequest' => $data_paymentRequest,
        //     ]);
    }
}