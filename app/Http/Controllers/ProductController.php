<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $product = Product::all();
        return response()->json([
            'data' => $product
        ], 200);
    }
}
