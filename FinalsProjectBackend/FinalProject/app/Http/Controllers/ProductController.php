<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('barang.index', compact('products'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|string|min:5|max:80',
        'price' => 'required|regex:/^Rp\\.\\d+$/', 
        'quantity' => 'required|integer|min:1', 
        'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
    ]);

    Product::create($request->all());

    return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function addToCart(Product $product)
    {
    if ($product->quantity <= 0) {
        return redirect()->back()->with('error', 'Barang sudah habis, silakan tunggu restock.');
    }

    $cart = session()->get('cart', []);
    if (isset($cart[$product->id])) {
        $cart[$product->id]['quantity']++;
    } else {
        $cart[$product->id] = [
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'image' => $product->image
        ];
    }

    session()->put('cart', $cart);

    return redirect('/products')->with('success', 'Barang ditambahkan ke keranjang.');
    }


    public function show(Product $product)
    {
        return view('barang.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('barang.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $product->update($request->all());
        return redirect()->route('barang.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('barang.index')->with('success', 'Product deleted successfully.');
    }
}
