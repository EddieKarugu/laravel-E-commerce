<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tiles;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        $tiles = Tiles::all();
        return view('pages.welcome', compact('products', 'tiles'));
    }
    public function details($productid){
        $product = Product::findOrFail($productid);
        
        return view('pages.productDetails',
            compact('product'));
    }
}
