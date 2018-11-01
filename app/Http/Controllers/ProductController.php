<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Product;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $product = new Product();
        $product->name = 'Fifa 19';
        $product->price = 5000;
        $product->save();

        $shop = Shop::find([1, 4]);
        $product->shops()->attach($shop);

        return "Success";
    }

    public function show(Product $product)
    {
        // dd($product->categories());
        return view('product.show', compact('product'));
    }

    public function removeProduct(Product $product)
    {
        $product = Product::find(10);
        $product->shops()->detach();

        return "Success";
    }
}
