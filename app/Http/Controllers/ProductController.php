<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::retrieve()
            ->status('active')
            ->isQualityApproved()
            ->hasPrice()
            ->hasImage()
            ->hasBrand()
            ->get();

        return view('products.catalog')->with(['products' => $products]);
    }
}
