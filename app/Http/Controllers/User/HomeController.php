<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(3)->get();

        return view('user.index', compact('products'));
    }

    public function shop()
    {
        $categories = Category::all(); // ambil semua kategori

        $query = Product::with('category')->latest();

        if (request('category')) {
            $query->whereHas('category', function ($q) {
                $q->where('slug', request('category'));
            });
        }

        $products = $query->paginate(6)->withQueryString();

        return view('user.shop', compact('products', 'categories'));
    }

    public function cart()
{
    $products = Product::latest()->take(3)->get(); // bebas mau berapa

    return view('user.cart', compact('products'));
}
}
