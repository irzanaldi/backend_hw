<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lagu;

class LaguController extends Controller
{
    //
    public function index(){
        $lagu = Lagu::latest()->get();
        return response()->json([
            'data' => $lagu
        ], 200);
    }

    public function chartLagu(){
        $chart = DB::table('Lagus')->orderby('jumlah_dimainkan')->limit(10);
        return response()->json([
            'data' => $chart
        ], 200);
    }
}
