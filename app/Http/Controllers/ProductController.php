<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
   {
    $products = [
        ['The Lightning Theif' =>'Book 1', 'price' => 300],
        ['The House of Hades' =>'Book 2', 'price' => 350],
        ['Avatar: The Last Airbender' =>'Book 3', 'price' => 250],

    ];
    return view('products.index', compact('products'));
   }
}
