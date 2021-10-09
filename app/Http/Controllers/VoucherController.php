<?php

namespace App\Http\Controllers;
use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    //
    public function index(){
        if(!Session::get('login')){
            // return redirect()->route('login')->with('alert', 'Harus Login terlebih dahulu');
            return response()->json([
                'success' => false,
                'message' => 'Harus Login Dahulu!'
            ], 200,);
        }else{
            $voucher = Voucher::latest()->get();
            return response()->json([
                'data' => $voucher
            ], 200);
        }
    }
}
