<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    //
    public function index(){
        $banner = Banner::latest()->get();
        return response()->json([
            'succes' => true,
            'data' => $banner
            ]);
    }

}
