<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(3)->get();

        return view('user.index', compact('products'));
    }
}